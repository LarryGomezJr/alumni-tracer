<?php
require '../../../includes/conn.php';
session_start();

$registrar_id = $_SESSION['userid'];

if (isset($_POST['saveImg'])) {

  if (!empty($_FILES['image']['tmp_name'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $updateImg = mysqli_query($db, "UPDATE tbl_registrar SET img = '$image' WHERE reg_id = '$registrar_id'") or die(mysqli_error($db));
    $_SESSION['successImgReg'] = true;
    header("location: ../edit-registrar.php");
  } else {
    $_SESSION['emptyImgReg'] = true;
    header("location: ../edit-registrar.php");
  }
}

if (isset($_POST['basic_info'])) {

    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $getAllUsername = mysqli_query($db, "SELECT username FROM tbl_super_ad WHERE username = '$username' UNION ALL SELECT username FROM tbl_admin WHERE username = '$username' UNION ALL SELECT username FROM tbl_registrar WHERE username = '$username' UNION ALL SELECT username FROM tbl_alumni WHERE username = '$username'") or die(mysqli_error($db));
    $check = mysqli_num_rows($getAllUsername);

    if ($check == 0) {
        $q = $db->query("SELECT * FROM tbl_registrar WHERE username = '$username'") or die($db->error);
        $check2 = mysqli_num_rows($q);
        while ($row = mysqli_fetch_array($q)) {
            $getID = $row['reg_id'];
        }
        if ($getID == $registrar_id || $check2 < 1) {

            $updateInfo = mysqli_query($db, "UPDATE tbl_registrar SET  username='$username', firstname='$firstname', lastname='$lastname' WHERE reg_id = '$registrar_id'") or die(mysqli_error($db));
            $_SESSION['successUpdateReg'] = true;
            header("location: ../edit-registrar.php");
        } else {
            $_SESSION['usernameExistReg'] = true;
            header("location: ../edit-registrar.php");
        }
    } 
}

if (isset($_POST['change_pass'])) {

            $password = mysqli_real_escape_string($db, $_POST['new_pass']);
            $confirmPass = mysqli_real_escape_string($db, $_POST['confirm_pass']);

            if (!empty($password == $confirmPass)) {
                $hashedPwd = password_hash($confirmPass, PASSWORD_DEFAULT);

                $updatePass = mysqli_query($db, " UPDATE tbl_registrar SET password='$hashedPwd' WHERE reg_id = '$registrar_id'") or die(mysqli_error($db));
                $_SESSION['successPassReg'] = true;
                header("location: ../edit-registrar.php");
            } else {
                $_SESSION['newNotMatchReg'] = true;
                header("location: ../edit-registrar.php");
            }
        }