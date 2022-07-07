<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('modelku');
    }

    public function index() {
		$aksesKlien = $this->input->get('key');
        $where = array(
            'api_key' => $aksesKlien
        );	
        $cek = count($this->modelku->getDataWhere('pengguna', $where));
		if($cek > 0){
			$dataMarket = $this->modelku->getData("market");
			$wallet = $this->modelku->getData("wallet");
			$data = array(
				"dataMarket" => $dataMarket,
				"wallet" => $wallet,
			);
			echo json_encode($data);
		} else {
			echo "Token tidak ditemukan";
		}
	}
}
?>