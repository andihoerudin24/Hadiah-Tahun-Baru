<?php

Class Informasi_haji extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
        chek_seesion();
    }

    function index() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('daftar_haji');
        $this->db->join('haji', 'haji.id_paket=daftar_haji.id_paket_haji');
        $this->db->where('id', $id);
        $data['paket_umroh'] = $this->db->get()->result();
        $this->template->load('admin/template', 'admin/informasi', $data);
        //$this->load->view('admin/template');
    }

  
}

?>
