<?php
  session_start();
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

    <title>Sign Up | Swap</title>
  </head>
  <body>

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

    <!-- Main Container -->
        <div class="container signup">
          <div class="row">
            <div class="signup-box">
              <div class="col-1 signup">
                <img src="images/signup1.png" alt="">
              </div>
              <div class="col-2 signup">
                <h5>Sign Up</h5>
                <p>Already have an account? <a href="login.php">Login</a>  </p>
                <!-- Form -->
                <form name="userSignup" onsubmit="return validateForm()" id="SignupForm" action="sign-up2.php" method="post" enctype="multipart/form-data">
                  <div class="mb-1">
                    <label for="exampleInputFirstName" class="form-label">First Name</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="user_first_name" name="user_first_name" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputSecondName" class="form-label">Last Name</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="user_last_name" name="user_last_name" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Email</label> <span style="color:#ff0000">*</span>
                    <input type="email" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp" required>
                    <span>We'll never share your email with anyone else.</span>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Password</label> <span style="color:#ff0000">*</span>
                    <input type="password" class="form-control" id="access_code" name="access_code" required>
                    <span class="eye" onclick="myFunction()">
                      <i id="hide1" class="fas fa-solid fa-eye"></i>
                      <i id="hide2" class="fas fa-solid fa-eye-slash"></i>
                    </span>
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputMobile" class="form-label">Mobile Number</label> <span style="color:#ff0000">*</span>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1" id="">I agree to the <a href="#">Terms & Conditions</a> </label>
                  </div>
                  <button type="submit" class="btn btn-primary" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                </form>
                <!-- End of form -->
              </div>
            </div>
          </div>
        </div>
    <!-- End of Main Container -->

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
        let fname = document.forms["userSignup"]["user_first_name"].value;
        let lname = document.forms["userSignup"]["user_last_name"].value;
        let userPass = document.forms["userSignup"]["access_code"].value;
        let userMobile = document.forms["userSignup"]["mobile_number"].value;
        if (fname.length > 20){
          swal({
            title: "Exceeding word limit",
            text: "First Name must be within 20 characters",
            button: "Ok",
          });
          return false;
        }
        else if (lname.length > 20){
          swal({
            title: "Exceeding word limit",
            text: "Last Name must be within 20 characters",
            button: "Ok",
          });
          return false;
        }
        else if (userPass.length < 8){
          swal({
            title: "Weak Password",
            text: "Use a strong password with minimum of 8 characters",
            button: "Ok",
          });
          return false;
        }
        else if (userMobile.length < 10 || userMobile.length > 10){
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
