<?php

Class Status_haji extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
        chek_seesion();
    }

    function index() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('haji');
        $this->db->join('daftar_haji', 'daftar_haji.id_paket_haji=haji.id_paket');
        $this->db->where('id', $id);
        $data['paket_umroh'] = $this->db->get()->result();
        $this->template->load('admin/template', 'admin/status_umroh/list', $data);
        //$this->load->view('admin/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $pembayaran = $this->upload();
            $data = [
                'pembayaran' => $pembayaran,
            ];
            $id = $this->session->userdata('id');
            $this->db->where('id', $id);
            $this->db->update('daftar_haji', $data);
            $this->session->set_flashdata('berhasil', 'Sukses upload bukti pembayaran, pembayran akan di proses oleh admin dan akan ada informasi lebih lanjut di menu informasi');
            redirect('Admin/Status_haji');
        } else {
            $this->template->load('admin/template', 'admin/status_umroh/add');
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('daftar_haji');
        redirect('Welcome');
    }

    function upload() {
        $config['upload_path'] = './uploads/pesan_haji';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
