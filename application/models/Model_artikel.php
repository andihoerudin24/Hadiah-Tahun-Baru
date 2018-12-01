<?php

class Model_artikel extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('artikel');
        $query = $this->db->get();
         return $query;
    }
    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi_artikel' => $this->input->post('isi_artikel'),
            'foto' => $foto,
        );
        $this->db->insert('artikel', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi_artikel' => $this->input->post('isi_artikel'),
                'foto' => $foto,
            );
            $id = $this->input->post('id_artikel');
            $hapus = $this->db->get_where('artikel', array('id_artikel' => $id))->row_array();
            unlink('uploads/artikel/' . $hapus['foto']);
            $this->db->where('id_artikel', $id);
            $this->db->update('artikel', $data);
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi_artikel' => $this->input->post('isi_artikel'),
            );
            $id = $this->input->post('id_artikel');
            $this->db->where('id_artikel', $id);
            $this->db->update('artikel', $data);
        }
    }

}
