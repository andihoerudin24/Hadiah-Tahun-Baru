<?php

Class Artikel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_artikel');
        $this->load->library('encryption');
        chek_seesion();
    }

    function index() {
        
        $data['token'] = token();
        $data['artikel'] = $this->db->get('artikel')->result();
        $this->template->load('admin/template', 'admin/artikel/list', $data);
        //$this->load->view('admin/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal foto tidak boleh kosong');
                redirect('Admin/Artikel');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_artikel->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses menambah artikel');
                    redirect('Admin/Artikel');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('admin/template', 'admin/artikel/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_artikel->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah artikel');
            redirect('Admin/Artikel');
        } else {
            $data['token'] = token();
            $id_artikel = $this->uri->segment(4);
            $data['artikel'] = $this->db->get_where('artikel', array('id_artikel' => $id_artikel))->row_Array();
            $this->template->load('admin/template', 'admin/artikel/edit', $data);
        }
    }

    function upload() {
        $config['upload_path'] = './uploads/artikel';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);   
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function hapus() {
            $id = $this->uri->segment(4);
            $data = $this->db->get_where('artikel', array('id_artikel' => $id))->row_array();
            unlink('uploads/artikel/' . $data['foto']);
            $this->db->where('id_artikel', $id);
            $this->db->delete('artikel');
            $this->session->set_flashdata('hapus', 'Sukses menghapus artikel');
            redirect('Admin/Artikel');
        }
    

}

?>
