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
<title>
  BA Department
</title>


<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include "../../includes/sidebar.php" ?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "../../includes/navbar.php" ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

      <div class="row mt-4">
        <div class="col-12">
          <div class="card px-4 pb-4">


            <h5 class="mb-0 pt-4">Alumni BA Department List</h5>

            <div class="table-responsive">
              <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                  <tr>
                    <th>Image</th>
                    <th>Student No.</th>
                    <th>Fullname</th>
                    <th>Batch</th>
                    <th>Program</th>
                    <th>Position</th>
                    <th>Employment Status</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $listba = mysqli_query($db, "SELECT form_id, img, status, email, contact, course_abv, stud_no, current_title, batch, CONCAT(tbl_form.firstname, ' ', tbl_form.lastname) AS fullname FROM tbl_form 
                  LEFT JOIN tbl_program ON tbl_program.program_id = tbl_form.program_id
                  LEFT JOIN tbl_alumni ON tbl_alumni.alumni_id = tbl_form.alumni_id
                  LEFT JOIN tbl_employment_status ON tbl_employment_status.emp_status_id = tbl_form.emp_status_id
                  LEFT JOIN tbl_batch ON tbl_batch.batch_id = tbl_form.batch_id WHERE tbl_program.dep_id = 2
                   ");
                  while ($row = mysqli_fetch_array($listba)) {
                    $id = $row['form_id'];
                  ?>
                    <tr>
                      <td><?php if (empty($row['img'])) {
                            echo '<img class="border-radius-lg shadow-sm zoom" style="height:80px; width:80px;" src="../../assets/img/image.png"/>';
                          } else {
                            echo ' <img class=" border-radius-lg shadow-sm zoom" style="height:80px; width:80px;" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" "/>';
                          } ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['stud_no']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['fullname']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['batch']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['course_abv']; ?></td>
                      

                      <td class="text-sm font-weight-normal"><?php echo $row['current_title']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['status']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['email']; ?></td>
                      <td class="text-sm font-weight-normal"><?php echo $row['contact']; ?></td>
                      <?php if ($_SESSION['role'] == "Super Administrator" || $_SESSION['role'] == "Admin") { ?>
                      <td class="text-sm font-weight-normal">
                        <a class="btn btn-link text-success px-3 mb-0" href="../alumni/view-data.php" target="_blank"><i class="material-icons text-sm me-2">visibility</i>View</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="userData/ctrl-del-alumni.php" data-bs-toggle="modal" data-bs-target="#deleteAlumni<?php echo $id; ?>"><i class="material-icons text-sm me-2"  >delete</i>Delete</a>
                      </td>
                      <?php } else if ($_SESSION['role'] == "Registrar") {?>
                          <td class="text-sm font-weight-normal">
                        <a class="btn btn-link text-success px-3 mb-0" href="../alumni/view-data.php" target="_blank"><i class="material-icons text-sm me-2">visibility</i>View</a>
                        
                      </td>
                    <?php }?>
                    </tr>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">

                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="fas fa-trash-alt text-9xl"></i>
                              <h4 class="text-gradient text-danger mt-4">
                                Delete Account!</h4>
                              <p>Are you sure you want to delete
                                <br>
                                <i><b><?php echo $row['first_name']; ?></b></i>?
                              </p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-danger">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php include "../../includes/footer.php" ?>
  </main>
  <?php include "../../includes/fixed-plugin.php" ?>
  <!--   Core JS Files   -->
  <?php include "../../includes/script.php" ?>
</body>

</html>