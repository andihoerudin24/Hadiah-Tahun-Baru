<?php

Class Pesan_umroh extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_haji');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('daftar_umroh');
        $this->db->join('paket', 'paket.id_paket=daftar_umroh.id_paket_umroh');
        $data['paket'] = $this->db->get()->result();
        $this->template->load('admin/template', 'admin/pesan_umroh/list', $data);
        //$this->load->view('admin/template');
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'status' => $this->input->post('status'),
                'informasi' => $this->input->post('informasi'),
            ];
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('daftar_umroh', $data);
            $this->session->set_flashdata('berhasil', 'Sukses merubah status Pemesanan dan menambah informasi');
            redirect('Admin/Pesan_umroh');
        } else {
            $id_paket = $this->uri->segment(4);
            $data['paket'] = $this->db->get_where('daftar_umroh', array('id' => $id_paket))->row_Array();
            $this->template->load('admin/template', 'admin/pesan_umroh/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        //$data = $this->db->get_where('haji', array('id_paket' => $id))->row_array();
        //unlink('uploads/haji/'.$data['foto']);
        $this->db->where('id', $id);
        $this->db->delete('daftar_umroh');
        $this->session->set_flashdata('hapus', 'Sukses menghapus');
        redirect('Admin/Pesan_umroh');
    }

    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('daftar_umroh', array('id' => $id))->row_array();
        force_download('uploads/pesan_umroh/'.$data['pembayaran'], NULL);
        redirect('Admin/Pesan_umroh');
    }

}

?>
