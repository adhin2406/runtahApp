<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\KeranjangModel;
use App\Models\namaModel;
use App\Models\NotivModel;
use App\Models\saldoModel;
use App\Models\SampahModel;
use App\Models\saranModel;
use App\Models\TarikModel;
use PhpParser\Node\Stmt\Foreach_;

class Utama extends BaseController
{

    protected $AuthModel;
    protected $SampahModel;
    protected $NotivModel;
    protected $saranModel;
    protected $saldoModel;
    protected $keranjangModel;
    protected $namaModel;
    protected $TarikModel;

    public function __construct()
    {
        $this->AuthModel = new AuthModel();
        $this->SampahModel = new SampahModel();
        $this->NotivModel = new NotivModel();
        $this->saranModel = new saranModel();
        $this->saldoModel = new saldoModel();
        $this->keranjangModel = new KeranjangModel();
        $this->namaModel = new namaModel();
        $this->TarikModel = new TarikModel();
    }


    public function index()
    {
        $cart = \Config\Services::cart();
        $data = [
            'title' => 'Runtah-Mari Jaga Bumi Kita',
            'css' => 'Utama.css',
            'produk' => $cart->totalItems(),
            'query' => $this->SampahModel->edit(),
            'saldo' => $this->saldoModel->saldo(),
        ];
        return view('user/index', $data);
    }

    public function chekout()
    {
        $dinar = $this->NotivModel->lihat();
        $data = [
            'title' => 'History transaksi',
            'css' => 'Utama.css',
            'notiv' => $dinar,
            'saldo' => $this->NotivModel->saldo(),
            'pager' => $this->NotivModel->pager
        ];
        return view('user/content/notiv', $data);
    }

    public function konfirmasi($id)
    {

        $data = [
            'title' => 'Detail Transaksi',
            'css' => 'Utama.css',
            'notiv' => $this->NotivModel->TransaksiSampah($id),
            'data' => $this->NotivModel->getNotiv($id)
        ];
        return view('user/content/konfirmasiBarang', $data);
    }

    public function detail($nama)
    {
        $cart = \Config\Services::cart();
        $data = [
            'title' => 'Detail Sampah',
            'css' => 'Utama.css',
            'total' => $cart->totalItems(),
            'query' => $this->SampahModel->lihatNama($nama),
            'validation' => \Config\Services::validation(),
            'sampahLain' => $this->SampahModel->category(),
            'produk' => $nama
        ];

        return view('user/content/Beli', $data);
    }

    public function more()
    {
        $data = [
            'title' => 'Harga sampah',
            'css' => 'Utama.css',
            'query' => $this->SampahModel->edit()
            // 'validation' => \Config\Services::validation()
        ];

        return view('user/content/more', $data);
    }


    public function setting()
    {
        $data = [
            'title' => 'Setting Profil',
            'css' => 'Utama.css',
            'validation' => \Config\Services::validation(),
            'akunBank' => $this->namaModel->lihat()
        ];

        return view('user/content/setting', $data);
    }

    public function saran()
    {

        if (!$this->validate([
            'user' => [
                'rules' => 'required|min_length[6]|max_length[26]',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'min_length' => '{field} Minimal 6 Karakter',
                    'max_length' => '{field} Maksimal 26 Karakter',
                ]
            ],
            'saran' => [
                'rules' => 'required|min_length[10]|max_length[600]',
                'errors' => [
                    'required' => 'saran harus diisi ',
                    'min_length' => '{field} Minimal 10 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
        ])) {
            return redirect()->to('/Utama/setting')->withInput();
        }

        $this->saranModel->save([
            'username' => $this->request->getVar('user'),
            'saran' => $this->request->getVar('saran')
        ]);

        session()->setFlashdata('success', 'Terima kasih atas saran nya');
        return redirect()->to('/Utama/setting');
    }

    public function delete($id)
    {
        ## Check record
        if ($this->NotivModel->hapusSampah($id)) {
            ## Delete record
            session()->setFlashdata('gagal', 'maaf yang anda cari tidak ada');
            return redirect()->to('/Utama/chekout');
        } else {
            session()->setFlashdata('hapus', 'hapus berhasil');
            return redirect()->to('/Utama/chekout');
        }
    }

    public function bantuan()
    {
        $data = [
            'title' => 'bantu penggunaan aplikasi',
            'css' => 'Utama.css',
        ];

        return view('user/content/bantu', $data);
    }


    public function keranjang()
    {
        $cart = \Config\Services::cart();
        $result = $cart->contents();
        $data = [
            'title' => 'Keranjang Sampah',
            'css' => 'Utama.css',
            'query' => $this->SampahModel->lihatNama(),
            'Sampah' => $result,
            'validation' => \Config\Services::validation(),
        ];
        return view('user/content/keranjang', $data);
    }


    public function beli()
    {
        $pr_id = $this->request->getPost('produk_id');
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getVar('id'),
            'qty'     => 1,
            'price'   => $this->request->getVar('harga'),
            'name'    => $this->request->getVar('nama_sampah'),
            'user'    => $this->request->getVar('user'),
            'berat'    => $this->request->getVar('berat'),
            'gambar'    => $this->request->getVar('gambar'),
        ));

        session()->setFlashdata('item', 'item sudah ditambahkan');
        return redirect()->to('Utama/detail/' . $pr_id);
    }

    public function hapusKeranjang($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        session()->setFlashdata('item', 'item sudah dihapus');
        return redirect()->to('Utama/keranjang');
    }

    public function notif()
    {
        $cart = \Config\Services::cart();
        $result = $cart->contents();
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar, 1024]|is_image[gambar]|mime_in[gambar, image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'upload gambar terlebih dahulu',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda upload bukan gambar',
                    'mime_in' => 'yang anda upload bukan gambar'
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
                'rules' => 'required|numeric|min_length[12]|max_length[13]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => 'Diisi dengan angka bukan huruf',
                    'min_length' => '{field} Minimal 12 Karakter',
                    'max_length' => '{field} Maksimal 13 Karakter',
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jadwal penjemputan Harus diisi',
                ]
            ]

        ])) {
            return redirect()->to('/Utama/keranjang')->withInput();
        }
        $gambar = $this->request->getFile('gambar');
        $gambar->move('img/tabungan');
        $namagambar = $gambar->getName();

        $transaksi = $this->NotivModel->transaksi();

        if ($transaksi) {
            $id_transaksi = $transaksi['idtransaksi'] + 1;
        } else {
            $id_transaksi = 1;
        }


        foreach ($result as $key) {
            $data[] = array(
                $this->NotivModel->save([
                    'idtransaksi' => $id_transaksi,
                    'nama_sampah' => $key['name'],
                    'harga' => $key['price'],
                    'berat' => $key['berat'],
                    'username' =>  $this->request->getVar('user'),
                    'alamat' => $this->request->getVar('alamat'),
                    'gambarSampah' => $key['gambar'],
                    'gambar' => $namagambar,
                    'status' => 0,
                    'nomer' => $this->request->getVar('nomer'),
                    'jadwal' => $this->request->getVar('jadwal'),
                ])
            );
        }
        $cart->destroy();
        session()->setFlashdata('success', 'Matur nuwun');
        return redirect()->to('/Utama/chekout');
    }


    public function Tarik()
    {

        // dd($this->namaModel->lihat());

        $data = [
            'title' => 'tarik dana',
            'css' => 'Utama.css',
            'validation' => \Config\Services::validation(),
            'akunBank' => $this->namaModel->lihat(),
            'saldo' => $this->saldoModel->saldo(),
            'riwayat' => $this->TarikModel->findAll()
        ];
        return view('user/akun/tarikDana', $data);
    }


    public function TarikDana()
    {
        if (!$this->validate([
            'jumlah_uang' => [
                'rules' => 'required|numeric|min_length[5]|max_length[260]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => 'minimal penarikan 50 ribu',
                    'max_length' => '{field} Maksimal 260 Karakter',
                    'numeric' => 'harap diisi dengan angka ya',
                    'alpha_numeric' => 'tidak boleh ada titik atau koma ya'
                ]
            ],
            'saldo' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'numeric' => 'harap diisi dengan angka ya'
                ]
            ]
        ])) {
            return redirect()->to('/Utama/tarik')->withInput();
        }
        $jumlahUang = str_replace(".", "", $this->request->getVar('jumlah_uang'));
        $metode = $this->request->getVar('metode');
        $saldo = $this->saldoModel->saldo();

        foreach ($saldo as $key) {
            if ($jumlahUang > $key['saldo']) {
                session()->setFlashdata('maaf', 'maaf saldo tidak cukup');
                return redirect()->to('/Utama/tarik')->withInput();
            } else {
                if ($metode === 'tarik tunai') {
                    $this->TarikModel->save([
                        'username' => session()->get('username'),
                        'metode' => $metode,
                        'nomer' => session()->get('alamat'),
                        'status' => 0,
                        'jumlah_uang' => $jumlahUang,
                    ]);
                    return redirect()->to('/Utama/tarik');
                } else {
                    $this->TarikModel->save([
                        'username' => session()->get('username'),
                        'metode' => $metode,
                        'nomer' => $this->request->getVar('nomorRek'),
                        'status' => 0,
                        'jumlah_uang' => $jumlahUang,
                    ]);
                    return redirect()->to('/Utama/tarik');
                }
            }
        }
    }
}
