<?php

Class Paket extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_paket');
    }

    function index() {
        $data['paket'] = $this->db->get('paket')->result();
        $this->template->load('admin/template', 'admin/paket/list', $data);
        //$this->load->view('admin/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah paket foto tidak boleh kosong');
                redirect('Admin/Paket');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_paket->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses menambah paket');
                    redirect('Admin/Paket');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('admin/template', 'admin/paket/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_paket->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah paket');
            redirect('Admin/Paket');
        } else {
            $id_paket = $this->uri->segment(4);
            $data['paket'] = $this->db->get_where('paket', array('id_paket' => $id_paket))->row_Array();
            $this->template->load('admin/template', 'admin/paket/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('paket', array('id_paket' => $id))->row_array();
        unlink('uploads/paket/'.$data['foto']);
        $this->db->where('id_paket', $id);
        $this->db->delete('paket');
        $this->session->set_flashdata('hapus', 'Sukses menghapus paket');
        redirect('Admin/Paket');
    }

    function upload() {
        $config['upload_path'] = './uploads/paket';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
