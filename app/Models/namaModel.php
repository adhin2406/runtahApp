<?php

namespace App\Models;

use CodeIgniter\Model;

class namaModel extends Model
{
    protected $table = 'akunBank';
    protected $allowedFields = ['nama', 'email', 'nomerhp', 'rekening', 'nomorRek', 'status'];

    public function lihat()
    {
        $this->where(['nama' => session()->get('username')]);
        return $this->findAll();
    }
}
