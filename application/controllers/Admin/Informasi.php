<?php

Class Informasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
        chek_seesion();
    }

    function index() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('daftar_umroh', 'daftar_umroh.id_paket_umroh=paket.id_paket');
        $this->db->where('id', $id);
        $data['paket_umroh'] = $this->db->get()->result();
        $this->template->load('admin/template', 'admin/informasi', $data);
        //$this->load->view('admin/template');
    }

}

?>
