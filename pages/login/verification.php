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
<?php
session_start();
if (empty($_SESSION["accept"])) {
    header("location: reset_pass.php");
}
if (!empty($_SESSION['successActive'])) {
    unset($_SESSION['successActive']);
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include "../../includes/head.php"?>
<title>
  Sign-In | Saint Francis of Assisi College Las Piñas
</title>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <img class="resize1" src="../../assets/img/sfac.png">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="http://www.stfrancis.edu.ph/">
              Saint Francis of Assisi College Las Piñas
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-up.html">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
<div class="page-header min-vh-100" style="background-image: url('../../assets/img/background-img.png');">
<span class="mask bg-gradient-dark opacity-6"></span>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4 col-md-7">
<div class="card">
<div class="info mt-n5 mx-auto">
<div class="icon icon-shape icon-xl border-radius-xl bg-gradient-warning shadow text-center mx-auto">
<i class="material-icons opacity-10">lock_open</i>
</div>
</div>
<div class="card-body px-lg-5 py-lg-5 text-center">
<div class="text-center text-muted mb-4">
 <h2>Verification Code</h2>
 <h6>Please check your email to view the verification code.</h6>
</div>
<form role="form" action="userData/ctrl.verification.php" method="POST">
<div class="row gx-2 gx-sm-3 mb-3">
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="first">
</div>
</div>
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="second">
</div>
</div>
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="third">
</div>
</div>
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="fourth">
</div>
</div>
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="fifth">
</div>
</div>
<div class="col">
<div class="input-group input-group-outline">
<input type="text" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" name="sixth">
</div>
</div>
</div>
<div class="text-center">
<button type="submit" class="btn bg-gradient-warning w-100" name="submit" >Send code</button>
<span class="text-muted text-sm">Haven't received it?<a href="javascript:;"> Resend a new code</a>.</span>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>