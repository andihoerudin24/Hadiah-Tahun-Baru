<?php

class Model_vidio extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('vidio');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('vidio');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add() {
        $data = array(
            'link' => $this->input->post('link'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->insert('vidio', $data);
    }

    function edit() {
        $data = array(
            'link' => $this->input->post('link'),
            'keterangan' => $this->input->post('keterangan')
        );
        $id_vidio = $this->input->post('id_vidio');
        $this->db->where('id_vidio', $id_vidio);
        $this->db->update('vidio', $data);
    }

}
