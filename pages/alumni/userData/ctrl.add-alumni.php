<?php
session_start();
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

  $stud_no    = mysqli_real_escape_string($db, $_POST['stud_no']);
  $firstname    = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename    = mysqli_real_escape_string($db, $_POST['middlename']);
  $lastname    = mysqli_real_escape_string($db, $_POST['lastname']);
  $username    = mysqli_real_escape_string($db, $_POST['username']);
  $password    = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_pass = mysqli_real_escape_string($db, $_POST['confirm_pass']);


  if ($password == $confirm_pass) {
    $hashedPwd = password_hash($confirm_pass, PASSWORD_DEFAULT);
    $insertStudent = mysqli_query($db, "INSERT INTO tbl_alumni (stud_no, firstname, middlename, lastname, username, password) VALUES ('$stud_no','$firstname','$middlename' , '$lastname', '$username', '$hashedPwd')") or die(mysqli_error($db));

    $_SESSION['studAdded'] = 'Alumni Successfully Added';
    header("location: ../../alumni/add_alumni.php");
  } else {
    $_SESSION['notMatch'] = 'Password does not match';
    header("location: ../../alumni/add_alumni.php");
  }
}
