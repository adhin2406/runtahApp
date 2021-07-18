<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (!$this->validate([
			'username' => [
				'rules' => 'required|min_length[6]|max_length[26]|is_unique[users.username]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 6 Karakter',
					'max_length' => '{field} Maksimal 26 Karakter',
					'is_unique' => 'Username sudah digunakan sebelumnya'
				]
			],
			'password' => [
				'rules' => 'required|min_length[8]|max_length[50]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 8 Karakter',
					'max_length' => '{field} Maksimal 50 Karakter',
				]
			],
			'password_conf' => [
				'rules' => 'matches[password]',
				'errors' => [
					'matches' => 'Konfirmasi Password tidak sesuai dengan password',
				]
			],
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => '{field} Harus diisi',
					'valid_email' => 'Format Email Harus Valid'
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
				'rules' => 'required|numeric',
				'errors' => [
					'required' => '{field} Harus diisi',
					'numeric' => 'Masukan Nomer hp kamu ya'
				]
			]
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/Auth/Join')->withInput()->with('validation', $validation);
		}
		return view('welcome_message');
	}
}
