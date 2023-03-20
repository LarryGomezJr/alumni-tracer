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
include '../../includes/graph-data.php';

?>

<title>
  Dashboard
</title>

<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include "../../includes/sidebar.php"?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "../../includes/navbar.php"?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

        <?php if ($_SESSION['role'] == "Super Administrator" || $_SESSION['role'] == "Admin") {?>
          <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0 ">
              <div class="card mb-5">
                <div class="card-header pb-0 p-3">
                  <div class="d-flex align-items-center">
                  <h6 class="mb-0">Analytics Insights ( Per Department )</h6>

                  </div>
                </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-5 text-center">
                    <div class="chart">
                      <canvas id="chart-consumption2" class="chart-canvas" height="200"></canvas>
                    </div>
                    <h4 class="font-weight-bold mt-n8">
                      <span><?php echo $alumni_total; ?></span>
                      <span class="d-block text-body text-sm">ALUMNI</span>
                    </h4>
                    </div>
                <div class="col-7">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <tbody>
                      <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-primary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">CS Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_CS; ?> </span>
                </td>
                    </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-secondary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">BA Department</h6>
                  </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_BA; ?></span>
                </td>
                </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-info me-3"> </span>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">EDUC Department</h6>
                </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_EDUC; ?></span>
                </td>
                </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-success me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">HM / HRM Department</h6>
                  </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_HM; ?> </span>
                </td>
                </tr>

                <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-warning me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">LA Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_LA; ?></span>
                </td>
                    </tr>
                    <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-dark me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">ENG Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_ENG; ?></span>
                </td>
                    </tr>
                    <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-danger me-3" > </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">NURS Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_NURS; ?></span>
                </td>
                    </tr>

              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
            <div class="col-lg-6 mt-4 mt-lg-0 ">
              <div class="card mb-5">
                <div class="card-header pb-0  p-3">
                <div class="d-flex align-items-center">
                <h6 class="mb-0">Analytics Insights ( Work Status )</h6>

              </div>
            </div>
          <div class="card-body p-3 ">
            <div class="row">
              <div class="col-5 text-center">
                <div class="chart">
                  <canvas id="chart-consumption" class="chart-canvas" height="197"></canvas>
                </div>
                  <h4 class="font-weight-bold mt-n8">
                    <span><?php echo $alumni_total; ?></span>
                  <span class="d-block text-body text-sm">ALUMNI</span>
                  </h4>
              </div>
          <div class="col-7">
            <div class="table-responsive">
            <table class="table align-items-center mb-0">
            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-0">
                    <span class="badge bg-gradient-primary me-3"> </span>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Full-time</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_ft; ?></span>
                </td>
              </tr>
              <tr>
              <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-secondary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Part-time</h6>
                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"><?php echo $total_pt; ?></span>
              </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-0">
                    <span class="badge bg-gradient-info me-3"> </span>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Self-employed</h6>
                    </div>
                  </div>
                </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"> <?php echo $total_se; ?> </span>
              </td>
              </tr>
              <tr>
              <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-warning me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Unemployed</h6>
                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"><?php echo $total_ue; ?></span>
              </td>
              </tr>
              <td>
                <div class="d-flex px-2 py-0">

                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"> <?php echo $alumni_total; ?> </span>
              </td>
              </tr>

            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Alumni</p>
                  <?php
$alumni_query = "SELECT alumni_id from tbl_form";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h4 class="mb-0">No data</h4>';
    }

    ?>

                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../alumni/alumni-form.php"  target="_blank" role="button"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Full-time</p>

                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 1";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h4 class="mb-0">No data</h4>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/full-time-list.php"  target="_blank" role="button"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Part-time</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 2";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/part-time-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Self-employed</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 3";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/self-employed-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Unemployed</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 4";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/unemployed-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">CS Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 1";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/cs-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button" >
                  <span class="btn-inner--text"  >See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-secondary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">BA Department </p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 2";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/ba-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">EDUC Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 3";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/educ-dept.php" target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button> </a>
              </div>
            </div>
          </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">HM / HRM Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 4";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/hrm-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">LA Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 6";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/la-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">ENG Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 7";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/eng-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">NURS Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 8";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/nurs-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
                </div>
        <?php } else if ($_SESSION['role'] == "Registrar") {
    ?> <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0 ">
              <div class="card mb-5">
                <div class="card-header pb-0 p-3">
                  <div class="d-flex align-items-center">
                  <h6 class="mb-0">Analytics Insights ( Per Department )</h6>

                  </div>
                </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-5 text-center">
                    <div class="chart">
                      <canvas id="chart-consumption2" class="chart-canvas" height="200"></canvas>
                    </div>
                    <h4 class="font-weight-bold mt-n8">
                      <span><?php echo $alumni_total; ?></span>
                      <span class="d-block text-body text-sm">ALUMNI</span>
                    </h4>
                    </div>
                <div class="col-7">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <tbody>
                      <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-primary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">CS Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_CS; ?> </span>
                </td>
                    </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-secondary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">BA Department</h6>
                  </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_BA; ?></span>
                </td>
                </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-info me-3"> </span>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">EDUC Department</h6>
                </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_EDUC; ?></span>
                </td>
                </tr>
                <tr>
                <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-success me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">HM / HRM Department</h6>
                  </div>
                </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"> <?php echo $total_HM; ?> </span>
                </td>
                </tr>

                <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-warning me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">LA Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_LA; ?></span>
                </td>
                    </tr>
                    <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-dark me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">ENG Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_ENG; ?></span>
                </td>
                    </tr>
                    <tr>
                      <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-danger me-3" > </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">NURS Department</h6>
                  </div>
                </div>
                      </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_NURS; ?></span>
                </td>
                    </tr>

              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
            <div class="col-lg-6 mt-4 mt-lg-0 ">
              <div class="card mb-5">
                <div class="card-header pb-0  p-3">
                <div class="d-flex align-items-center">
                <h6 class="mb-0">Analytics Insights ( Work Status )</h6>

              </div>
            </div>
          <div class="card-body p-3 ">
            <div class="row">
              <div class="col-5 text-center">
                <div class="chart">
                  <canvas id="chart-consumption" class="chart-canvas" height="197"></canvas>
                </div>
                  <h4 class="font-weight-bold mt-n8">
                    <span><?php echo $alumni_total; ?></span>
                  <span class="d-block text-body text-sm">ALUMNI</span>
                  </h4>
              </div>
          <div class="col-7">
            <div class="table-responsive">
            <table class="table align-items-center mb-0">
            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-0">
                    <span class="badge bg-gradient-primary me-3"> </span>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Full-time</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs"><?php echo $total_ft; ?></span>
                </td>
              </tr>
              <tr>
              <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-secondary me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Part-time</h6>
                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"><?php echo $total_pt; ?></span>
              </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-0">
                    <span class="badge bg-gradient-info me-3"> </span>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Self-employed</h6>
                    </div>
                  </div>
                </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"> <?php echo $total_se; ?> </span>
              </td>
              </tr>
              <tr>
              <td>
                <div class="d-flex px-2 py-0">
                  <span class="badge bg-gradient-warning me-3"> </span>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Unemployed</h6>
                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"><?php echo $total_ue; ?></span>
              </td>
              </tr>
              <td>
                <div class="d-flex px-2 py-0">

                  </div>
                </div>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs"> <?php echo $alumni_total; ?> </span>
              </td>
              </tr>

            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Alumni</p>
                  <?php
$alumni_query = "SELECT alumni_id from tbl_form";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h4 class="mb-0">No data</h4>';
    }

    ?>

                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../alumni/alumni-form.php"  target="_blank" role="button"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Full-time</p>

                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 1";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h4 class="mb-0">No data</h4>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/full-time-list.php"  target="_blank" role="button"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Part-time</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 2";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/part-time-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Self-employed</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 3";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/self-employed-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Unemployed</p>
                  <?php
$alumni_query = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 4";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../Employment_Status/unemployed-list.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">CS Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 1";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/cs-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button" >
                  <span class="btn-inner--text"  >See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-secondary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">BA Department </p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 2";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/ba-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>

<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4 mt-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">EDUC Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 3";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/educ-dept.php" target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button> </a>
              </div>
            </div>
          </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">HM / HRM Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 4";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/hrm-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">LA Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 6";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/la-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">ENG Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 7";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/eng-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 py-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">NURS Department</p>
                  <?php
$alumni_query =
        "SELECT * FROM tbl_form f
                  LEFT JOIN tbl_program p
                  ON f.program_id = p.program_id
                  LEFT JOIN tbl_department d
                  ON d.dep_id = p.dep_id WHERE p.dep_id = 8";
    $user_query_run = mysqli_query($db, $alumni_query);

    if ($user_total = mysqli_num_rows($user_query_run)) {
        echo '<h4 class="mb-0">' . $user_total . '</h4>';
    } else {
        echo '<h6 class="mb-0">No data</h6>';
    }

    ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../department-list/nurs-dept.php"  target="_blank"><button class="btn btn-icon btn-3 btn-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
                </div>
            
        <?php } else if ($_SESSION['role'] == "Alum Stud") {
    ?><div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Alumni</p>
                  <?php
                    $alumni_query = "SELECT alumni_id from tbl_form WHERE program_id='$program_id'";
                    $user_query_run = mysqli_query($db, $alumni_query);

                  if ($user_total = mysqli_num_rows($user_query_run)) {
                    echo '<h4 class="mb-0">' . $user_total . '</h4>';
                } else {
                    echo '<h4 class="mb-0">No data</h4>';
                    }
                  ?>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <a href="../alumni/total-alumni-dash.php"  target="_blank"><button class="btn btn-icon btn-3 bg-gradient-dark" type="button">
                  <span class="btn-inner--text">See more</span>
                  <span class="btn-inner--icon"><i class="material-icons">visibility</i></span>
                </button></a>
              </div>
            </div>
          </div>
                </div>
        <?php }?>

      <?php include "../../includes/footer.php"?>
    </div>
  </main>
  <?php include "../../includes/fixed-plugin.php"?>
  <!--   Core JS Files   -->
  <?php include "../../includes/script.php"?>
</body>

</html>