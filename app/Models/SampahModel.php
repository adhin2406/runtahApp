<?php

namespace App\Models;

use CodeIgniter\Model;

class SampahModel extends Model
{
    protected $table = 'sampah';
    protected $allowedFields = ['gambar', 'nama_sampah', 'berat', 'harga'];

    public function edit($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function cari($cari)
    {
        $this->findAll();
        if ($cari != '') {
            $this->like('nama_sampah', $cari);
            $this->orLike('harga', $cari);
        }
        return $this->find();
    }

    public function lihatNama($nama = false)
    {
        if ($nama === false) {
            return $this->findAll();
        }
        return $this->where(['nama_sampah' => $nama])->first();
    }

    public function category($nama = false)
    {
        if ($nama === false) {
            return $this->findAll();
        }
        return $this->where(['category' => $nama])->first();
    }
}
