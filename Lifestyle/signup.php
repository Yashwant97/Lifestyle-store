<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'include/common.php';
if(isset($_SESSION['email']))
{
    header("location:product page.php");
}
?>
<html>
    <head>
        <title>Sign Up</title>
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
        ?>
        <br>
        <br>
        <div class="container">
            <div class="row row-style">
                <div class="col-sm-5 col-sm-offset-3">
                    <div class="panel panel-default ">
                        <center><h1 class="from-group">SIGN UP</h1></center>
                        <form method="POST" action="include/signup_script.php">
                            <input type="text" name="Name" class="form-group form-control" placeholder="Name"  >
                            <input type="email" name="Email" class="form-group form-control" placeholder="Email" >
                            
                            <input type="password" name="Password" class="form-group form-control" placeholder="Password" >
                            <input type="text" name="Contact" class="form-group form-control" placeholder="Contact" > 
                            <input type="text" name="City" class="form-group form-control" placeholder="City"> 
                            <input type="text" name="Address" class="form-group form-control" placeholder="Address"> 
                            <center><button class="btn btn-primary">Submit</button></center>
             
                            <br>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
        
    </body>
</html>
