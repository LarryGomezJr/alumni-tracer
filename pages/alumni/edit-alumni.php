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
require '../../includes/conn.php';
include '../../includes/head.php';
include '../../includes/session.php';

$_SESSION['alumni_id'] = $alumni_id;
?>

<title>
  Edit Profile
</title>


<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include "../../includes/sidebar.php"?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "../../includes/navbar.php"?>
    <!-- End Navbar -->

    <div class="container-fluid my-3 py-3">
      <div id="user-exist">
      
   </div>
   

      <div class="row mb-5">
        <div class="col-lg-3">
          
          <div class="card position-sticky top-1">
            <ul class="nav flex-column bg-white border-radius-lg p-3">

              <li class="nav-item pt-2">
                <a class="nav-link text-dark d-flex" data-scroll="" href="#basic-info">
                  <i class="material-icons text-lg me-2">receipt_long</i>
                  <span class="text-sm">Basic Info</span>
                </a>
              </li>
              <li class="nav-item pt-2">
                <a class="nav-link text-dark d-flex" data-scroll="" href="#password">
                  <i class="material-icons text-lg me-2">lock</i>
                  <span class="text-sm">Change Password</span>
                </a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">

          <div class="card card-body" id="profile">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-auto col-4">
                <div class="avatar avatar-xl position-relative">
                  <?php
$getUserData = mysqli_query($db, "SELECT * FROM tbl_alumni WHERE alumni_id = '$alumni_id'");
while ($row = mysqli_fetch_array($getUserData)) {
    if (!empty($row['img'])) {
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" alt="bruce"
                                                class="border-radius-lg shadow-sm" style="height: 80px; width: 80px;">';
    } else {
        echo '<img src="../../assets/img/image.png" alt="bruce"
                                            class="border-radius-lg shadow-sm">';
    }

    ?>
                </div>
              </div>
              <div class="col-sm-auto col-8 my-auto">
                <div class="h-100">
                  <h5 class="mb-1 font-weight-bolder">
                    <?php echo $user_name ?>
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm">
                    <?php echo $user_name ?>
                  </p>
                </div>
              </div>

              <div class="col-sm-auto ms-sm-auto mt-sm-0  d-flex">

                <form method="POST" enctype="multipart/form-data" action="userData/ctrl-edit-alumni.php" class="form">

                  <div class="file-upload-wrapper" data-text="Upload Image">
                    <input name="image" type="file" class="file-upload-field" value="">
                    <button type="submit" class="btn bg-gradient-success btn-sm float-end" name="saveImg">Update Image</button>
                  </div>

                </form>

              </div>

            </div>

          </div>

          <div class="card mt-4" id="basic-info">
            <div class="card-header">
              <h5>Basic Info</h5>
            </div>
            <form method="POST" enctype="multipart/form-data" action="userData/ctrl-edit-alumni.php" class="form">
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Firstname</label>
                    <input disabled name="firstname" type="txt" class="form-control" placeholder="firstname" value="<?php echo $row['firstname'];
    ?>">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Lastname</label>
                    <input disabled name="lastname" type="txt" class="form-control" placeholder="lastname" value="<?php echo $row['lastname'];
    ?>"> 
                  </div>
                </div>
              </div>

              <div class="row mt-4">

                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Username</label>
                    <input name="username" type="txt" class="form-control" placeholder="example@email.com" value="<?php echo $row['username'];
} ?>">
                  </div>
                </div>

              </div>

            <button type="submit" name="basic_info" class="btn bg-gradient-success btn-sm float-end mt-6 mb-3">Update Basic Info</button>
            </div>

            </form>
          </div>

          <form class="card mt-4 mb-5" id="password" method="POST" action="userData/ctrl-edit-alumni.php">
          <div class=" card mt-4" id="password">
            <div class="card-header">
              <h5>Change Password</h5>
            </div>
            <div class="card-body pt-0">

              <div class="input-group input-group-outline my-4">
                <label class="form-label">New password</label>
                <input type="password" required class="form-control" name="new_pass">
              </div>
              <div class="input-group input-group-outline">
                <label class="form-label">Confirm New password</label>
                <input type="password" class="form-control" name="confirm_pass">
              </div>

              <button type="submit" name="changepass" class="btn bg-gradient-success btn-sm float-end mt-6 mb-0">Update password</button>
            </div>
          </div>
          </form>
        </div>
      </div>
      <?php include "../../includes/footer.php"?>

  </main>
  <?php include "../../includes/fixed-plugin.php"?>
  <!--   Core JS Files   -->
  <?php include "../../includes/script.php"?>
  <script>
   

    <?php 
      if (!empty($_SESSION['usernameExist'])) {
    ?>
            Swal.fire("Username", "Already Existed", "warning");
    <?php 
    unset($_SESSION['usernameExist']);
  }  elseif (!empty($_SESSION['successUpdate'])){
?>
   Swal.fire("Username", "Updated Successfully", "success");

  <?php }
  
  ?>

  <?php 
      if (!empty($_SESSION['successImg'])) {     
    ?>
      Swal.fire("Image", "Updated Successfully", "success");
    <?php 
    unset($_SESSION['successImg']);
  }  
  ?>

  <?php 
      if (!empty($_SESSION['emptyImg'])) {     
    ?>
      Swal.fire("Error", "Upload an Image", "warning");
    <?php 
    unset($_SESSION['emptyImg']);
  }  
  ?>

  <?php 
      if (!empty($_SESSION['successPass'])) {     
    ?>
      Swal.fire("Password", "Updated Successfully", "success");
    <?php 
    unset($_SESSION['successPass']);
  }  
  ?>

  <?php 
      if (!empty($_SESSION['newNotMatch'])) {     
    ?>
      Swal.fire("Password", "Not Match, Try Again.", "warning");
    <?php 
    unset($_SESSION['newNotMatch']);
  }  
  ?>
  
  </script>
</body>

</html>