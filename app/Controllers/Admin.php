<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\NotivModel;
use App\Models\SampahModel;
use App\Models\saranModel;
use App\Models\saldoModel;
use App\Models\TarikModel;

class Admin extends BaseController
{
	protected $AuthModel;
	protected $SampahModel;
	protected $NotivModel;
	protected $saranModel;
	protected $saldoModel;
	protected $tarikModel;



	public function __construct()
	{
		$this->AuthModel = new AuthModel();
		$this->SampahModel = new SampahModel();
		$this->NotivModel = new NotivModel();
		$this->saranModel = new saranModel();
		$this->saldoModel = new saldoModel();
		$this->tarikModel = new TarikModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Welcome Admin',
			'css' => 'admin.css',
			'headling' => 'Dashboard',
			'note' => $this->NotivModel->getNotiv(),
			'mintaan' => $this->NotivModel->paginate(4),
			'saldoOrang' => $this->NotivModel->saldosemua(),
			'tabung' => $this->NotivModel->recodAkhir(),
			'jumlahUser' => $this->AuthModel->jumlahUser()
		];
		return view('Admin/index', $data);
	}

	public function tabungan()
	{
		$data = [
			'title' => 'tabungan user',
			'css' => 'admin.css',
			'headling' => 'Tabungan user',
			'note' => $this->NotivModel->getNotiv(),
			'mintaan' => $this->NotivModel->paginate(4, 'tabungGas'),
			'pager' => $this->NotivModel->pager
		];

		return view('Admin/content/tabungan', $data);
	}

	public function konfirmasi($id)
	{
		// $this->NotivModel->pesanan($id);
		// return redirect()->to("/Admin/tabungan");
		if ($this->NotivModel->pesanan($id)) {
			$this->NotivModel->getNotiv($id);
			$this->saldoModel->save([
				'nama' => $this->request->getVar('username'),
				'saldo' => $this->request->getVar('harga'),
			]);
			return redirect()->to("/Admin/tabungan");
		}
	}

	public function nasabah()
	{
		$data = [
			'title' => 'Nasabah bank runtah',
			'css' => 'admin.css',
			'headling' => 'nasabah',
			'note' => $this->NotivModel->getNotiv(),
			'mintaan' => $this->NotivModel->paginate(4),
			'user' => $this->AuthModel->Ubah()
		];

		return view('Admin/content/nasabah', $data);
	}

	public function nasabahDetail($id)
	{
		$data = [
			'title' => 'Detail User',
			'css' => 'admin.css',
			'headling' => 'Detail nasabah',
			'note' => $this->NotivModel->getNotiv(),
			'mintaan' => $this->NotivModel->paginate(4),
			'user' => $this->AuthModel->Ubah($id),
		];

		return view('Admin/content/nasabahDetail', $data);
	}

	public function TarikSaldo()
	{
		$data = [
			'title' => 'permintaan tarik saldo',
			'css' => 'admin.css',
			'headling' => 'Permintaan Tarik saldo',
			'note' => $this->tarikModel->getAll(),
			'mintaan' => $this->NotivModel->paginate(4),
			'user' => $this->AuthModel->Ubah(),
		];

		return view('Admin/content/Tarik', $data);
	}

	public function konfirmasiSaldo($id)
	{
		$this->tarikModel->KonfirmasiTarikDana($id);
		return redirect()->to('/Admin/TarikSaldo');
	}


	public function ganti()
	{
		$data = [
			'title' => 'Ganti Slider',
			'css' => 'admin.css',
			'headling' => 'ganti Slider',
			'note' => $this->NotivModel->getNotiv(),
			'mintaan' => $this->NotivModel->paginate(4),
		];
		return view('Admin/content/Ganti', $data);
	}
}
