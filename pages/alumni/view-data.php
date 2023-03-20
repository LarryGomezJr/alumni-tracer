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

$form_id = $_GET['formID'];

$query = $db->query("SELECT * FROM tbl_form 
LEFT JOIN tbl_gender ON tbl_gender.gender_id = tbl_form.gender_id 
LEFT JOIN tbl_civil_status ON tbl_civil_status.civil_id = tbl_form.civil_id
LEFT JOIN tbl_program ON tbl_program.program_id = tbl_form.program_id
LEFT JOIN tbl_batch ON tbl_batch.batch_id = tbl_form.batch_id
LEFT JOIN tbl_attainment ON tbl_attainment.attain_id = tbl_form.attain_id
LEFT JOIN tbl_employment_status ON tbl_employment_status.emp_status_id = tbl_form.emp_status_id
LEFT JOIN tbl_primary_work_loc ON tbl_primary_work_loc.loc_id = tbl_form.loc_id
LEFT JOIN tbl_type_org ON tbl_type_org.type_id = tbl_form.type_id
LEFT JOIN tbl_length_employment ON tbl_length_employment.length_id = tbl_form.length_id
LEFT JOIN tbl_align ON tbl_align.align_id = tbl_form.align_id
LEFT JOIN tbl_satisfy ON tbl_satisfy.sat_id = tbl_form.sat_id
LEFT JOIN tbl_collaborate ON tbl_collaborate.collab_id = tbl_form.collab_id
WHERE form_id = '$form_id'");

$row_alum = mysqli_fetch_array($query);

?>

<title>
  Edit Form
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
          <div id='success_form'></div>
          <div id='success_fill'></div>        
          <div id="alert-top"></div>
          <div class="card">
            <div class="form">
              <div class="right-side">
                <form method="POST" action="userData/ctrl.edit-form.php">
                  <!-- First Step Form -->

                  <div class="main active">
                    <img class="resize" src="../../assets/img/sfac.png">
                    <div class="text">
                      <h2>Personal Information</h2>                     
                    </div>                 
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" required require id="user_name" name="firstname" value="<?php echo $row_alum['firstname']; ?>" >
                        <span>Firstname</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="middlename" value="<?php echo $row_alum['middlename']; ?>" >
                        <span>Middlename</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="lastname" value="<?php echo $row_alum['lastname']; ?>" >
                        <span>Lastname</span>
                      </div>
                    </div>
                    <div class="input-text">   
                      <div id="emaill" class="input-div">
                        <input type="text" required require name="email" value="<?php echo $row_alum['gender']; ?>">
                        <span>Gender</span>
                      </div>      
                      <div id="emaill" class="input-div">
                        <input type="text" required require name="email" value="<?php echo $row_alum['civil']; ?>">
                        <span>Civil Status</span>
                      </div>           
                      <div id="emaill" class="input-div">
                        <input type="text" required require name="email" value="<?php echo $row_alum['email']; ?>">
                        <span>E-mail Address</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" required require name="pres_address" value="<?php echo $row_alum['address']; ?>">
                        <span>Present Address</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" required require name="date_birth" value="<?php echo $row_alum['date_birth']; ?>" >
                        <span>Date of Birth (mm/dd/yyyy)</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="birth_place" value="<?php echo $row_alum['birth_place']; ?>">
                        <span>Birth Place</span>
                      </div>
                      <div class="input-div">
                        <input type="text" required require name="contact" value="<?php echo $row_alum['contact']; ?>">
                        <span>Contact No</span>
                      </div>
                    </div>
                    <div class="text">
                      <h2>Educational Background</h2>
                      <h6>(Step 2 out of step 3) Enter your Educational Background to proceed.</h6>
                    </div>
                  <div class="input-text">
                      
                      <div class="input-div">
                        <input type="text" placeholder="Bachelor's Degree in SFAC"  name="attain_field" value="<?php echo $row_alum['program']; ?>">
                        <span>Bachelor's Degree in SFAC</span>

                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Year Graduated"  name="attain_where" value="<?php echo $row_alum['batch']; ?>">
                        <span>Year Graduated</span>
                      </div>
                    </div>

                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Latest Attainment"  name="attain_field" value="<?php echo $row_alum['attainment']; ?>">
                        <span>Latest Attainment</span>

                      </div>                  
                      <div class="input-div">
                        <input type="text" placeholder="What specific field?"  name="attain_field" value="<?php echo $row_alum['attain_field']; ?>">
                        <span>What specific field?</span>

                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Name of School"  name="attain_where" value="<?php echo $row_alum['attain_where']; ?>">
                        <span>Name of School</span>
                      </div>
                    </div>
                    <div class="text">
                      <h4>Achievements & Rewards</h4>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards1" value="<?php echo $row_alum['achieve_rewards1']; ?>">
                        
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards2" value="<?php echo $row_alum['achieve_rewards2']; ?>">
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Please type in here ..." name="achieve_rewards3" value="<?php echo $row_alum['achieve_rewards3']; ?>">
                      </div>
                    </div>
                    <div class="text">
                      <h2>Employment Profile</h2>
                      <h6>Incase of unemployed, just fill up the employment status then proceed to submit. Thankyou</h6>

                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Employment Status" id="user_name" name="current_org" value="<?php echo $row_alum['status']; ?>">
                        <span>Employment Status</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Current Organization" id="user_name" name="current_org" value="<?php echo $row_alum['current_org']; ?>" >
                        <span>Current Organization</span>
                      </div>
                    </div>
                    <div class="input-text">
                      
                      <div class="input-div">
                        <input type="text" placeholder="Primary Work Location" id="user_name" name="current_org" value="<?php echo $row_alum['location']; ?>">
                        <span>Primary Work Location</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Type of Organization" id="user_name" name="current_org" value="<?php echo $row_alum['type']; ?>">
                        <span>Type of Organization</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Current Job Title / Designation" name="current_title" value="<?php echo $row_alum['current_title']; ?>">
                        <span>Current Job Title / Designation</span>
                      </div>
                      
                    </div>
                    <div class="input-text">
                      
                      <div class="input-div">
                        <input type="text" placeholder="Company Address" id="user_name" name="current_org" value="<?php echo $row_alum['company_add']; ?>">
                        <span>Company Address</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Length of Employment" id="user_name" name="current_org" value="<?php echo $row_alum['length']; ?>" >
                        <span>Length of Employment</span>
                      </div>
                      
                      
                    </div>
                    <div class="input-text">
                      
                      <div class="input-div">
                        <input type="text" placeholder="Is your job related to your course in SFAC?" id="user_name" name="current_org" value="<?php echo $row_alum['align']; ?>">
                        <span>Is your job related to your course in SFAC?</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="How satisfied are you with your current job?" id="user_name" name="current_org" value="<?php echo $row_alum['satisfy']; ?>">
                        <span>How satisfied are you with your current job?</span>
                      </div>
                      
                      
                    </div>
                    
                    
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Which of the following would you like to collaborate with us?"  name="topic" value="<?php echo $row_alum['collaborate']; ?>" >
                        <span>Which of the following would you like to collaborate with us?</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="topic/area/activity"  name="topic" value="<?php echo $row_alum['topic']; ?>">
                        <span>topic/area/activity</span>
                      </div>
                    </div>
                    <h6>In case of self-employment, please answer the following:</h6>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Name of Business" name="buss_name" value="<?php echo $row_alum['buss_name']; ?>">
                        <span>Name of Business</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Nature of Business" id="user_name" name="nat_name" value="<?php echo $row_alum['nat_name']; ?>">
                        <span>Nature of Business</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Role in the Business" name="role_name" value="<?php echo $row_alum['role_name']; ?>">
                        <span>Role in the Business</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Approximate Monthly Profit" id="user_name" name="profit" value="<?php echo $row_alum['profit']; ?>">
                        <span>Approximate Monthly Profit</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div">
                        <input type="text" placeholder="Business Address" name="buss_address" value="<?php echo $row_alum['buss_addr']; ?>">
                        <span>Business Address</span>
                      </div>
                      <div class="input-div">
                        <input type="text" placeholder="Business Phone Numbers" id="user_name" name="buss_no" value="<?php echo $row_alum['buss_no']; ?>">
                        <span>Business Phone Numbers</span>
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



  
</body>

</html>