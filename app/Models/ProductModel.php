<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
 
    protected $table = 'barang';

    public function getAllProducts()
	{
		return $this->query("SELECT * from barang order by kodebrg ASC")->getResult();
	}
 
    public function getProduct($id)
    {
        return $this->query("SELECT * from barang where kodebrg = '$id'")->getRow();
    }

    public function updateProduct($id,$stock)
    {
    	return $this->query("UPDATE barang SET stock='$stock' WHERE kodebrg='$id'")->getResult();
    }
 
}