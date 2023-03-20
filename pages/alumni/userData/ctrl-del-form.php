<?php
require '../../../includes/conn.php';
session_start();

$form_id = $_GET['formID'];

mysqli_query($db, "DELETE FROM tbl_form WHERE form_id = '$form_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: ../alumni-form.php");