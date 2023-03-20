<?php
require '../../../includes/conn.php';
require '../../../includes/fetchData.php';
session_start();

if(isset($_POST['submit_del'])) {

  $del_batch = $db->real_escape_string($_POST['batch']);

  mysqli_query($db, "DELETE FROM tbl_batch WHERE batch_id = '$del_batch' ") or die(mysqli_error($db));
  $_SESSION['successDel'] = true;
  header("location: ../add-batch.php");
}

