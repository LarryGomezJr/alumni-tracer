<?php
require '../../../includes/conn.php';
session_start();


if (isset($_POST['newpass']) && $_SERVER['REQUEST_METHOD'] == "POST") {
$email = $_SESSION['accept'];

    $newPassword = $db->real_escape_string($_POST['new']);
    $conPassword = $db->real_escape_string($_POST['renew']);

    if ($newPassword == $conPassword) {

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
       $hashedPass = password_hash($conPassword, PASSWORD_DEFAULT); 
      $update = $db->query("UPDATE tbl_super_ad SET password = '$hashedPass' WHERE admin_id = '$_SESSION[successActive]'");
      if ($db->affected_rows > 0) {
        $_SESSION['role'] = "Super Administrator";
        $_SESSION['userid'] = $row['admin_id'];
        $_SESSION['name'] = $row['username'];
        header("location: ../../dashboard/dashboard.php");
      } else { 
        echo 'admin';
      }
    } elseif ($numrow1 > 0) {
      $row = $admin->fetch_array();
      $hashedPass = password_hash($conPassword, PASSWORD_DEFAULT); 
      $update = $db->query("UPDATE tbl_admin SET password = '$hashedPass' WHERE  ad_id = '$_SESSION[successActive]'");
      if ($db->affected_rows > 0) {
        $_SESSION['role'] = "Admin";
        $_SESSION['userid'] = $row['ad_id'];
        $_SESSION['name'] = $row['username'];
        header("location: ../../dashboard/dashboard.php");
      } else { 
        echo 'reg';
      }
    } elseif ($numrow2 > 0) {
      $row = $registrar->fetch_array();
      $hashedPass = password_hash($conPassword, PASSWORD_DEFAULT); 
      $update = $db->query("UPDATE tbl_registrar SET password = '$hashedPass' WHERE  reg_id = '$_SESSION[successActive]'");
      if ($db->affected_rows > 0) {
        $_SESSION['role'] = "Registrar";
        $_SESSION['userid'] = $row['reg_id'];
        $_SESSION['name'] = $row['username'];
        header("location: ../../dashboard/dashboard.php");
      } else { 
        echo 'reg';
      }
    } elseif ($numrow3 > 0) {
      $row = $alumni->fetch_array();
      $hashedPass = password_hash($conPassword, PASSWORD_DEFAULT); 
      $update = $db->query("UPDATE tbl_alumni SET password = '$hashedPass' WHERE alumni_id = '$_SESSION[successActive]'");
      if ($db->affected_rows > 0) {
        $_SESSION['role'] = "Alum Stud";
        $_SESSION['userid'] = $row['alumni_id'];
        $_SESSION['name'] = $row['username'];
        header("location: ../../dashboard/dashboard.php");
      } else { 
        echo 'alumni';
      }
    } 
} else {
    // validation 
    $_SESSION['notMatch'] = "The Confirm Password field does not match.";
    header("location: ../newPassword.php");
}
    
}