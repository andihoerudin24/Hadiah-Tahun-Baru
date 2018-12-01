<?php

Class Kontak extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pesan');
    }

    function index() {
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('kontak',$data);
    }

    function add() {
        $this->Model_pesan->add();
        $this->session->set_flashdata('berhasil', 'Sukses mengirim pesan');
        redirect('Kontak');
    }

}

?>