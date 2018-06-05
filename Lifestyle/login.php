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
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    <body>
        <?php
        include 'include\header.php';
       ?>
        <div class="container ">
            <br>
        <div class="row row-style">
        <div class="col-sm-5 col-sm-offset-3">
        <div class="panel panel-default ">
            
            <center><p class="text-warning">Login to make Purchase</p></center>
            <form method="POST" action="include/login_submit.php">
                
                <input type="text" name="Login_id" class="form-group form-control" placeholder="Login ID"> 
                <input type="password" name="password" class="form-group form-control" placeholder="Password"> 
                <center><button class="btn btn-primary">OK</button></center>
                <br>
                <div class="warn"><?php
                           
                        $a = $_GET['flag'];
                        if($a==1)
                        {
                            echo'Authentication Error';
                        }
                        else
                        {
                            $ch=" ";
                        }
                    ?>
                    </div>
                <center> <p>Don't have a account?<a href="signup.php">Register Here</a></p></center>
                
                
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
