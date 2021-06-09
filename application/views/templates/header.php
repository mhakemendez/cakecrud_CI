<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Chick's Fondant</title>
        
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- bootstrap -->

        <!-- css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
        <!-- css -->

</head>

    <body>
        <!------------- navigation sidebar ------------->
            <div class="main-page">
                <div id="sidebar" class="mynav text-center text-uppercase">
                    <div class="brand-wrapper">
                        <a class="navbar-brand" href="#">Chick's</a>
                        <a class="navbar-brand" href="#">Fondant</a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item side-active">
                            <a class="nav-link" href="<?php echo base_url('/dashboard');?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/account');?>">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/product');?>">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/category');?>">Category</a>
                        </li>
                    </ul>
                </div>
            
                <div id="pages" class="pages-toggle">
                    <div class="main-header">
                        <button class="btn btn-primary btn-toggle" id="menu-toggle">Toggle Menu</button>
                    </div>
               