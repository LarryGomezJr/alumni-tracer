<?php
session_start();
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $firstname    = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename    = mysqli_real_escape_string($db, $_POST['middlename']);
  $lastname    = mysqli_real_escape_string($db, $_POST['lastname']);
  $gender    = mysqli_real_escape_string($db, $_POST['gender']);
  $civil    = mysqli_real_escape_string($db, $_POST['civil']);
  $email    = mysqli_real_escape_string($db, $_POST['email']);
  $pres_address    = mysqli_real_escape_string($db, $_POST['pres_address']);
  $birth_place   = mysqli_real_escape_string($db, $_POST['birth_place']);
  $date_birth    = mysqli_real_escape_string($db, $_POST['date_birth']);
  $contact    = mysqli_real_escape_string($db, $_POST['contact']);
  $program    = mysqli_real_escape_string($db, $_POST['program']);
  $batch    = mysqli_real_escape_string($db, $_POST['batch']);
  $attainment = mysqli_real_escape_string($db, $_POST['attain']);
 $attain_field = mysqli_real_escape_string($db, $_POST['attain_field']);
 $attain_where = mysqli_real_escape_string($db, $_POST['attain_where']);
 $achieve_rewards1 = mysqli_real_escape_string($db, $_POST['achieve_rewards1']); 
  $achieve_rewards2 = mysqli_real_escape_string($db, $_POST['achieve_rewards2']);
  $achieve_rewards3 = mysqli_real_escape_string($db, $_POST['achieve_rewards3']);
  $status    = mysqli_real_escape_string($db, $_POST['status']);
  $current_org    = mysqli_real_escape_string($db, $_POST['current_org']);
  $location    = mysqli_real_escape_string($db, $_POST['location']);
  $type    = mysqli_real_escape_string($db, $_POST['type']);
  $current_title    = mysqli_real_escape_string($db, $_POST['current_title']);
  $company_add    = mysqli_real_escape_string($db, $_POST['company_add']);
  $length    = mysqli_real_escape_string($db, $_POST['length']);
  $align    = mysqli_real_escape_string($db, $_POST['align']);
  $satisfy    = mysqli_real_escape_string($db, $_POST['satisfy']);
  $collab   = mysqli_real_escape_string($db, $_POST['collab']);
  $topic   = mysqli_real_escape_string($db, $_POST['topic']);
  $buss_name    = mysqli_real_escape_string($db, $_POST['buss_name']);
  $nat_name    = mysqli_real_escape_string($db, $_POST['nat_name']);
  $role_name    = mysqli_real_escape_string($db, $_POST['role_name']);
  $profit   = mysqli_real_escape_string($db, $_POST['profit']);
  $buss_address    = mysqli_real_escape_string($db, $_POST['buss_address']);
  $buss_no    = mysqli_real_escape_string($db, $_POST['buss_no']);
  $consent   = mysqli_real_escape_string($db, $_POST['consent']);
  

  // $_SESSION['fields'] = array ($firstname, $middlename, $lastname);

  //validation
  $query="SELECT email FROM tbl_form WHERE email='$email'";
  $result=mysqli_query($db, $query);
  $present=mysqli_num_rows($result);
  $error=0;

  if($present > 0) {
    $eEmail = 'Email Already Existed';
    $error++;
  } 
  
  if ($error > 0) {
   $_SESSION['eMessage'] = [$eEmail]; 
   header("location: ../fill_up_form.php"); 

  } 
  else {
  $sql = "INSERT INTO tbl_form (alumni_id, firstname, middlename, lastname, batch_id, email, address, date_birth, birth_place, current_org, company_add, current_title, contact, gender_id, civil_id, program_id, loc_id, type_id, emp_status_id, length_id, attain_id, attain_field, attain_where, achieve_rewards1, achieve_rewards2, achieve_rewards3 , align_id, sat_id, collab_id, consent_id, topic, buss_name, nat_name, role_name, profit, buss_addr, buss_no) VALUES ('$userid', '$firstname', '$middlename', '$lastname', '$batch', '$email', '$pres_address', '$date_birth', '$birth_place', '$current_org', '$company_add', '$current_title', '$contact', '$gender', '$civil', '$program','$location', '$type', '$status', '$length' , '$attainment', '$attain_field', '$attain_where', '$achieve_rewards1', '$achieve_rewards2', '$achieve_rewards3', '$align', '$satisfy', '$collab', '$consent', '$topic', '$buss_name', '$nat_name', '$role_name', '$profit', '$buss_address', '$buss_no')";

  if (mysqli_query($db, $sql)) {
    $_SESSION['success_fill'] = 'Form Successfully Filled Up';
    header("location: ../my_form.php");
  } else {
    echo "Error: " . $sql . " " . mysqli_error($db);
  }
  mysqli_close($db);
}
}
