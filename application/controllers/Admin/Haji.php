<?php

Class Haji extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_haji');
    }

    function index() {
        $data['paket'] = $this->db->get('haji')->result();
        $this->template->load('admin/template', 'admin/haji/list', $data);
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
                    $this->Model_haji->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses menambah paket');
                    redirect('Admin/Haji');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('admin/template', 'admin/haji/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_haji->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah paket');
            redirect('Admin/Haji');
        } else {
            $id_paket = $this->uri->segment(4);
            $data['paket'] = $this->db->get_where('haji', array('id_paket' => $id_paket))->row_Array();
            $this->template->load('admin/template', 'admin/haji/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        //$data = $this->db->get_where('haji', array('id_paket' => $id))->row_array();
        //unlink('uploads/haji/'.$data['foto']);
        $this->db->where('id_paket', $id);
        $this->db->delete('haji');
        $this->session->set_flashdata('hapus', 'Sukses menghapus paket');
        redirect('Admin/Haji');
    }

    function upload() {
        $config['upload_path'] = './uploads/haji';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
