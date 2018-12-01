<?php

Class Status extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
        chek_seesion();
    }

    function index() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('daftar_umroh', 'daftar_umroh.id_paket_umroh=paket.id_paket');
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
                'status' => 0
            ];
            $id = $this->session->userdata('id');
            $this->db->where('id', $id);
            $this->db->update('daftar_umroh', $data);
            $this->session->set_flashdata('berhasil', 'Sukses upload bukti pembayaran, pembayran akan di proses oleh admin dan akan ada informasi lebih lanjut di menu informasi');
            redirect('Admin/Status');
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
        $config['upload_path'] = './uploads/pesan_umroh';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
