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
include '../../includes/fetchData.php';

?>

<title>Add Batch</title>

<body class="g-sidenav-show  bg-gray-200">

  <!-- sidebar -->
  <?php include "../../includes/sidebar.php" ?>
  <!-- End sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "../../includes/navbar.php" ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
          <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
          <div class="card">         
            <form method="POST" action="userData/ctrl-add-batch.php">
              <div class="main active">
                <img class="resize" src="../../assets/img/sfac.png">
                <div class="text">
                <h2>Add Batch</h2>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input type="text" required require id="user_name" name="batch">
                    <span>Add batch year</span>
                  </div>
                </div>
            <div class="buttons button_space">
              <button class="back_button">Back</button>
              <button class="submit_button" name="submit">Submit</button>
            </div>
            </div>
            </form>
          </div>
          </div>
          

          <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
            <div class="card">   
              <form method="POST" action="userData/ctrl-del-batch.php">                          
              <div class="main active">
                <img class="resize" src="../../assets/img/sfac.png">
                <div class="text">
                <h2>Batch List</h2>
                </div>
                
                <div class="input-text">
                   <select name="batch">                   
                          <option selected disabled>Batch List</option>                         
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

            <div class="buttons button_space">             
              <button type="submit" class="d-sm-inline d-none" name="submit_del" ><i class="material-icons text-sm me-2">delete</i>Delete</button>
            </div>         
            </div>           
          </div>
                        </div>
            </form>
            </div> 
                    
          
        
        
      </div>
      <?php include "../../includes/footer.php" ?>
    
  </main>
  <?php include "../../includes/fixed-plugin.php" ?>
  <!--   Core JS Files   -->
  <?php include "../../includes/script.php" ?>
  <script>
    <?php 
      if (!empty($_SESSION['addBatch'])) {     
    ?>
            Swal.fire("Batch", "Added Successfully", "success");
    <?php 
    unset($_SESSION['studAdded']);
  } 
  ?>

  </script>
</body>

</html>