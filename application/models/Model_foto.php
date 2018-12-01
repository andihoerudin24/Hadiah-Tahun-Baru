<?php

class Model_foto extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('artikel');
        $query = $this->db->get();
        return $query;
    }
    
    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('foto');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }
    
    function show() {
        $hasil = $this->db->get('foto');
        return $hasil->result();
    }

    function add($foto) {
        $data = array(
            'foto' => $foto,
            'nama_foto' => $this->input->post('nama_foto')
        );
        $this->db->insert('foto', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'foto' => $foto,
                'nama_foto' => $this->input->post('nama_foto')
            );
            $id = $this->input->post('id_foto');
            $hapus = $this->db->get_where('foto', array('id_foto' => $id))->row_array();
            unlink('uploads/foto/' . $hapus['foto']);
            $this->db->where('id_foto', $id);
            $this->db->update('foto', $data);
            
            
        } else {
            $data = array(
                'nama_foto' => $this->input->post('nama_foto')
            );
            $id = $this->input->post('id_foto');
            $this->db->where('id_foto', $id);
            $this->db->update('foto', $data);
        }
    }

}
