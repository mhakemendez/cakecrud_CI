<?php

    class Product_model extends CI_Model{
        public function getProduct(){
            $this->db->select('*');
            $this->db->from('cake_product');
            $this->db->join('category_cake', 'cake_product.category = category_cake.id');
            return $this->db->get()->result();
        }

        public function getCategory(){
            return $this->db->get('category_cake')->result();
        }

        public function addProduct()
        {
            $arr['cake_name'] = $this->input->post('product_name');
            $arr['price'] = $this->input->post('price');
            $arr['description'] = $this->input->post('description');
            $arr['category'] = $this->input->post('Category');

            $this->db->insert('cake_product',$arr);
        }
        
        public function getProductId($productId)
        {
            $this->db->select('*');
            $this->db->from('cake_product');
            $this->db->where('product_id', $productId);
            $this->db->join('category_cake', 'cake_product.category = category_cake.id');
            
            return $this->db->get()->result();
        }

        public function updateProduct($productId)
        {
            $arr['cake_name'] = $this->input->post('product_name');
            $arr['price'] = $this->input->post('price');
            $arr['description'] = $this->input->post('description');
            $arr['category'] = $this->input->post('Category');
            
            $this->db->where('product_id', $productId);
            $this->db->update('cake_product',$arr);
        }

        function delete($productId)
        {
            $this->db->where('product_id', $productId);
            $this->db->delete('cake_product');

        }

    }

?> 