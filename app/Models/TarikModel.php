<?php

namespace App\Models;

use CodeIgniter\Model;

class TarikModel extends Model
{
    protected $table = 'TarikDana';
    protected $allowedFields = ['username', 'metode', 'nomer', 'status', 'jumlah_uang'];


    public function getAll($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function KonfirmasiTarikDana($id)
    {
        $this->set("status", 1);
        $this->where("id", $id);
        return $this->update();
    }
}
