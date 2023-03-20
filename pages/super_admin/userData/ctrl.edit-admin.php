<?php
require '../../../includes/conn.php';
session_start();

$admin_id = $_SESSION['userid'];

if (isset($_POST['saveImg'])) {

  if (!empty($_FILES['image']['tmp_name'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $updateImg = mysqli_query($db, "UPDATE tbl_super_ad SET img = '$image' WHERE admin_id = '$admin_id'") or die(mysqli_error($db));
    $_SESSION['successImgSup'] = true;
    header("location: ../edit-admin.php");
  } else {
    $_SESSION['emptyImgSup'] = true;
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
  $updateInfo = mysqli_query($db, "UPDATE tbl_super_ad SET username='$username' WHERE admin_id = '$admin_id'") or die(mysqli_error($db));
            $_SESSION['successUpdateSA'] = 'Username Successfully Updated!';
            header("location: ../edit-admin.php");
    } else {
        $_SESSION['usernameExistSA'] = 'Username already existed!';
        header("location: ../edit-admin.php");
    }

    $getAllemail = mysqli_query($db, "SELECT email FROM tbl_super_ad WHERE email = '$email' UNION SELECT email FROM tbl_admin WHERE email = '$email' UNION SELECT email FROM tbl_registrar WHERE email = '$email' UNION SELECT email FROM tbl_form WHERE email = '$email'") or die(mysqli_error($db));
    $checkemail = mysqli_num_rows($getAllemail);

    $getEmail = mysqli_query($db, "SELECT admin_id AS userID FROM tbl_super_ad WHERE email = '$email' UNION SELECT ad_id AS userID FROM tbl_admin WHERE email = '$email' UNION SELECT reg_id AS userID FROM tbl_registrar WHERE email = '$email' UNION SELECT form_id AS userID FROM tbl_form WHERE email = '$email'") or die(mysqli_error($db));
    $rCheckemail = $getEmail->fetch_array();

    if ($checkemail == 0 || $_SESSION['userid'] == $rCheckemail['userID']) {
  $updateInfo = mysqli_query($db, "UPDATE tbl_super_ad SET email='$email' WHERE email = '$email'") or die(mysqli_error($db));
            $_SESSION['emailsuccessUpdateSA'] = 'Email Successfully Updated!';
            header("location: ../edit-admin.php");
    } else {
        $_SESSION['emailExistSA'] = 'Email already existed!';
        header("location: ../edit-admin.php");
    }
}

if (isset($_POST['changepass'])) {

            $password = mysqli_real_escape_string($db, $_POST['new_pass']);
            $confirmPass = mysqli_real_escape_string($db, $_POST['confirm_pass']);

            if ($password == $confirmPass) {
                $hashedPwd = password_hash($confirmPass, PASSWORD_DEFAULT);

                $updatePass = mysqli_query($db, " UPDATE tbl_super_ad SET password='$hashedPwd' WHERE admin_id = '$admin_id'") or die(mysqli_error($db));
                $_SESSION['successPassSup'] = true;
                header("location: ../edit-admin.php");
            } else {
                $_SESSION['newNotMatchSup'] = true;
                header("location: ../edit-admin.php");
            }
        }
