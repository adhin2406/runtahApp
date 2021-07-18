<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\NotivModel;

class Auth extends BaseController
{

    protected $AuthModel;
    protected $NotivModel;

    public function __construct()
    {
        $this->AuthModel = new AuthModel();
        $this->NotivModel = new NotivModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Login-Runtah',
            'css' => 'Auth.css',
            'validation' => \Config\Services::validation()
        ];

        return view('Auth/Login', $data);
    }


    public function Login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|alpha_numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'alpha_numeric' => 'username hanya boleh diisi dengan huruf dan angka'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Auth')->withInput()->with('validation', $validation);
        }

        $username = htmlspecialchars($this->request->getVar('username'));
        $password = htmlspecialchars($this->request->getVar('password'));
        $data = $this->AuthModel->where(['username' => $username])->first();
        if ($data) {
            if (password_verify($password, $data['password'])) {
                session()->set([
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'email' => $data['email'],
                    'alamat' => $data['alamat'],
                    'nomer' => $data['nomer'],
                    'gambar' => $data['gambar'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/Utama');
            } else {
                session()->setFlashdata('error', 'Password anda Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username tidak terdaftar');
            return redirect()->back();
        }
    }

    public function join()
    {
        $data = [
            'title' => 'Join-Runtah',
            'css' => 'Auth.css',
            'validation' => \Config\Services::validation()
        ];

        return view('Auth/register', $data);
    }

    public function daftar()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[6]|max_length[26]|is_unique[user.username]|alpha_numeric|alpha_space',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 6 Karakter',
                    'max_length' => '{field} Maksimal 26 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya',
                    'alpha_numeric' => 'username hanya boleh diisi dengan huruf dan angka',
                    'alpha_space' => 'tidak boleh ada jarak'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[50]|is_unique[user.password]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 8 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                    'is_unique' => 'password sudah digunakan sebelumnya'
                ]
            ],
            'password_conf' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Format Email Harus Valid',
                    'is_unique' => 'email sudah digunakan sebelumnya'
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 10 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'nomer' => [
                'rules' => 'required|numeric|is_unique[user.nomer]|min_length[12]|max_length[13]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => 'Diisi dengan angka bukan huruf',
                    'is_unique' => 'nomer  sudah terdaftar',
                    'min_length' => '{field} Minimal 12 Karakter',
                    'max_length' => '{field} Maksimal 13 Karakter',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Auth/Join')->withInput()->with('validation', $validation);
        }

        $rekening = $this->NotivModel->generate_code(16);

        $this->AuthModel->save([
            'username' =>  htmlspecialchars($this->request->getVar('username')),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' =>  htmlspecialchars($this->request->getVar('email')),
            'rekening' => $rekening,
            'nomer' =>  htmlspecialchars($this->request->getVar('nomer')),
            'alamat' =>  htmlspecialchars($this->request->getVar('alamat')),
            'gambar' => 'user.png',
            'level' => 'user'
        ]);

        session()->setFlashdata('success', 'selamat datang');
        return redirect()->to('/Auth');
    }

    public function set($id)
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[6]|max_length[26]|trim',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'min_length' => '{field} Minimal 6 Karakter',
                    'max_length' => '{field} Maksimal 26 Karakter',
                    'trim'       => 'tidak boleh pakai spasi'
                ]
            ],
            'email' => [
                'rules' => 'valid_email|required',
                'errors' => [
                    'required' => 'email harus diisi',
                    'valid_email' => 'Format Email Harus Valid',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[10]|max_length[50]',
                'errors' => [
                    'required' => 'alamat harus diisi ',
                    'min_length' => '{field} Minimal 10 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'nomer' => [
                'rules' => 'required|numeric|min_length[12]|max_length[13]',
                'errors' => [
                    'required' => 'nomer hp harus diissi',
                    'numeric' => 'Diisi dengan angka bukan huruf',
                    'min_length' => '{field} Minimal 12 Karakter',
                    'max_length' => '{field} Maksimal 13 Karakter',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar, 1024]|is_image[gambar]|mime_in[gambar, image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda upload bukan gambar',
                    'mime_in' => 'yang anda upload bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/Utama/setting')->withInput();
        }

        $gambar = $this->request->getFile('gambar');

        if ($gambar->getError() == 4) {
            $namaGambar1 = $this->request->getVar('gambarlama');
        } else {
            $namaGambar1 = $gambar->getRandomName();
            // upload gambar
            $gambar->move('img/users', $namaGambar1);
        }

        $this->AuthModel->save([
            'id' => $id,
            'username' =>  $this->request->getVar('username'),
            'email' =>  $this->request->getVar('email'),
            'nomer' =>  $this->request->getVar('nomer'),
            'alamat' =>  $this->request->getVar('alamat'),
            'gambar' => $namaGambar1,
        ]);

        $data = $this->AuthModel->Ubah($id);
        session()->set([
            'id' => $data['id'],
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'nomer' => $data['nomer'],
            'gambar' => $data['gambar'],
        ]);

        return redirect()->to('/Utama/setting');
    }


    public function keamanan($id)
    {
        if (!$this->validate([
            'passwordlama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'passwordbaru' => [
                'rules' => 'required|min_length[8]|max_length[50]|is_unique[user.password]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 8 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                    'is_unique' => 'password sudah digunakan sebelumnya'
                ]
            ],
            'konfirmasi' => [
                'rules' => 'required|matches[passwordbaru]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/Utama/setting')->withInput();
        }


        $passwordlama = $this->request->getVar('passwordlama');
        $passwordbaru = $this->request->getVar('passwordbaru');
        $data = $this->AuthModel->Ubah($id);

        if (password_verify($passwordlama, $data['password'])) {
            $this->AuthModel->save([
                'id' => $id,
                'password' => password_hash($passwordbaru, PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success', 'Password berhasil diganti');
            return redirect()->back();
        } else {
            session()->setFlashdata('error', 'Password lama anda salah');
            return redirect()->back();
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
