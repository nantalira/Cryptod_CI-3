<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {
    //query builder
    public function getData($tabel) {
        $dapat = $this->db->get($tabel);
        return $dapat->result_array();
    }
    public function insData($tabel, $data) {
        $hasil = $this->db->insert($tabel, $data);
        return $hasil;
    }
    public function delData($tabel, $data) {
        $hasil = $this->db->delete($tabel, $data);
        return $hasil;
    }
    public function updData($tabel, $data, $dataWhere) {
        $hasil = $this->db->update($tabel, $data, $dataWhere);
        return $hasil;
    }
    public function getDataWhere($tabel, $dataWhere) {
        $dapat = $this->db->get_where($tabel, $dataWhere);
        return $dapat->result_array();
    }
}