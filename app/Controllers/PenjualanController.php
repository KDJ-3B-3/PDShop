<?php namespace App\Controllers;

//define("DOMPDF_TEMP_DIR", $_SERVER["DOCUMENT_ROOT"]."/images/");

use App\Models\ProductModel;
use App\Models\PenjualanModel;
use App\Models\JualModel;
 
class PenjualanController extends BaseController
{
    function __construct() {
        $this->penjualan = new PenjualanModel();
    }
    
    public function index()
    {
        $data['items'] = $this->penjualan->getAllPenjualan();
        return view('AdminView', $data);
    }

    public function exportExcel()
    {                       
        $data['items'] = $this->penjualan->getAllPenjualan();
        return view('ExportExcelProcessView', $data);
    }

    public function exportPdf() //htmlToPDF
    {                       
        $dompdf = new \Dompdf\Dompdf();
        $data['items'] = $this->penjualan->getAllPenjualan();
        $dompdf->load_html(view('ExportPDFProcessView', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Data Penjualan.pdf');
    }
}