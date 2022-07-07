<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionAuth extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('modelku');
    }

	public function index() {
		// $this->load->view('welcome_message');
		$dataMarket = $this->modelku->getData("market");
		$data = array(
			"dataMarket" => $dataMarket,
		);

		$this->load->view('HomePage', $data);
	}

	public function daftarPengguna() {
        $apiKey = $this->getTokenApi(10);
        
		$dataInp = array (
			"nama_pengguna" => $this->input->post('usernameDaftar'),
			"email_pengguna" => $this->input->post('emailDaftar'),
			"nohp_pengguna" => $this->input->post('nohpDaftar'),
			"password" => $this->input->post('passwordDaftar'),
            "api_key" => $apiKey
		);
		$this->modelku->insData('pengguna', $dataInp);
		redirect(base_url(), 'refresh');
	}

    public function masukPengguna() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'nama_pengguna' => $username,
            'password' => $password
        );
        $cek = $this->modelku->getDataWhere('pengguna', $where);
        if ($cek) {
            $data = array(
                'nama_pengguna' => $username,
                'status' => 'login',
                'key' => $cek[0]['api_key']
            );
            $this->session->set_userdata($data);
            redirect(base_url('welcome'), 'refresh');
        } else {
            redirect(base_url());
        }
    }

    public function keluarPengguna() {
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }

    function getTokenApi($n) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
