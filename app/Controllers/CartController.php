<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\PenjualanModel;
use App\Models\JualModel;
 
class CartController extends BaseController
{
    protected $prd;

    public function index()
    {

        if (empty(is_array(session('cart'))? array_values(session('cart')): array())){
            return view('ShoppingCartView');
        } else{
            $data['items'] = array_values(session('cart'));
            $data['total'] = $this->total();
            if (empty(is_array(session('cart'))? array_values(session('cart')): array())){
                $data['tc'] = 0;
            }
            else {
                $tc = new CartController();
                $data['tc'] = $tc->totalItemsInCart();
            }
            return view('ShoppingCartView', $data);
        }
    }

    public function addToCart($id)
    {
        $session = session();

        $productModel = new ProductModel();     
        $product = $productModel->getProduct($id);
        $item = array(
            'kodebrg' => $product->kodebrg,
            'namabrg' => $product->namabrg,
            'harga' => $product->harga,
            'stock' => $product->stock,
            'namafoto' => $product->namafoto,
            'berat' => $product->berat,
            'quantity' => 1
        );
    
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if($index == -1){
                array_push($cart, $item);
            } else {
                $cart[$index]['quantity']++;
            }
            $session->set('cart', $cart);
        }
        else {
            $cart = array($item);
            $session->set('cart', $cart);
        }

        // return $this->response->redirect(site_url('CartController/index'));
        return $this->response->redirect(base_url('/ShoppingCart'));
        
    }

    public function updateCart(){
        $session = session();

        $cart = array_values(session('cart'));
        for ($i=0; $i<count($cart); $i++){
            $cart[$i]['quantity'] = $_POST['quantity'][$i];
        }
        $session->set('cart', $cart);
        return $this->response->redirect(base_url('/ShoppingCart'));
    }

    public function totalItemsInCart(){
        $total = 0;
        $cart = array_values(session('cart'));
        for ($i=0; $i<count($cart); $i++){
            $total += $cart[$i]['quantity'];
        }
        return $total;
    }

    public function removeCart(){
        $session = session();
        $session->destroy();
        // return $this->response->redirect(site_url('CartController/index'));
        return redirect()->to(base_url('/ShoppingCart'));
        // return $this->response->redirect(base_url('/ShoppingCart'));
    }

    public function removeCartPerItem($id){
        $session = session();
        //$session->destroy();
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            unset($cart[$index]);
            $temp = array_values($cart);
            $session->set('cart', $temp);
        }
        return $this->response->redirect(base_url('/ShoppingCart'));
    }

    private function exists($id){
        $items = array_values(session('cart'));
        for ($i=0; $i<count($items); $i++){
            if ($items[$i]['kodebrg'] == $id){
                return $i;
            }
        }
        return -1;
    }

    private function total(){
        $t = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item){
            $t += $item['harga'] * $item['quantity'];
        }
        return $t;
    }
}