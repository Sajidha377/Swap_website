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

    <title>Admin Login | Swap</title>
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
        <div class="container admin-login">
          <div class="row">
            <div class="admin-login-box">
              <div class="col-1 admin-login">
                <img src="images/admin-login.jpg" alt="">
              </div>
              <div class="col-2 admin-login">
                <h5>Admin Login</h5>
                <p>Welcome back! Please enter your details.</p>
                <form action="admin-login2.php" method="post">
                  <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="admin_id" name="admin_id" aria-describedby="emailHelp" placeholder="Use your email address">
                  </div>
                  <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="admin_access_code" name="admin_access_code" placeholder="Enter your password">
                    <span class="eye" onclick="myFunction()">
                      <i id="hide1" class="fas fa-solid fa-eye"></i>
                      <i id="hide2" class="fas fa-solid fa-eye-slash"></i>
                    </span>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                </form>
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

  </body>
</html>
