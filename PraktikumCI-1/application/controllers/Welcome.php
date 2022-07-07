<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('modelku');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("sessionauth"), "refresh");
		}
	}

	public function index() {
		$dataMarket = $this->modelku->getData("market");
		$wallet = $this->modelku->getData("wallet");
		$walletku = $this->modelku->getData("wallet");
		$pengguna = $this->session->userdata('nama_pengguna');
		$token = $this->session->userdata('key');
		$data = array(
			"dataMarket" => $dataMarket,
			"wallet" => $wallet,
			"walletku" => $walletku,
			"pengguna" => $pengguna,
			"token" => $token,
		);
		$this->load->view('Wallet', $data);
	}

	public function tambah() {
		$dataInp = array (
			"nama_crypto" => $this->input->post('namaCrypto'),
			"jumlah_crypto" => $this->input->post('jumlahCrypto'),
			"nilai_rupiah" => $this->input->post('nilaiRupiah')
		);
		$this->modelku->insData('wallet', $dataInp);
		redirect(base_url()."welcome/#beli", 'refresh');
	}
	
	public function hapus($id) {
		$dataWhr = array(
			'id' => $id
		);
		$this->modelku->delData('wallet', $dataWhr);
		redirect(base_url()."welcome/#beli", 'refresh');
	}
	
	// controller update wallet
	public function update() {
		$dataInp = array (
			"jumlah_crypto" => $this->input->post('jumlahCrypto'),
			"nilai_rupiah" => $this->input->post('nilaiRupiah')
		);
		$dataWhr = array(
			'nama_crypto' => $this->input->post('namaCryptoUpdate')
		);
		$this->modelku->updData('wallet', $dataInp, $dataWhr);
		redirect(base_url()."welcome/#jual", 'refresh');
	}
	

}
