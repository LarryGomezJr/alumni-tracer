<?php
require '../../../includes/conn.php';
session_start();

$alumni_id = $_SESSION['userid'];

// $user="SELECT username FROM tbl_super_ad WHERE username = '$username' UNION ALL SELECT username FROM tbl_admin WHERE username = '$username' UNION ALL SELECT username FROM tbl_registrar WHERE username = '$username' UNION ALL SELECT username FROM tbl_alumni WHERE username = '$username'";
//   $result=mysqli_query($db, $user);
//   $present=mysqli_num_rows($result);
//   $error=0;

//   if($present > 0) {
//     $uUsername = 'Username Already Existed';
//     $error++;
//   } 
//   if ($error > 0) {
//    $_SESSION['uUsername'] = [$uUsername]; 
//    header("location: ../edit-alumni.php"); 

//   } 

if (isset($_POST['saveImg'])) {

  if (!empty($_FILES['image']['tmp_name'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $updateImg = mysqli_query($db, "UPDATE tbl_alumni SET img = '$image' WHERE alumni_id = '$alumni_id'") or die(mysqli_error($db));
    $_SESSION['successImg'] = true;
    header("location: ../edit-alumni.php");
  } else {
    $_SESSION['emptyImg'] = true;
    header("location: ../edit-alumni.php");
  }
}

if (isset($_POST['basic_info'])) {

    if (!empty($_POST['firstname'])){
       $firstname = mysqli_real_escape_string($db, $_POST['firstname']);  
    }
   if (!empty($_POST['lastname'])) {
     $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
   }
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $getAllUsername = mysqli_query($db, "SELECT username FROM tbl_super_ad WHERE username = '$username' UNION SELECT username FROM tbl_admin WHERE username = '$username' UNION SELECT username FROM tbl_registrar WHERE username = '$username' UNION SELECT username FROM tbl_alumni WHERE username = '$username'") or die(mysqli_error($db));
    $check = mysqli_num_rows($getAllUsername);

    $getUser = mysqli_query($db, "SELECT admin_id AS userID FROM tbl_super_ad WHERE username = '$username' UNION SELECT ad_id AS userID FROM tbl_admin WHERE username = '$username' UNION SELECT reg_id AS userID FROM tbl_registrar WHERE username = '$username' UNION SELECT alumni_id AS userID FROM tbl_alumni WHERE username = '$username'") or die(mysqli_error($db));
    $rCheck = $getUser->fetch_array();

    if ($check == 0 || $_SESSION['userid'] == $rCheck['userID']) {
  $updateInfo = mysqli_query($db, "UPDATE tbl_alumni SET username='$username' WHERE alumni_id = '$alumni_id'") or die(mysqli_error($db));
            $_SESSION['successUpdate'] = 'Username Successfully Updated!';
            header("location: ../edit-alumni.php");
    } else {
        $_SESSION['usernameExist'] = 'Username already existed!';
        header("location: ../edit-alumni.php");
    }
}

if (isset($_POST['changepass'])) {

            $password = mysqli_real_escape_string($db, $_POST['new_pass']);
            $confirmPass = mysqli_real_escape_string($db, $_POST['confirm_pass']);

            if ($password == $confirmPass) {
                $hashedPwd = password_hash($confirmPass, PASSWORD_DEFAULT);

                $updatePass = mysqli_query($db, " UPDATE tbl_alumni SET password='$hashedPwd' WHERE alumni_id = '$alumni_id'") or die(mysqli_error($db));
                $_SESSION['successPass'] = true;
                header("location: ../edit-alumni.php");
            } else {
                $_SESSION['newNotMatch'] = true;
                header("location: ../edit-alumni.php");
            }
        }
