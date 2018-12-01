<?php

Class Pesan_haji extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_haji');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('daftar_haji');
        $this->db->join('haji', 'haji.id_paket=daftar_haji.id_paket_haji');
        $data['paket'] = $this->db->get()->result();
        $this->template->load('admin/template', 'admin/pesan_haji/list', $data);
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
            $this->db->update('daftar_haji', $data);
            $this->session->set_flashdata('berhasil', 'Sukses merubah status Pemesanan dan menambah informasi');
            redirect('Admin/Pesan_haji');
        } else {
            $id_paket = $this->uri->segment(4);
            $data['paket'] = $this->db->get_where('daftar_haji', array('id' => $id_paket))->row_Array();
            $this->template->load('admin/template', 'admin/pesan_haji/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        //$data = $this->db->get_where('haji', array('id_paket' => $id))->row_array();
        //unlink('uploads/haji/'.$data['foto']);
        $this->db->where('id', $id);
        $this->db->delete('daftar_haji');
        $this->session->set_flashdata('hapus', 'Sukses menghapus');
        redirect('Admin/Pesan_haji');
    }

    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('daftar_haji', array('id' => $id))->row_array();
        force_download('uploads/pesan_haji/' . $data['pembayaran'], NULL);
        redirect('Admin/Pesan_haji');
    }

}

?>
