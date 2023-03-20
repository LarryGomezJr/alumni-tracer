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
// End Session 
include '../../includes/head.php';
?>

<title>Add Admin</title>

<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include "../../includes/sidebar.php" ?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "../../includes/navbar.php" ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      <div id="admin-added"></div>
      <div id="admin-notMatch"></div>
      <div class="row">
        <div class="containerr">         
          <div class="card">            
            <div class="form">              
  <div class="left-side">
    <div class="left-heading">
      <img class="img-left" src="../../assets/img/sfac.png">
    </div>
    <div class="steps-content">
      <h3 class="step"><b>Step</b> <span class="step-number">1</span></h3>

    </div>
    <ul class="ul_progress">
      <li class="active">Personal Information</li>
      <li>Account</li>
    </ul>
  </div>
  <div class="right-side">
    <form method="POST" action="userData/ctrl-add-admin.php">
      <div class="main active">
        <img class="resize" src="../../assets/img/sfac.png">
        <div class="text">
          <h2>Add Admin</h2>
          <p>Enter your personal information to proceed.</p>
        </div>
        <div class="input-text">
          <div class="input-div">
            <input type="text" required require id="user_name" name="firstname">
            <span>First Name</span>
          </div>
          <div class="input-div">
            <input type="text" required name="middlename">
            <span>Middle Name</span>
          </div>
          <div class="input-div">
            <input type="text" required name="lastname">
            <span>Last Name</span>
          </div>
        </div>

        <div class="input-text">
          <div class="input-div">
            <input type="text" required require name="email">
            <span>E-mail Address</span>
          </div>
        </div>
       

        <div class="buttons">
          <button class="next_button">Next Step</button>
        </div>
      </div>
      <div class="main">
        <img class="resize" src="../../assets/img/sfac.png">
        <div class="text">
          <h2>Account</h2>
          <p></p>
        </div>
        <div class="input-text">
          <div class="input-div">
            <input type="text" required require name="username">
            <span>Username</span>
          </div>
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label" for="pwd"></label>
          <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label" for="pwd"></label>
          <input type="password" class="form-control" id="pwd" name="confirm_pass" placeholder="Confirm Password">
        </div>

        <div class="buttons button_space">
          <button class="back_button">Back</button>
          <button class="submit_button" name="submit">Submit</button>
        </div>
      </div>
      
    </form>

  </div>
</div>
          </div>
        </div>
      </div>
      <?php include "../../includes/footer.php" ?>
    </div>
  </main>
  <?php include "../../includes/fixed-plugin.php" ?>
  <!--   Core JS Files   -->
  <?php include "../../includes/script.php" ?>

  <script>
    <?php 
      if (!empty($_SESSION['Admin_added'])) {     
    ?>
            Swal.fire("Admin", "Added Successfully", "success");
    <?php 
    unset($_SESSION['Admin_added']);
  }  
  ?>
  <?php 
      if (!empty($_SESSION['Admin_notMatch'])) {     
    ?>
            Swal.fire("Error", "Password does not Match", "error")
    <?php 
    unset($_SESSION['Admin_notMatch']);
  }  
  ?>
  </script>
</body>

</html>