<?php

Class Testi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_testi');
        chek_seesion();
    }

    function index() {
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->template->load('admin/template', 'admin/testimoni/list', $data);
        //$this->load->view('admin/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_testi->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah data');
            redirect('Admin/Testi');
        } else {
            $this->template->load('admin/template', 'admin/testimoni/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_testi->edit();
            $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/Testi');
        } else {
            $id = $this->uri->segment(4);
            $data['testimoni'] = $this->db->get_where('testimoni', array('id' => $id))->row_Array();
            $this->template->load('admin/template', 'admin/testimoni/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
        $this->session->set_flashdata('hapus', 'Sukses menghapus data');
        redirect('Admin/Testi');
    }

}

?>
