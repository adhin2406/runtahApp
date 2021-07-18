<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\namaModel;

class Akun extends BaseController
{

    protected $akunBank;
    protected $namaBank;


    public function __construct()
    {
        $this->akunBank = new AkunModel();
        $this->namaBank = new namaModel();
    }


    public function index()
    {

        $data = [
            'title' => 'Tambah akun bank',
            'css' => 'akun.css',
            'bank' => $this->akunBank->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('user/akun/akun', $data);
    }


    public function Save()
    {
        if (!$this->validate([
            'nomer' => [
                'rules' => 'required|numeric|min_length[12]|max_length[13]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => 'Diisi dengan angka bukan huruf',
                    'min_length' => '{field} Minimal 12 Karakter',
                    'max_length' => '{field} Maksimal 13 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'valid_email|required',
                'errors' => [
                    'required' => 'email harus diisi',
                    'valid_email' => 'Format Email Harus Valid',
                ]
            ],
            'nomorRek' => [
                'rules' => 'required|numeric|is_unique[akunBank.rekening]|min_length[10]|max_length[16]',
                'errors' => [
                    'required' => 'nomer rekening Harus diisi',
                    'numeric' => 'Diisi dengan angka bukan huruf',
                    'is_unique' => 'rekening  sudah terdaftar',
                    'min_length' => 'nomer rekening Minimal 10 Karakter',
                    'max_length' => 'nomer rekening Maksimal 16 Karakter',
                ]
            ]
        ])) {
            return redirect()->to('/Akun')->withInput();
        }
        $this->namaBank->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'nomerhp' => $this->request->getVar('nomer'),
            'rekening' => $this->request->getVar('rekening'),
            'nomorRek' => $this->request->getVar('nomorRek')
        ]);

        session()->setFlashdata('success', 'Akun sudah terdaftar');
        return redirect()->to('/Utama/setting');
    }
}
