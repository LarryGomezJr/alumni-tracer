<?php
session_start();
require '../../../includes/conn.php';


if (isset($_POST['submit'])) {

  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $firstname    = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename    = mysqli_real_escape_string($db, $_POST['middlename']);
  $lastname    = mysqli_real_escape_string($db, $_POST['lastname']);
  if (!empty($_POST['gender'])) {
    $gender= mysqli_real_escape_string($db, $_POST['gender']);
  } else {
    $gender="";
  };
  
  if (!empty($_POST['civil'])) {
  $civil    = mysqli_real_escape_string($db, $_POST['civil']);}
  else {
    $civil="";
  };
  $email    = mysqli_real_escape_string($db, $_POST['email']);
  $pres_address    = mysqli_real_escape_string($db, $_POST['pres_address']);
  $birth_place   = mysqli_real_escape_string($db, $_POST['birth_place']);
  $date_birth    = mysqli_real_escape_string($db, $_POST['date_birth']);
  $contact    = mysqli_real_escape_string($db, $_POST['contact']);
  $program    = mysqli_real_escape_string($db, $_POST['program']);
  $batch    = mysqli_real_escape_string($db, $_POST['batch']);
  if (!empty($_POST['attain'])) {
  $attainment = mysqli_real_escape_string($db, $_POST['attain']); }
    else {
  $attainment="";
  };

 $attain_field = mysqli_real_escape_string($db, $_POST['attain_field']);
 $attain_where = mysqli_real_escape_string($db, $_POST['attain_where']);
 $achieve_rewards1 = mysqli_real_escape_string($db, $_POST['achieve_rewards1']); 
  $achieve_rewards2 = mysqli_real_escape_string($db, $_POST['achieve_rewards2']);
  $achieve_rewards3 = mysqli_real_escape_string($db, $_POST['achieve_rewards3']);
  $status    = mysqli_real_escape_string($db, $_POST['status']);
  $current_org    = mysqli_real_escape_string($db, $_POST['current_org']);
  if (!empty($_POST['location'])) {
  $location    = mysqli_real_escape_string($db, $_POST['location']);}
  else {
    $location="";
  };
  if (!empty($_POST['type'])) {
  $type    = mysqli_real_escape_string($db, $_POST['type']);}
  else {
    $type="";
  };
  $current_title    = mysqli_real_escape_string($db, $_POST['current_title']);
  $company_add    = mysqli_real_escape_string($db, $_POST['company_add']);
  if (!empty($_POST['length'])) {
  $length    = mysqli_real_escape_string($db, $_POST['length']);}
  else {
    $length="";
  };
  if (!empty($_POST['align'])) {
  $align    = mysqli_real_escape_string($db, $_POST['align']);}
  else {
    $align="";
  };
  if (!empty($_POST['satisfy'])) {
  $satisfy    = mysqli_real_escape_string($db, $_POST['satisfy']);}
  else {
    $satisfy="";
  };
  if (!empty($_POST['collab'])) {
  $collab   = mysqli_real_escape_string($db, $_POST['collab']);}
  else {
    $collab="";
  };
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
  $query="SELECT email, alumni_id FROM tbl_form WHERE email='$email'";
  $result=mysqli_query($db, $query);
  $present=mysqli_num_rows($result);
  $row_email = mysqli_fetch_array($result);
  $error=0;

  
  if($present > 0) {
    if ($_SESSION['userid'] != $row_email['alumni_id']) {
    $eEmail = 'Email Already Existed';
    $error++;
    }
  }   
  if ($error > 0) {
   $_SESSION['eMessage'] = [$eEmail]; 
   header("location: ../my_form.php"); 
  } 
  else {
  $sql= "UPDATE tbl_form SET 
  firstname='$firstname', middlename='$middlename', lastname='$lastname', gender_id='$gender', civil_id='$civil', email='$email', address='$pres_address',birth_place='$birth_place', date_birth='$date_birth', contact='$contact', program_id='$program', batch_id='$batch', attain_id='$attainment',attain_field='$attain_field', attain_where='$attain_where', achieve_rewards1='$achieve_rewards1', achieve_rewards2='$achieve_rewards2',achieve_rewards3='$achieve_rewards3', emp_status_id='$status', current_org='$current_org', loc_id='$location', type_id='$type', current_title='$current_title', 
  company_add='$company_add', length_id='$length', align_id='$align', sat_id='$satisfy', collab_id='$collab', topic='$topic', buss_name='$buss_name',nat_name='$nat_name', role_name='$role_name', profit='$profit', buss_addr='$buss_address', buss_no='$buss_no', consent_id='$consent' WHERE alumni_id='$userid'";

  if (mysqli_query($db, $sql)) {
    $_SESSION['success_updateform'] = true;
    header("location: ../my_form.php");
  } else {
    $_SESSION['notsuccess_updateform'] = true;
    header("location: ../my_form.php");
  }
  mysqli_close($db);
}
}
