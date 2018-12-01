<?php

class Model_pesan extends CI_Model {

    function add() {
        $data = array(
        'nama' => $this->input->post('nama'),
        'no_telpon' => $this->input->post('no_telpon'),
        'email' => $this->input->post('email'),
        'isi_testi' => $this->input->post('isi_testi')
        );
        $this->db->insert('pesan', $data);
    }

    function edit() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'isi_testi' => $this->input->post('isi_testi')
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('testimoni', $data);
    }

}
