<?php

class Model_testi extends CI_Model {

    function add() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'isi_testi' => $this->input->post('isi_testi')
        );
        $this->db->insert('testimoni', $data);
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
