<?php

class Index extends CI_Controller{

    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    function index(){
        $this->load->view('template/header');
        // sidebar sudah ada di dalam template/header.php
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}
?>
