<?php
  require("validate-admin.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
      include("styles.php");
     ?>

    <style media="screen">
      <?php
      include("style.css");
      ?>
    </style>

    <title>Admin Sign Up | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("dashboard-header.php");
      ?>

      <div class="container">

        <div class="row">
        <div class="col-8">
          <?php
            if(isset($_SESSION['status'])){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:20px;">'
              .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              unset($_SESSION['status']);
            }
          ?>
        </div>
        </div>

        <div class="row 1">

          <!-- Carousel -->
          <?php
           include("dashboard-carousel.php");
          ?>

          <div class="col-lg-8 col-md-8 admin">
            <div class="small-container">
              <div class="col-lg-6 col-md-6">
                <h5>Sign Up</h5>

                <!-- Form -->
                <form id="" name="adminSignup" onsubmit="return validateForm()" action="admin-sign-up2.php" method="post" enctype="multipart/form-data">
                  <div class="mb-1">
                    <label for="exampleInputFirstName" class="form-label">First Name</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="admin_first_name" name="admin_first_name" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputSecondName" class="form-label">Last Name</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="admin_last_name" name="admin_last_name" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Email</label> <span style="color:#ff0000">*</span>
                    <input type="email" class="form-control" id="admin_id" name="admin_id" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Password</label> <span style="color:#ff0000">*</span>
                    <input type="password" class="form-control" id="admin_access_code" name="admin_access_code" required>
                    <span class="eye" onclick="myFunction()">
                      <i id="hide1" class="fas fa-solid fa-eye"></i>
                      <i id="hide2" class="fas fa-solid fa-eye-slash"></i>
                    </span>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputMobile" class="form-label">Mobile Number</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="admin_mobile_number" name="admin_mobile_number" aria-describedby="emailHelp"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                  </div>
                  <button type="submit" class="btn" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                </form>
                <!-- End of form -->
              </div>
              <!-- End of col-lg-6 col-md-6 -->
            </div>
          </div>

        </div>
        <!-- End of row 2 -->
      </div>
      <!-- End of small-container -->

    </div>
    <!-- End of main container -->

    <script>
      function myFunction(){
        var x = document.getElementById("access_code");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        }
        else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }
    </script>

    <script>
      function validateForm(){
        let fname = document.forms["adminSignup"]["admin_first_name"].value;
        let lname = document.forms["adminSignup"]["admin_last_name"].value;
        let adminPass = document.forms["adminSignup"]["admin_access_code"].value;
        let adminMobile = document.forms["adminSignup"]["admin_mobile_number"].value;
        var numbers = /^[0-9]+$/;
        if (fname.length > 20){
          swal({
            title: "Exceeding word limit",
            text: "First Name must be within 20 characters",
            button: "Ok",
          });
          return false;
        }
        if (lname.length > 20){
          swal({
            title: "Exceeding word limit",
            text: "Last Name must be within 20 characters",
            button: "Ok",
          });
          return false;
        }
        if (adminPass.length < 8){
          swal({
            title: "Weak Password",
            text: "Use a strong password with minimum of 8 characters",
            button: "Ok",
          });
          return false;
        }
        if (adminMobile.length < 10 || adminMobile.length > 10){
          swal({
            title: "Invalid Mobile number",
            text: "Enter a valid Mobile Number",
            button: "Ok",
          });
          return false;
        }
      }
    </script>


  </body>
</html>
