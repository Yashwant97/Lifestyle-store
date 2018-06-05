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
        <title>Setting|LifeStyle Store</title>
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
        <br><br>
        <div class="container">
            <div class="row row-style">
                <div class="col-sm-5 col-sm-offset-3">
                    <div class="panel panel-default ">
                        <center><h1 class="from-group">Settings</h1></center>
                        <form action="include/setting_script.php" method="POST">
                            <input type="password" name="password" class="form-group form-control" placeholder="Old Password"> 
                            <input type="password" name="newpassword" class="form-group form-control" placeholder="New Password"> 
                            <input type="password" name="confirmpassword" class="form-group form-control" placeholder="Re-type New Password"> 
                            <center><button class="btn btn-primary">Change</button></center>
                            <br>
                            <div class="warn"><?php
                           
                        $a = $_GET['flag'];
                        if($a==1)
                        {
                            echo'Password not matched';
                        }
                        else if($a==2)
                        {
                            echo 'New password and confrim password does not match ';
                        }
                        else if($a==3)
                        {
                            echo 'Password Successfully changed';
                        }
                         else {;}
                    ?>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="navbar navbar-inverse  navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
    </body>
</html>
