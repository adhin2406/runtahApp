<?php

namespace App\Models;

use CodeIgniter\Model;

class saldoModel extends Model
{
    protected $table = 'saldo';
    protected $allowedFields = ['nama', 'saldo', 'totalsaldo'];

    public function saldo()
    {
        $this->selectSum('saldo')->where(['nama' => session()->get('username')]);
        return $this->find();
        //SELECT SUM(harga) AS saldo FROM notifikasi WHERE username => session()->get('username')]) ;
    }

    public function KonfirmasiTarikDana($id)
    {
        $this->set("status", 1);
        $this->where("id", $id);
        return $this->update();
    }
}
