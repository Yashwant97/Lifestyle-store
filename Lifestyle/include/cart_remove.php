<?php
    require 'common.php';
    $userid=$_SESSION['email'];
$itemid=$_GET['id'];
$select="Select email,id from users where email='".$userid."';";
$result= mysqli_query($con, $select)or die(mysqli_error($con));


  while( $row= mysqli_fetch_array($result)){
        $user=$row['id'];
   }
   
$query="Delete from user_item where item_id=".$itemid." and user_id=".$user.";";
$result1= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:../cart.php");
?>
