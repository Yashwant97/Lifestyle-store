<?php
require 'common.php';
$userid=$_SESSION['email'];
$itemid=$_GET['id'];
$select="Select email,id from users where email='".$userid."';";
$result= mysqli_query($con, $select)or die(mysqli_error($con));


  while( $row= mysqli_fetch_array($result)){
        $user=$row['id'];
   }
$query="INSERT INTO user_item(user_id,item_id,status) Values('".$user."','".$itemid."','Added to cart');";
$result1= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:../product page.php");
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

