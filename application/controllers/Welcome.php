<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_foto');
    }

    public function index() {
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $data['foto'] = $this->Model_foto->show();
        $data['artikel'] = $this->db->query('select * from artikel order by id_artikel desc limit 2')->result();
        $this->load->view('welcome', $data);
    }

    function detail() {
         $data['testimoni'] = $this->db->get('testimoni')->result();
       
        $id_artikel = $this->uri->segment(3);
        $data['post'] = $this->db->query('select * from artikel order by id_artikel desc limit 4')->result();
        $data['artikel'] = $this->db->get_where('artikel', array('id_artikel' => $id_artikel))->row_Array();
        $this->load->view('detail', $data);
    }

}
