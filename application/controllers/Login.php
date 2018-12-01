<?php

Class Login extends CI_Controller {

    function index() {
        if (isset($_POST['submit'])) {
            $email = $this->input->post('email');
            $passwod = md5($this->input->post('password'));
            $daftar_umroh = $this->db->get_where('daftar_umroh', array('email' => $email, 'password' => $passwod))->row_array();
            $daftar_haji = $this->db->get_where('daftar_haji', array('email' => $email, 'password' => $passwod))->row_array();
            if ($daftar_umroh > 0) {
                $this->session->set_userdata($daftar_umroh);
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Admin/Dashboard');
            } elseif ($daftar_haji > 0) {
                $this->session->set_userdata($daftar_haji);
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Admin/Dashboard');
            } else {
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        chek_seesion_login();
        redirect('Admin/Auth');
    }

}

?>