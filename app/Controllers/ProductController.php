<?php namespace App\Controllers;
 
use App\Models\ProductModel;
 
class ProductController extends BaseController
{
 
    protected $tc;

    function __construct() {
        $this->product = new ProductModel();
    }
 
    public function index()
    {
        $data['items'] = $this->product->getAllProducts();
        if (empty(is_array(session('cart'))? array_values(session('cart')): array())){
            $data['tc'] = 0;
        }
        else {
            $this->tc = new CartController();
            $data['tc'] = $this->tc->totalItemsInCart();
        }
        return view('ProductGalleryView', $data);
    }

    public function updateProduct($id, $qty)
    {
        $data = $this->product->getProduct($id);
        $stock = ($data->stock - $qty);
        return $this->product->updateProduct($id,$stock);
    }
 
}