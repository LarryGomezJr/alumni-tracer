<?php
require '../../../includes/conn.php';
session_start();

$get_id = $_GET['ad_id'];

mysqli_query($db, "DELETE FROM tbl_admin WHERE ad_id = '$get_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: ../admin-list.php");