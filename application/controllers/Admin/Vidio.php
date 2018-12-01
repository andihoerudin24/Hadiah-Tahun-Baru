<?php

Class Vidio extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_vidio');
        chek_seesion();
    }

    function index() {
        
        $data['vidio'] = $this->db->get('vidio')->result();
        $this->template->load('admin/template', 'admin/vidio/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_vidio->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah vidio');
            redirect('Admin/Vidio');
        } else {
            $data['token'] = token();
            $this->template->load('admin/template', 'admin/vidio/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_vidio->edit();
            $this->session->set_flashdata('edit', 'Sukses merubah vidio');
            redirect('Admin/Vidio');
        } else {
            $data['token'] = token();
            $id_vidio = $this->uri->segment(4);
            $data['vidio'] = $this->db->get_where('vidio', array('id_vidio' => $id_vidio))->row_array();
            $this->template->load('admin/template', 'admin/vidio/edit', $data);
        }
    }

    function hapus() {
        $id_vidio = $this->uri->segment(4);
        $this->db->where('id_vidio', $id_vidio);
        $this->db->delete('vidio');
        $this->session->set_flashdata('hapus', 'Berhasil Menghapus');
        redirect('Admin/Vidio');
    }

}

?>
