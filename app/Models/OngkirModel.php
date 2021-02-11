<?php namespace App\Models;

use CodeIgniter\Model;

class OngkirModel extends Model{
 
    protected $table = 'ongkir';
 
    public function getOngkir($kecamatan)
    {
        return $this->query("SELECT ongkir_per_kg from ongkir where kec_tujuan = '$kecamatan'")->getRow();
    } 
}