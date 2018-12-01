<?php
Class Tentang_kami extends CI_Controller{
    
    function index(){
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('tentang',$data);
    }
}




?>