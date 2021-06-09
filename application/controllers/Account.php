<?php

    class Account extends CI_Controller{
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('account');
            $this->load->view('templates/footer');
        }
    }