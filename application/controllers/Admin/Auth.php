<?php

Class Auth extends CI_Controller {

    function index() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $passwod = md5($this->input->post('password'));
            $data = $this->db->get_where('tbl_login', array('username' => $username, 'password' => $passwod))->row_array();
            if ($data > 0) {
                $this->session->set_userdata($data);
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Admin/Dashboard');
            } else {
                chek_seesion_login();
                $this->load->view('admin/login');
            }
        } else {
            $this->load->view('admin/login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        //chek_seesion_login();
        redirect('Welcome');
    }

}

?>