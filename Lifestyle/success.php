<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'include/common.php'?>
<html>
    <head>
        <title>Success|Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    </head>
    <body>
        <?php
        include 'include/header.php';
        $userid=$_SESSION['email']; 
        $itemid=$_GET['id'];
        $select="Select email,id from users where email='".$userid."';";
        $result= mysqli_query($con, $select)or die(mysqli_error($con));
        ?><br><br><br><?php

  while( $row= mysqli_fetch_array($result)){
        $user=$row['id'];
   }
   $querry="update user_item set status='Confirmed' where user_id=".$user.";";
   $result1= mysqli_query($con, $querry) or die(mysqli_error($con));
   
        ?>
        <div class="container">
            <h1>Transaction Successful</h1>
            <br>
            <br>
            Your order is confirmed.  Thank you for Shopping. <a href="product page.php">Click here</a> to purchase any product.
        </div>
        
        <div class="navbar navbar-inverse  navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
    </body>
</html>
