<?php namespace App\Models;

use CodeIgniter\Model;

class JualModel extends Model{
 
    protected $table = 'jual';

    public function getAllJual()
	{
		return $this->query("SELECT * from jual order by IDpenjualan ASC")->getResult();
	}
 
    public function getJual($id)
    {
        return $this->query("SELECT * from jual where IDpenjualan = '$id'")->getRow();
    }

    public function addJual($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
 
}