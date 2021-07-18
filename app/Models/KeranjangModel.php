<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $allowedFields = ['user', 'hargaSampah', 'beratSampah', 'namaSampah', 'fotoSampah'];

    public function lihatSampah()
    {
        $this->where(['user' => session()->get('username')]);
        return $this->findAll();
    }
}
