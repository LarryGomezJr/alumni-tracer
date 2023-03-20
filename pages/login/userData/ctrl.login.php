<?php
require '../../../includes/conn.php';
session_start();
if (isset($_POST['login'])) {
  // sign in
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  // role 
  $super_admin = mysqli_query($db, "SELECT * FROM tbl_super_ad WHERE username = '$username'");
  $numrow      = mysqli_num_rows($super_admin);

  $admin = mysqli_query($db, "SELECT * FROM tbl_admin WHERE username = '$username'");
  $numrow1     = mysqli_num_rows($admin);

  $registrar = mysqli_query($db, "SELECT * FROM tbl_registrar WHERE username = '$username'");
  $numrow2     = mysqli_num_rows($registrar);

  $alumni = mysqli_query($db, "SELECT * FROM tbl_alumni WHERE username = '$username'");
  $numrow4 = mysqli_num_rows($alumni);

  

  if ($numrow > 0) {
    while ($row = mysqli_fetch_array($super_admin)) {
      $hashedPwdCheck = password_verify($password, $row['password']);
      if ($hashedPwdCheck == false) {
        $_SESSION['sessionP'] = true;
        header("location: ../sign-in.php");
        exit();
      } elseif ($hashedPwdCheck == true) {
        $_SESSION['role'] = "Super Administrator";
        $_SESSION['userid'] = $row['admin_id'];
        $_SESSION['name'] = $row['name'];
      }
      header("location: ../../dashboard/dashboard.php");
    }
  } elseif ($numrow1 > 0) {
    while ($row = mysqli_fetch_array($admin)) {
      $hashedPwdCheck = password_verify($password, $row['password']);
      if ($hashedPwdCheck == false) {
        $_SESSION['sessionP'] = true;
        header("location: ../sign-in.php");
        exit();
      } elseif ($hashedPwdCheck == true) {
        $_SESSION['role'] = "Admin";
        $_SESSION['userid'] = $row['ad_id'];
        $_SESSION['name'] = $row['username'];
      }
      header("location: ../../dashboard/dashboard.php");
    }
  } elseif ($numrow2 > 0) {
    while ($row = mysqli_fetch_array($registrar)) {
      $hashedPwdCheck = password_verify($password, $row['password']);
      if ($hashedPwdCheck == false) {
        $_SESSION['sessionP'] = true;
        header("location: ../sign-in.php");
        exit();
      } elseif ($hashedPwdCheck == true) {
        $_SESSION['role'] = "Registrar";
        $_SESSION['userid'] = $row['reg_id'];
        $_SESSION['name'] = $row['username'];
      }
      header("location: ../../dashboard/dashboard.php");
    }
  } elseif ($numrow4 > 0) {
    while ($row = mysqli_fetch_array($alumni)) {
      $hashedPwdCheck = password_verify($password, $row['password']);
      if ($hashedPwdCheck == false) {
        $_SESSION['sessionP'] = true;
        header("location: ../sign-in.php");
        exit();
      } elseif ($hashedPwdCheck == true) {
        $_SESSION['role'] = "Alum Stud";
        $_SESSION['userid'] = $row['alumni_id'];
        $_SESSION['name'] = $row['name'];
      }
      header("location: ../../dashboard/dashboard.php");
    }
  }
  // elseif ($numrow2 > 0) {
  //   while ($row = mysqli_fetch_array($officer)) {
  //     $hashedPwdCheck = password_verify($password, $row['password']);
  //     if ($hashedPwdCheck == false) {
  //       $_SESSION['sessionP'] = true;
  //       header("location: ../sign-in.php");
  //       exit();
  //     } elseif ($hashedPwdCheck == true) {
  //       $_SESSION['role'] = "Alum Officer";
  //       $_SESSION['userid'] = $row['officer_id'];
  //       $_SESSION['name'] = $row['username'];
  //     }
  //     header("location: ../../dashboard/dashboard.php");
  //   }
  // } elseif ($numrow3 > 0) {
  //   while ($row = mysqli_fetch_array($president)) {
  //     $hashedPwdCheck = password_verify($password, $row['password']);
  //     if ($hashedPwdCheck == false) {
  //       $_SESSION['sessionP'] = true;
  //       header("location: ../sign-in.php");
  //       exit();
  //     } elseif ($hashedPwdCheck == true) {
  //       $_SESSION['role'] = "President";
  //       $_SESSION['userid'] = $row['pres_id'];
  //       $_SESSION['name'] = $row['username'];
  //     }
  //     header("location: ../../dashboard/dashboard.php");
  //   }
  // } 
  else {
    $_SESSION['sessionUP'] = true;
    header("location: ../sign-in.php");
    exit();
  }
}
