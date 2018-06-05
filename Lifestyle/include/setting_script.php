<?php
require 'common.php';
$userid=$_SESSION['email'];
$password= mysqli_real_escape_string($con,$_POST['password']);
$newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
$confirmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);
$password=md5($password);


$query="Select password from users where email='".$userid."';";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
    

if($password!=$row['password'])

    header("location:../setting.php?flag=1");
}
 if($newpassword!=$confirmpassword){
   
    header("location:../setting.php?flag=2");
   
}
else{
    $newpassword=MD5($newpassword);
     $query1="update users set password='".$newpassword."' where email='".$userid."';";
    $result= mysqli_query($con, $query1)or die(mysqli_error($con));
    header("location:../setting.php?flag=3");
}
?>
