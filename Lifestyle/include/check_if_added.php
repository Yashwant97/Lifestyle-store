<?php
function checkifadded($itemid)
{
    $con= mysqli_connect('localhost','root',"","store") or die(mysqli_connect_error($con));
#session_start();
    $userid=$_SESSION['email'];
    $select="Select email,id from users where email='".$userid."';";
$result= mysqli_query($con, $select)or die(mysqli_error($con));


  while( $row= mysqli_fetch_array($result)){
        $user=$row['id'];
   }
    $querry="SELECT * FROM user_item WHERE item_id=".$itemid." and user_id=".$user." and status='Added to cart';";
    $result= mysqli_query($con, $querry)or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0)
    {        
        return 1;
    }
    else {
    return 0;    
    }
    
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

