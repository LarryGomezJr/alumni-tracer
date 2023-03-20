<?php
session_start();
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {


    $batch   = mysqli_real_escape_string($db, $_POST['batch']);
    
    $insertBatch = mysqli_query($db, "INSERT INTO tbl_batch (batch) VALUES ('$batch')") or die(mysqli_error($db));
    $_SESSION['addBatch'] = true;
    header("location: ../add-batch.php");
  
} 
