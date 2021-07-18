<?php

namespace App\Models;

use CodeIgniter\Model;

class NotivModel extends Model
{
    protected $table = 'notifikasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'idtransaksi', 'harga', 'berat', 'nama_sampah', 'alamat', 'gambar', 'gambarSampah', 'status', 'nomer', 'jadwal'];

    public function getNotiv($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function TransaksiSampah($id = false)
    {
        $this->where(['idtransaksi' => $id]);
        return $this->findAll();
    }

    public function getName($nama = false)
    {
        if ($nama === false) {
            return $this->findAll();
        }
        return $this->where(['username' => $nama])->first();
    }

    public function lihatNama($nama = false)
    {
        if ($nama === false) {
            return $this->findAll();
        }
        return $this->where(['nama_sampah' => $nama])->first();
    }


    public function hapusSampah($id)
    {
        $this->where(["idtransaksi" => $id]);
        $this->delete();
        return $this->findAll();
    }


    public function lihat()
    {
        $this->where(['username' => session()->get('username')]);
        $this->groupBy("idtransaksi");
        return $this->doFindAll();
    }

    public function saldoUser($nama)
    {
        $this->selectSum('harga')->where(['username' => $nama]);
        return $this->find();
    }

    public function saldo()
    {
        $this->groupBy('idtransaksi');
        $this->selectSum('harga')->where(['idtransaksi']);
        return $this->findAll();
    }

    public function saldosemua()
    {
        $this->selectSum("harga");
        return $this->findAll();
    }
    public function tarik($nama = false)
    {
        if ($nama === false) {
            return $this->findAll();
        }
        return $this->where(['username' => $nama])->first();
    }

    public function pesanan($id)
    {
        $this->set("status", 1);
        $this->where("id", $id);
        return $this->update();
    }

    public function recodAkhir()
    {
        $this->orderBy('id', 'DESC')->limit(1);
        return $this->find();
    }

    public function transaksi()
    {
        $this->orderBy('idtransaksi', 'DESC')->limit(1);
        return $this->doFirst();
    }

    public function generate_code($angka)
    {
        $code = '12345678910111213141516171819202122232425' . time();
        $string = '';
        for ($i = 0; $i < $angka; $i++) {
            $pos = rand(0, strlen($code) - 1);
            $string .= $code[$pos];
        }
        return 'RN/' . $string;
    }
}
