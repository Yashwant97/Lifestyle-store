<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 require 'include/common.php';?>
<html>
    <head>
        <title>Cart list|Lifestyle store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    </head>
    <body>
        <?php
        if(!isset($_SESSION['email']))
        {
            header("location:../index.php");  
        }
        
        $userid=$_SESSION['email'];
        $select="Select email,id from users where email='".$userid."';";
        $result1= mysqli_query($con, $select)or die(mysqli_error($con));


          while( $row= mysqli_fetch_array($result1)){
            $user=$row['id'];
            }
           $query="Select items.id, name,price from user_item, items where item_id=items.id and user_id=".$user." and status='Added to Cart';";
           $result= mysqli_query($con, $query) or die(mysqli_error($con));
           require 'include/header.php';
           $sum=0;
        ?>
        <br>
        <br>
        
        <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    
                   
        <table class="table table-striped table-hover">
            <center> <?php
            if(mysqli_num_rows($result)==0)
            {
                echo 'Add some items to Cart';
            }
            
            ?></center>
            <thead>
            <td>Item Number</td>
            <td>Item Name</td>
            <td colspan="2">Price</td>
           
            </thead>
            <?php
                    while ($row = mysqli_fetch_array($result)) {?>
            <tr>
                <td><?php
                echo $row['id'];?></td>
                <td><?php
                echo $row['name'];?></td>
                <td><?php   $price=$row['price'];
                echo 'Rs.'.$price.'/-';
                $sum=$sum+$price;?></td>
                    <td><a href='include/cart_remove.php?id=<?php echo$row['id'];?>' class='remove_item_link'>Remove</a>

            </tr>   
                    <?php }?>
            <tr>
                <td colspan="2">Total</td>
                <td><?php echo 'Rs.'.$sum.'/-';?></td>
            <td><a href='success.php?id=<?php echo $sum ?>' class='btn btn-block btn-primary'>Confirm Order</a></td>
            </tr>
        </table>
                </div> 
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        
         <div class="navbar navbar-inverse  navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
    </body>
</html>
