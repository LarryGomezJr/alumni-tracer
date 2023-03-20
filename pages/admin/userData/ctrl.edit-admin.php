<?php
require '../../../includes/conn.php';
session_start();

$ad_id = $_SESSION['userid'];

if (isset($_POST['saveImg'])) {

  if (!empty($_FILES['image']['tmp_name'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $updateImg = mysqli_query($db, "UPDATE tbl_admin SET img = '$image' WHERE ad_id = '$ad_id'") or die(mysqli_error($db));
    $_SESSION['successImgAdmin'] = true;
    header("location: ../edit-admin.php");
  } else {
    $_SESSION['emptyImgAdmin'] = true;
    header("location: ../edit-admin.php");
  }
}

if (isset($_POST['basic_info'])) {

    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $getAllUsername = mysqli_query($db, "SELECT username FROM tbl_super_ad WHERE username = '$username' UNION SELECT username FROM tbl_admin WHERE username = '$username' UNION SELECT username FROM tbl_registrar WHERE username = '$username' UNION SELECT username FROM tbl_alumni WHERE username = '$username'") or die(mysqli_error($db));
    $check = mysqli_num_rows($getAllUsername);

    $getUser = mysqli_query($db, "SELECT admin_id AS userID FROM tbl_super_ad WHERE username = '$username' UNION SELECT ad_id AS userID FROM tbl_admin WHERE username = '$username' UNION SELECT reg_id AS userID FROM tbl_registrar WHERE username = '$username' UNION SELECT alumni_id AS userID FROM tbl_alumni WHERE username = '$username'") or die(mysqli_error($db));
    $rCheck = $getUser->fetch_array();

    if ($check == 0 || $_SESSION['userid'] == $rCheck['userID']) {
  $updateInfo = mysqli_query($db, "UPDATE tbl_admin SET username='$username' WHERE ad_id = '$ad_id'") or die(mysqli_error($db));
            $_SESSION['successUpdateAdmin'] = true;
            header("location: ../edit-admin.php");
    } else {
        $_SESSION['usernameExistAdmin'] = true;
        header("location: ../edit-admin.php");
    }
}

if (isset($_POST['changepass'])) {

            $password = mysqli_real_escape_string($db, $_POST['new_pass']);
            $confirmPass = mysqli_real_escape_string($db, $_POST['confirm_pass']);

            if (!empty($password == $confirmPass)) {
                $hashedPwd = password_hash($confirmPass, PASSWORD_DEFAULT);

                $updatePass = mysqli_query($db, " UPDATE tbl_admin SET password='$hashedPwd' WHERE ad_id = '$ad_id'") or die(mysqli_error($db));
                $_SESSION['successPassAdmin'] = true;
                header("location: ../edit-admin.php");
            } else {
                $_SESSION['newNotMatchAdmin'] = true;
                header("location: ../edit-admin.php");
            }
        }
