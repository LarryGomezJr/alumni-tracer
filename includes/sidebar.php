<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" http://www.stfrancis.edu.ph/ " target="_blank">
      <img src="../../assets/img/sfac.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">SFAC-MAIN CAMPUS</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <?php
    if ($_SESSION['role'] == "Super Administrator") { ?>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../../pages/dashboard/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <hr class="horizontal light mt-3 mb-1">
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <?php 
            $getImg = mysqli_query($db, "SELECT img FROM tbl_super_ad WHERE admin_id = '$admin_id'");
                  while ($row = mysqli_fetch_array($getImg)) {
            if (empty($row['img'])) {
              echo '<img class="avatar" style="height:45px; width:45px;" src="../../assets/img/image.png"/>';
            } else {
              echo ' <img class="avatar" style="height:45px; width:45px;" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" "/>';
            } }?>

            <span class="nav-link-text ms-2 ps-1"><?php echo $user_name ?></span>
          </a>
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white " href="../../pages/super_admin/edit-admin.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Edit Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="../login/userData/ctrl.logout.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Logout </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal light mt-1 mb-1">
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
            <span class="nav-link-text ms-2 ps-1">Add Accounts</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ">
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/president/add_president.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add President</span>
                </a>
              </li> -->
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/admin/add-admin.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Admin</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/registrar/add-registrar.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Registrar</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/alumni/add_alumni.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Alumni</span>
                </a>
              </li>
              
            </ul>
          </div>
        </li>

        <hr class="horizontal light mt-1 mb-1">
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons">
                groups_2
              </i>
            </div>
            <span class="nav-link-text ms-2 ps-1">Account Lists</span>
          </a>
          <div class="collapse " id="ecommerceExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="../admin/admin-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Admin Lists</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../registrar/registrar-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Registrar Lists</span>
                </a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni-officer/officer-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Officer Lists</span>
                </a>
              </li> -->
              <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni/alumni-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Lists</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
            <hr class="horizontal light mt-1 mb-1">
            <li class="nav-item">
          <a data-bs-toggle="collapse" href="#others" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons">
                menu
              </i>
            </div>
            <span class="nav-link-text ms-2 ps-1">Others</span>
          </a>
          <div class="collapse " id="others">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="../batch/add-batch.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Add Batch</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni/alumni-form.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Form Lists</span>
                </a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni-officer/officer-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Officer Lists</span>
                </a>
              </li> -->
              
            </ul>
          </div>
        </li>

      </ul>
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
                <i class="fas fa-user-alt text-9xl"></i>
                <p>Are you sure you want to Logout?</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <a href="../login/userData/ctrl.logout.php" class="nav-link text-body font-weight-bold px-0">
                <button type="button" class="btn bg-gradient-danger">Logout</button>
              </a>
            </div>

          </div>
        </div>
      </div>
      <?php } else if ($_SESSION['role'] == "Admin") {
            ?>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../../pages/dashboard/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <hr class="horizontal light mt-3 mb-1">
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <?php 
            $getImg = mysqli_query($db, "SELECT img FROM tbl_admin WHERE ad_id = '$ad_id'");
                  while ($row = mysqli_fetch_array($getImg)) {
            if (empty($row['img'])) {
              echo '<img class="avatar" style="height:45px; width:45px;" src="../../assets/img/image.png"/>';
            } else {
              echo ' <img class="avatar" style="height:45px; width:45px;" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" "/>';
            } }?>

            <span class="nav-link-text ms-2 ps-1"><?php echo $user_name ?></span>
          </a>
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white " href="../admin/edit-admin.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Edit Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="../login/userData/ctrl.logout.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Logout </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal light mt-1 mb-1">
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
            <span class="nav-link-text ms-2 ps-1">Add Accounts</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ">
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/president/add_president.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add President</span>
                </a>
              </li> -->
              
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/registrar/add-registrar.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Registrar</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/alumni/add_alumni.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Alumni</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <hr class="horizontal light mt-1 mb-1">
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons">
                groups_2
              </i>
            </div>
            <span class="nav-link-text ms-2 ps-1">Account Lists</span>
          </a>
          <div class="collapse " id="ecommerceExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="../registrar/registrar-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Registrar Lists</span>
                </a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni-officer/officer-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Officer Lists</span>
                </a>
              </li> -->
              <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni/alumni-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Lists</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <hr class="horizontal light mt-1 mb-1">
            <li class="nav-item">
          <a data-bs-toggle="collapse" href="#others" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons">
                menu
              </i>
            </div>
            <span class="nav-link-text ms-2 ps-1">Others</span>
          </a>
          <div class="collapse " id="others">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="../batch/add-batch.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Add Batch</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni/alumni-form.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Form Lists</span>
                </a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni-officer/officer-list.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Officer Lists</span>
                </a>
              </li> -->
              
            </ul>
          </div>
        </li>

      </ul>
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
                <i class="fas fa-user-alt text-9xl"></i>
                <p>Are you sure you want to Logout?</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <a href="../login/userData/ctrl.logout.php" class="nav-link text-body font-weight-bold px-0">
                <button type="button" class="btn bg-gradient-danger">Logout</button>
              </a>
            </div>

          </div>
        </div>
      </div>
      

    <?php } else if ($_SESSION['role'] == "Registrar") {
            ?>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../../pages/dashboard/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <hr class="horizontal light mt-3 mb-1">
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <?php 
            $getImg = mysqli_query($db, "SELECT img FROM tbl_registrar WHERE reg_id = '$reg_id'");
                  while ($row = mysqli_fetch_array($getImg)) {
            if (empty($row['img'])) {
              echo '<img class="avatar" style="height:45px; width:45px;" src="../../assets/img/image.png"/>';
            } else {
              echo ' <img class="avatar" style="height:45px; width:45px;" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" "/>';
            } }?>

            <span class="nav-link-text ms-2 ps-1"><?php echo $user_name ?></span>
          </a>
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white " href="../../pages/registrar/edit-registrar.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Edit Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="../login/userData/ctrl.logout.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Logout </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        
        

        <hr class="horizontal light mt-1 mb-1">
        <li class="nav-item">
          
            <ul class="nav ">
              
            
              <li class="nav-item ">
                <a class="nav-link text-white " href="../alumni/alumni-form.php">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">
                      toc
                    </i>
                  </div>
                  <span class="nav-link-text ms-2 ps-1">Alumni Form Lists</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

      </ul>
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
                <i class="fas fa-user-alt text-9xl"></i>
                <p>Are you sure you want to Logout?</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <a href="../login/userData/ctrl.logout.php" class="nav-link text-body font-weight-bold px-0">
                <button type="button" class="btn bg-gradient-danger">Logout</button>
              </a>
            </div>

          </div>
        </div>
      </div>
      

    <?php } else if ($_SESSION['role'] == "Alum Stud") {
            ?>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../../pages/dashboard/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <hr class="horizontal light mt-3 ">
        <li class="nav-item mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <?php 
            $getImg = mysqli_query($db, "SELECT img FROM tbl_alumni WHERE alumni_id = '$alumni_id'");
                  while ($row = mysqli_fetch_array($getImg)) {
            if (empty($row['img'])) {
              echo '<img class="avatar" style="height:45px; width:45px;" src="../../assets/img/image.png"/>';
            } else {
              echo ' <img class="avatar" style="height:45px; width:45px;" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" "/>';
            } }?>
            <span class="nav-link-text ms-2 ps-1"><?php echo $user_name; ?></span>
          </a>
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white " href="../../pages/alumni/edit-alumni.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Edit Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="../login/userData/ctrl.logout.php">
                  <span class="fa fa-user me-sm-1"> </span>
                  <span class="sidenav-normal  ms-3  ps-1 "> Logout </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <hr class="horizontal light mb-1">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Form</h6>
        </li>
        <?php
        $verify = $db->query("SELECT alumni_id FROM tbl_form WHERE alumni_id = $alumni_id");
$num = $verify->num_rows;

if ($num > 0) {
    echo '<li class="nav-item">
          <a class="nav-link text-white " href="../../pages/alumni/my_form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sticky_note_2</i>
            </div>
            <span class="nav-link-text ms-1">Edit Form</span>
          </a>
        </li>';
} else {
    echo '<li class="nav-item">
          <a class="nav-link text-white " href="../../pages/alumni/fill_up_form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sticky_note_2</i>
            </div>
            <span class="nav-link-text ms-1">Fill Up Form</span>
          </a>
        </li>';
} ?> 
      
      </ul>
      

    <?php } ?>
  </div>

</aside>