<?php
require '../../../includes/conn.php';
session_start();

$alumni_id = $_GET['alumni_id'];

mysqli_query($db, "DELETE FROM tbl_alumni  WHERE alumni_id = '$alumni_id' ") or die(mysqli_error($db));
$_SESSION['successDel'] = true;
header("location: ../alumni-list.php");