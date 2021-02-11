<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\PenjualanModel;
use App\Models\JualModel;
use App\Models\OngkirModel;
 
class CheckoutController extends BaseController
{
    protected $prd;

    public function checkoutFormView(){
        if (empty(is_array(session('cart'))? array_values(session('cart')): array())){
            $data['tc'] = 0;
        }
        else {
            $this->tc = new CartController();
            $data['tc'] = $this->tc->totalItemsInCart();
        }
        return view('CustomerFormView',$data);
    }

    public function checkoutCart(){
        $nama = $this->request->getPost('nama');
        $hp = $this->request->getPost('nomorhp');
        $alamat = $this->request->getPost('alamat');
        $kec = $this->request->getPost('kecamatan');

        // $productModel = new ProductModel();
        $penjualanModel = new PenjualanModel();
        $jualModel = new JualModel();

        $cart = array_values(session('cart'));

        date_default_timezone_set('Asia/Jakarta');
        $date = date("Y-m-d H:i:s");

        $totalH = $this->total();
        $ongkirH = $this->totalOngkir($kec);
        $totalHarga = ($totalH + $ongkirH);

        $dataPenj = [
            'tanggal' => $date,
            'total' => $totalHarga,
            't_ongkir' => $ongkirH,
            'nama' => $nama,
            'hp' => $hp,
            'alamat' => $alamat,
            'kec_tujuan' => $kec,
        ];

        $penjualan = $penjualanModel->addPenjualan($dataPenj);
        if ($penjualan){
            $id = $penjualanModel->getLastID();
            for ($i=0; $i<count($cart); $i++){
                $data = [
                    'IDpenjualan' => $id->IDpenjualan,
                    'kodebrg' => $cart[$i]['kodebrg'],
                    'harga' => $cart[$i]['harga'],
                    'qty' => $cart[$i]['quantity']
                ];
                $jual = $jualModel->addJual($data);
                if ($jual){
                    $this->prd = new ProductController();
                    $tes = $this->prd->updateProduct($cart[$i]['kodebrg'],$cart[$i]['quantity']);
                } else {
                    $del = $penjualanModel->deleteLastRow();
                    if ($del){
                        echo "<pre>";
                        echo print_r($penjualanModel->errors());
                        echo "</pre>";
                    }
                }
            }
            $this->prd = new CartController();
            $this->prd->removeCart();
            return $this->response->redirect(base_url('/Home'));
        }
        else {
            echo "<pre>";
            echo print_r($penjualanModel->errors());
            echo "</pre>";
        }
        
    }

    public function checkoutView(){
        $penjualanModel = new PenjualanModel();
        $jualModel = new JualModel();
        $id = $penjualanModel->getLastID();
        $data['penjualan'] = $penjualanModel->getPenjualan($id->IDpenjualan);
        $data['jual'] = $jualModel->getJual($id->IDpenjualan);

        return view('CheckoutView', $data);
    }

    public function checkidp(){
        $penjualanModel = new PenjualanModel();
        $id = $penjualanModel->getLastID();
        print_r($id->IDpenjualan);
    }

    private function total(){
        $t = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item){
            $t += $item['harga'] * $item['quantity'];
        }
        return $t;
    }

    private function totalOngkir($kec){
        $ongkirModel = new OngkirModel();
        $hargaOngkir = $ongkirModel->getOngkir($kec);
        $t = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item){
            $t += $item['berat'] * $item['quantity'];
        }

        if(fmod($t, 1) > 0.3) {
            $hrg = (ceil($t) * $hargaOngkir->ongkir_per_kg);
        } else {
            $hrg = (floor($t) * $hargaOngkir->ongkir_per_kg);
        }

        return ($hrg);
    }
}