<?php
require '../../../includes/conn.php';
session_start();

$get_id = $_GET['reg_id'];

mysqli_query($db, "DELETE FROM tbl_registrar WHERE reg_id = '$get_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: ../registrar-list.php");