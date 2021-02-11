<?php namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model{
 
    protected $table = 'penjualan';

    public function getAllPenjualan()
	{
		return $this->query("SELECT * from penjualan order by IDpenjualan ASC")->getResult();
        // return $this->query("SELECT * from penjualan")->getResult();
	}
 
    public function getPenjualan($id)
    {
        return $this->query("SELECT * from penjualan where IDpenjualan = '$id'")->getRow();
    }

    public function getLastID()
    {
        return $this->query("SELECT IDpenjualan FROM penjualan ORDER BY IDpenjualan DESC LIMIT 1 ")->getRow();
    }

    public function deleteLastRow()
    {
        $id = $this->getLastID();
        return $this->query("DELETE FROM penjualan where IDpenjualan='$id->IDpenjualan'");
    }

    public function addPenjualan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}