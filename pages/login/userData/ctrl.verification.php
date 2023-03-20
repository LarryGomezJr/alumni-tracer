<?php
require '../../../includes/conn.php';
session_start();
if (isset($_POST['submit'])) { 
  $email = $_SESSION['accept']; 
  $code = $_POST["first"].$_POST["second"].$_POST["third"].$_POST["fourth"].$_POST["fifth"].$_POST["sixth"];

  $super_admin = $db->query("SELECT * FROM tbl_super_ad WHERE email = '$email'");
  $numrow  = $super_admin->num_rows;
  
  $admin = $db->query("SELECT * FROM tbl_admin WHERE email = '$email'");
  $numrow1  = $admin->num_rows;

  $registrar = $db->query("SELECT * FROM tbl_registrar WHERE email = '$email'");
  $numrow2  = $registrar->num_rows;

  $alumni = $db->query("SELECT * FROM tbl_form LEFT JOIN tbl_alumni USING(alumni_id) WHERE email = '$email'");
  $numrow3  = $alumni->num_rows;


  if ($numrow > 0) {
      $row = $super_admin->fetch_array();
      if ($code == $row['activation_code']) {
        $_SESSION['successActive'] = $row['admin_id'];
        header("location: ../newPassword.php");
      } else {
        $_SESSION['failed'] = 'Invalid code. Try Again.'; 
        header("location: ../verification.php");
      }
  } elseif ($numrow1 > 0) {
    $row = $admin->fetch_array();
    if ($code == $row['activation_code']) {
      $_SESSION['successActive'] = $row['ad_id'];
      header("location: ../newPassword.php");
    } else {
      $_SESSION['failed'] = 'Invalid code. Try Again.'; 
      header("location: ../verification.php");
    }
  } elseif ($numrow2 > 0) {
    $row = $registrar->fetch_array();
    if ($code == $row['activation_code']) {
      $_SESSION['successActive'] = $row['reg_id'];
      header("location: ../newPassword.php");
    } else {
      $_SESSION['failed'] = 'Invalid code. Try Again.'; 
      header("location: ../verification.php");
    }
  } elseif ($numrow3 > 0) {
    $row = $alumni->fetch_array();
    if ($code == $row['activation_code']) {
      $_SESSION['successActive'] = $row['alumni_id'];
      header("location: ../newPassword.php");
    } else {
      $_SESSION['failed'] = 'Invalid code. Try Again.'; 
      header("location: ../verification.php");
    }
  }

} 