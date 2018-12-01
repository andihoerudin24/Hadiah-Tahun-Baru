<?php

Class Pesan extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
    }

    function index() {
        $data['pesan'] = $this->db->get('pesan')->result();
        $this->template->load('admin/template', 'admin/pesan/list', $data);
        //$this->load->view('admin/template');
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('pesan');
        $this->session->set_flashdata('hapus', 'Sukses menghapus data');
        redirect('Admin/Pesan');
    }

}

?>
