<?php

    class Category extends CI_Controller{
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('category');
            $this->load->view('templates/footer');
        }
    }