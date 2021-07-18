<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'email', 'nomer', 'rekening', 'alamat', 'gambar', 'level', 'saldo'];

    public function Ubah($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }


    public function jumlahUser()
    {
        $this->orderBy('id', 'DESC')->limit(1);
        return $this->find();
    }
}
