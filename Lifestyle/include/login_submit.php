<?php
require 'common.php';
$id= mysqli_real_escape_string($con,$_POST['Login_id']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$select_query="Select id,email,password from users";
$result= mysqli_query($con, $select_query)or die(mysqli_error($con));


  while( $row= mysqli_fetch_array($result)){
   if($row['email']==$id&&$row['password']==$password)
   {       
        $_SESSION['email']=$row['email'];
        $userid=$row['id'];
       header("location:../product page.php");
      
       break;
   }
   else
   {
       echo "<script>alert('not success')</script>";
       header("location:../login.php?flag=1");
     }}
 
?>
<html>
    <body>
        
    </body>
</html>