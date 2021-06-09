<?php

    class Product extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Product_model');
        }
        
        
        public function index()
        {
            
            $data['product'] = $this->Product_model->getProduct();
            $data['cate'] = $this->Product_model->getCategory();
            


            $this->load->view('templates/header');
            $this->load->view('product',$data);
            $this->load->view('templates/footer');
        }

        public function add()
        {
            $this->Product_model->addProduct();
            redirect('product');
        }

        public function edit($productId)
        {
             
            $data['cake'] = $this->Product_model->getProductId($productId);
            $data['cate'] = $this->Product_model->getCategory();

            $this->load->view('templates/header');
            $this->load->view('edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($productId)
        {
             
            $data = $this->Product_model->updateProduct($productId);
            redirect('product');
        }

        public function delete($productId)
        {
            $this->Product_model->delete($productId);
            redirect('product');
        }
       
    }

?>