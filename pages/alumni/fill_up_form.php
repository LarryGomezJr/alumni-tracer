<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<?php

include '../../includes/session.php';
include '../../includes/conn.php';
include '../../includes/fetchData.php';

// $message='';
// if(isset($_SESSION['email_alert'])) {
//   $message='Email already exists';
// }
// End Session
$verify = $db->query("SELECT alumni_id FROM tbl_form WHERE alumni_id = $alumni_id");
$num = $verify->num_rows;

if ($num > 0) {
    header("location: my_form.php");
}

// if (!empty($_SESSION['fields']) ) {
//   foreach ($_SESSION['fields'] AS  $key => $field) {
//     ${"field" . $key} = $field;
//   }
// }



?>

<title>
  Fill up Form
</title>

  <?php include '../../includes/head.php';?>

<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include '../../includes/sidebar.php';?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include '../../includes/navbar.php';?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="form-container">
          <div id="alert-top">
            
          </div>
          
          <div class="card">
            <div class="form">
              <div class="right-side">
                <form method="POST" action="userData/ctrl.add-form.php">
                  <!-- First Step Form -->
                  <div class="main active">
                    <img class="resize" src="../../assets/img/sfac.png">
                    <div class="text">
                      <h2>Fill up Personal Information</h2>
                      <h6>(Step 1 out of step 3) Enter your personal information to proceed.</h6>
                    </div>
                    <div class="input-text">
                      <input type="text" value="<?php echo $alumni_id ?>" hidden name="userid">
                      <div class="input-div">
                        <input type="text" required require id="user_name" name="firstname">
                        <span>Firstname</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="middlename" >
                        <span>Middlename</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="lastname" >
                        <span>Lastname</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select  name="gender" require>
                          <option value="" selected disabled>gender</option>
                          <?php
foreach ($gender as $sex) {
    ?>
                            <option value="<?php echo $sex['gender_id'] ?>">
                              <?php echo $sex['gender'] ?>
                            </option>

                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <select name="civil" required>
                          <option value="" selected disabled >civil status</option>
                          <?php
foreach ($civil as $Civil) {
    ?>
                            <option value="<?php echo $Civil['civil_id'] ?>">
                              <?php echo $Civil['civil'] ?>
                            </option>

                          <?php
}
?>
                        </select>
                      </div>
                      <div id="emaill" class="input-div">
                        <input type="text" required require name="email">
                        <span>E-mail Address</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" required require name="pres_address" value="<?php echo (!empty($field0) ? $field0 : ""); ?>">
                        <span>Present Address</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" required require name="date_birth">
                        <span>Date of Birth (mm/dd/yyyy)</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="birth_place">
                        <span>Birth Place</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="contact">
                        <span>Contact No</span>
                      </div>
                    </div>
                    <div class="buttons">
                      <button class="next_button">Next Step</button>
                    </div>
                  </div>
                  <!-- End of First Step Form -->
                  <!-- Second Step Form -->
                  <div class="main">
                    <img class="resize" src="../../assets/img/sfac.png">
                    <div class="text">
                      <h2>Fill up Educational Background</h2>
                      <h6>(Step 2 out of step 3) Enter your Educational Background to proceed.</h6>
                    </div>
                    <div class="input-text">

                      <div class="input-div">
                        <select name="program" required >
                          <option value="" selected disabled>Bachelor's Degree in SFAC</option>
                          <?php
foreach ($program as $Program) {
    ?>
                            <option value="<?php echo $Program['program_id'] ?>"><?php echo $Program['program']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <select  name="batch">
                          <option value="" selected disabled>Year Graduated</option>
                          <?php
foreach ($batch as $Batch) {
    ?>
                            <option value="<?php echo $Batch['batch_id'] ?>">
                              <?php echo $Batch['batch'] ?>
                            </option>

                          <?php
}
?>
                        </select>

                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="attain">
                          <option value="" selected disabled>Latest Attainment</option>
                          <?php
foreach ($attainment as $Attainment) {
    ?>
                            <option value="<?php echo $Attainment['attain_id'] ?>"><?php echo $Attainment['attainment']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="What specific field?"  name="attain_field">

                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Name of School"  name="attain_where">
                      </div>
                    </div>
                    <div class="text">
                      <h4>Achievements & Rewards</h4>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards1">
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards2">
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards3">
                      </div>
                    </div>


                    <div class="buttons button_space">
                      <button class="back_button">Back</button>
                      <button class="next_button">Next Step</button>
                    </div>
                  </div>
                  <!-- End of Second Step Form -->
                  <!-- Last Step Form -->
                  <div class="main">
                    <img class="resize" src="../../assets/img/sfac.png">
                    <div class="text">
                      <h2>Fill up Employment Profile</h2>
                      <h6>Incase of unemployed, just fill up the employment status then proceed to submit. Thankyou</h6>

                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="status" required>
                          <option value="" selected disabled>Employment Status</option>
                          <?php
foreach ($employment as $Employment) {
    ?>
                            <option value="<?php echo $Employment['emp_status_id'] ?>"><?php echo $Employment['status']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Current Organization" id="user_name" name="current_org">
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="location">
                          <option value="" selected disabled>Primary work location</option>
                          <?php
foreach ($location as $Location) {
    ?>
                            <option value="<?php echo $Location['loc_id'] ?>"><?php echo $Location['location']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <select name="type">
                          <option value="" selected disabled>Type of Organization</option>
                          <?php
foreach ($organization as $Organization) {
    ?>
                            <option value="<?php echo $Organization['type_id'] ?>"><?php echo $Organization['type']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Current Job Title / Designation" name="current_title">
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Company Address" name="company_add">
                      </div>
                      <div class="input-div">
                        <select name="length">
                          <option value="" selected disabled>Length of Employment</option>
                          <?php
foreach ($length as $Length) {
    ?>
                            <option value="<?php echo $Length['length_id'] ?>"><?php echo $Length['length']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="align">
                          <option value="" selected disabled>Is your job related to your course in SFAC?</option>
                          <?php
foreach ($align as $Align) {
    ?>
                            <option value="<?php echo $Align['align_id'] ?>"><?php echo $Align['align']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                      <div class="input-div">
                        <select name="satisfy">
                          <option value="" selected disabled>How satisfied are you with your current job?</option>
                          <?php
foreach ($satisfy as $Satisfy) {
    ?>
                            <option value="<?php echo $Satisfy['sat_id'] ?>"><?php echo $Satisfy['satisfy']; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>

                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="collab">
                          <option value="" selected disabled>Which of the following would you like to collaborate with us?</option>
                          <?php
                            foreach ($collaborate as $Collaborate) {?>
                            <option value="<?php echo $Collaborate['collab_id'] ?>"><?php echo $Collaborate['collaborate']; ?> </option>
                          <?php
                              }?>
                        </select>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="topic/area/activity"  name="topic">
                      </div>
                    </div>
                    <h6>In case of self-employment, please answer the following:</h6>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Name of Business" name="buss_name" >
                        <span>Name of Business</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Nature of Business" id="user_name" name="nat_name" autofocus>
                        <span>Nature of Business</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Role in the Business" name="role_name" >
                        <span>Role in the Business</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Approximate Monthly Profit" id="user_name" name="profit" autofocus>
                        <span>Approximate Monthly Profit</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Business Address" name="buss_address" >
                        <span>Business Address</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Business Phone Numbers" id="user_name" name="buss_no" autofocus>
                        <span>Business Phone Numbers</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <select name="consent" required>
                          <option value="" selected disabled>I generously give my consent to Alumni Office to use my information for SFAC purposes only.</option>
                          <?php
                                foreach ($consent as $Consent) {
                                                                    ?>
                            <option value="<?php echo $Consent['consent_id'] ?>"><?php echo $Consent['consent']; ?> </option>
                          <?php
                                                    }
                                                        ?>
                        </select>
                      </div>


                    </div>
                    <div class="buttons button_space">
                      <button class="back_button">Back</button>
                      <button  name="submit">Submit</button>
                    </div>
                  </div>
                  <!-- End of Last Step Form -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "../../includes/footer.php"?>
    </div>
  </main>
  <?php include "../../includes/fixed-plugin.php"?>
  <?php include "../../includes/script.php"?>
  <script>
    <?php 
      if (!empty($_SESSION['eMessage'])) {

       
    ?>
            $("#alert-top").html(
                    '<div class="alert alert-danger text-white" role="alert"><strong><?php echo $_SESSION['eMessage'][0] ?></strong></div>'
                ).fadeIn("fast", function() {
                    setTimeout(function() {
                        $("#alert-top").fadeOut(function() {
                            $("#alert-top").children().remove();
                        });
                    }, 5000);
                });

            

    <?php 

    unset($_SESSION['eMessage']);
  } 
  
  ?>
  </script>

  
</body>

</html>