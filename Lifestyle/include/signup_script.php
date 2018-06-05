<?php

require("common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['Name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['Email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['Password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['Contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['City'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['Address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "Email Already Exists";
    header('location: ../signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "Not a valid Email Id";
    header('location: ../signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "Not a valid phone number";
    header('location: ../signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: ../product page.php');
  }
?>
