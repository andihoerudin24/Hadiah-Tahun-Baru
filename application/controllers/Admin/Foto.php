<?php

Class Foto extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
        chek_seesion();
    }

    function index() {
        $data['foto'] = $this->Model_foto->show();
        $this->template->load('admin/template', 'admin/foto/list', $data);
        //$this->load->view('admin/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_foto->add($foto);
            $this->session->set_flashdata('berhasil', 'Sukses menambah foto');
            redirect('Admin/Foto');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_foto->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses edit foto');
            redirect('Admin/Foto');
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('foto', array('id_foto' => $id))->row_array();
        unlink('uploads/foto/'.$data['foto']);
        $this->db->where('id_foto', $id);
        $this->db->delete('foto');
        $this->session->set_flashdata('hapus', 'Sukses hapus foto');
        redirect('Admin/Foto');
    }

    function show_by_id() {
        $id = $_GET['id_foto'];
        $sql_foto = "select * from foto where id_foto='$id'";
        $gallery = $this->db->query($sql_foto)->row_Array();
        $data = array(
            'id_foto' => $gallery['id_foto'],
            'nama_foto' => $gallery['nama_foto'],
            'foto' => $gallery['foto'],
        );
        echo json_encode($data);
    }

    function upload() {
        $config['upload_path'] = './uploads/foto';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
