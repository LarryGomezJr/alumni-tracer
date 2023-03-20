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
    Alumni Form Lists
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
                    <form method="POST" action="userData/ctrl-email.php">
                        <div class="card px-4 pb-4">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 pt-4">Alumni Form List</h5>
                                <div class="dropdown pt-4">
                                    <a href="javascript:;" class="btn btn-icon bg-gradient-primary "
                                        data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                        <span class="material-icons">email</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                        aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="left-start">
                                        <li><button type="submit" name="sendEmail" class="dropdown-item border-radius-md">Email
                                                All Alumni</button></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="searchTable" class="table table-flush" style="width: 100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input mt-1" type="checkbox" value="all"
                                                        name="all" id="all">
                                                </div>
                                            </th>
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
                                </table>
                            </div>
                        </div>
                    </form>
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