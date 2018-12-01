<?php

class Model_paket extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('paket');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'harga_paket' => $this->input->post('harga_paket'),
                'foto' => $foto
            );
            $this->db->insert('paket', $data);
        } else {
            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'harga_paket' => $this->input->post('harga_paket'),
            );
            $this->db->insert('paket', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {

            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'harga_paket' => $this->input->post('harga_paket'),
                'foto' => $foto
            );
            $id = $this->input->post('id_paket');
            $hapus = $this->db->get_where('paket', array('id_paket' => $id))->row_array();
            unlink('uploads/paket/' . $hapus['foto']);
            $this->db->where('id_paket', $id);
            $this->db->update('paket', $data);
        } else {
            $data = array(
                'nama_paket' => $this->input->post('nama_paket'),
                'harga_paket' => $this->input->post('harga_paket'),
            );
            $id = $this->input->post('id_paket');
            $this->db->where('id_paket', $id);
            $this->db->update('paket', $data);
        }
    }

}
