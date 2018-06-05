<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'include\common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    </head>
    <body>
        <?php
        include 'include\header.php';
         if(isset($_SESSION['email']))
        {
           header('location:product page.php');
        }
        ?>
        <div class="container-fluid ">
        
            <div class="banner-image">
                <div class="content">
                 <div class="inner-content">   
                <div class="jumbotron">
                    <h1>
                        LifeStyle Store
                    </h1>
                    <br>
                    <p>
                        Get Upto to 60% OFF on Premium Brands
                    </p>
                    <br>
                    <br>
                    <a href="product page.php">
                    <div class="button">
                        Shop Now
                    </div>
                    </a>
                </div>
                 </div>
                </div>
            </div>
            
            
        </div>
        <div class="container">
        <div class="row">
            
            <div class="col-sm-4">
                <a href="product page.php#watches" class="thumbnail"><img src="watch.jpg" >
                    <center><h1>Watches</h1></center>
                    <hr>
                    <p>
                        GET Best Discount at premium Watches
                    </p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="product page.php#camera" class="thumbnail"><img src="camera.jpg" >
                    <center><h1>Camera</h1><hr></center>
                    <p>
                        GET Best Discount at premium Cameras
                    </p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="product page.php#shirts" class="thumbnail"><img src="shirt.jpg" >
                    <center><h1>Clothes</h1></center>
                    <hr>
                    <p>
                        GET Best Discount at premium Clothes
                    </p>
                </a>
            </div>
        </div>
        </div>
        <br><br>
        <br><br>
       
        
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
         
    </body>
</html>
