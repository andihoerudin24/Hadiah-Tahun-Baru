<?php

Class Artikel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_artikel');
        $this->load->library('pagination');
    }

    function index() {
        $config['base_url'] = site_url('Artikel/index');
        $config['total_rows'] = $this->Model_artikel->br()->num_rows();
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
        $data['post'] = $this->db->query('select * from artikel order by id_artikel desc limit 4')->result();
        $data['artikel'] = $this->Model_artikel->join_br($config["per_page"], $data['page'])->result();
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('artikel', $data);
    }

    function detail() {
        $id_artikel = $this->uri->segment(3);
        $data['post'] = $this->db->query('select * from artikel order by id_artikel desc limit 4')->result();
        $data['artikel'] = $this->db->get_where('artikel', array('id_artikel' => $id_artikel))->row_Array();
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('detail', $data);
    }

}

?>