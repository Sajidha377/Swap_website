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

    <title>Admin | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container admin">

      <!-- Header -->
      <?php
       include("dashboard-header.php");
      ?>

     
        <div class="col-12 admin">
          <h2>Settings</h2>
        </div>

        <div class="row 2">
          <div class="col-10" style="background-color:#fff;">
          <?php
            if(isset($_SESSION['status'])){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
              .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              unset($_SESSION['status']);
            }
          ?>
          </div>
          <!-- End of col-10 -->
        </div>
        <!-- End of row 2 -->


      <div class="small-container">
        <div class="col-12">
          <div class="row 1" style="display:flex; align-items:flex-start;">

            <!-- Carousel -->
            <?php
            include("dashboard-carousel.php");
            ?>

            <div class="col-lg-8 col-md-8">
              
              <div class="row 2">

                <div class="card" style="width: 18rem; margin-top:2%;">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Admin Sign Up</h6>
                    <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i> <br>
                    <a href="admin-sign-up.php"><button type="button" class="btn btn-success" style="margin-top:5px;">
                    Sign Up</button></a> 
                  </div>
                </div>
                <!-- Sign Up -->

                <div class="card" style="width: 18rem; margin-top:2%;">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Admin Edit</h6>
                    <i class="fas fa-edit fa-2x"></i> <br>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" 
                    data-bs-target="#staticBackdrop" style="margin-top:5px;">Edit</button>
                  </div>
                </div>
                <!-- Edit Admin -->

                <div class="card" style="width: 18rem; margin-top:2%;">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Change Passowrd</h6>
                    <i class="fas fa-lock fa-2x"></i> <br>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" 
                    data-bs-target="#staticBackdrop2" style="margin-top:5px;">Change</button>
                  </div>
                </div>
                <!-- Change Password -->


                <?php
                  $result = $mysqli->query("SELECT * FROM admin");

                  $rowcount1 = mysqli_num_rows($result);
                ?>

                <div class="card" style="width: 18rem; margin-top:2%;">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $rowcount1; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">No. of Admins</h6>
                    <i class="fas fa-user-cog fa-2x"></i>
                  </div>
                </div>
                <!-- No. of Admin -->

              </div>
              <!-- End of row 2 (admin) -->

              <?php
                //building the dynamic SQL command
                $sql = "select * from admin";

                //executing the SQL command
                $rs = $mysqli->query($sql);

                while($row = mysqli_fetch_assoc($rs)){

              ?>

              <div class="col-11 admin">
                <div class="alert alert-secondary alert-dismissible fade show" role="alert" style="margin-left:30px; 
                margin-left:30px; margin-top:30px;">
                  <div class="row 3" style="display:flex; align-items:flex-start;">
                    <div class="col-2">
                      <i class="fas fa-solid fa-user fa-5x"></i>
                    </div>
                    <div class="col-6 admin">
                        <table>
                          <tbody>
                            <tr>
                              <th>Admin ID</th>
                              <th>-</th>
                              <td><?php echo $row['admin_id']; ?></td>
                            </tr>
                            <tr>
                              <th>Name</th>
                              <th>-</th>
                              <td><?php echo $row['admin_first_name']; ?> &nbsp; <?php echo $row['admin_last_name']; ?></td>
                            </tr>
                            <tr>
                              <th>Mobile</th>
                              <th>-</th>
                              <td><?php echo $row['admin_mobile_number']; ?></td>
                            </tr>
                          </tbody>
                        </table>

                    </div>
                    <!-- End of col-8 -->
                  </div>
                  <!-- End of row 3 -->

                </div>
              </div>
              <!-- End of col-12 -->

              <?php

                 }

                ?>

            </div>  
            <!-- End of col-8 -->

          </div>
          <!-- End of row 1 --> 
        </div>
        <!-- End of col-12 -->
      </div>
      <!-- End of small-container -->


      <?php
        $admin_id = $_SESSION['admin_id'];

        //building the dynamic SQL command
        $sql = "select * from admin where admin_id='$admin_id'";

        //executing the SQL command
        $rs = $mysqli->query($sql);


        if(mysqli_num_rows($rs) > 0){

        //fetching the records
        $row = mysqli_fetch_assoc($rs);
      ?>

      <!-- Edit Admin Account Modal -->
      <div class="modal fade 1" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Admin Account Details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body 2">
              <!-- Form -->
              <form name="editAdmin" onsubmit="return validateForm1()" id="editUser" action="edit-admin-account.php" method="post" enctype="multipart/form-data" style="color:#02444b; font-size:14px; font-weight:600;">
                <div class="mb-1">
                  <label for="exampleInputFirstName" class="form-label">First Name</label> <span style="color:#ff0000">*</span>
                  <input type="text" value="<?php echo $row['admin_first_name']; ?>" class="form-control" id="admin_first_name" name="admin_first_name" aria-describedby="emailHelp" required style="font-size:14px;">
                </div>
                <div class="mb-1">
                  <label for="exampleInputSecondName" class="form-label">Last Name</label> <span style="color:#ff0000">*</span>
                  <input type="text" value="<?php echo $row['admin_last_name']; ?>" class="form-control" id="admin_last_name" name="admin_last_name" aria-describedby="emailHelp" required style="font-size:14px;">
                </div>
                <div class="mb-1">
                  <label for="exampleInputEmail1" class="form-label">Email</label> <span style="color:#ff0000">*</span>
                  <input type="email" value="<?php echo $row['admin_id']; ?>" class="form-control" id="admin_id" name="admin_id" aria-describedby="emailHelp" required style="font-size:14px;">
                </div>

                <div class="mb-1">
                  <label for="exampleInputMobile" class="form-label">Mobile Number</label> <span style="color:#ff0000">*</span>
                  <input type="text" value="<?php echo $row['admin_mobile_number']; ?>" class="form-control" id="admin_mobile_number" name="admin_mobile_number" aria-describedby="emailHelp" required style="font-size:14px;">
                </div>
                <button type="submit" class="btn btn-success" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Save Changes</button>
              </form>
              <!-- End of form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Edit Admin account modal -->

      <?php
        }
      ?>

      <!-- Edit Admin Paasword Modal -->
      <div class="modal fade 2" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body 2">
              <!-- Form -->
              <form name="editAdminPass" onsubmit="return validateForm2()" id="editUser" action="change-admin-password.php" method="post" enctype="multipart/form-data" style="color:#02444b; font-size:14px; font-weight:600;">
                
                <div class="mb-1">
                  <label for="exampleAccessCode" class="form-label">Old Password</label> <span style="color:#ff0000">*</span>
                  <input disabled type="password" value="<?php echo $row['admin_access_code']; ?>" class="form-control" id="admin_access_code" name="access_code" aria-describedby="emailHelp" placeholder="Old Password" style="font-size:13px;">
                </div>

                <div class="mb-1">
                  <label for="exampleAccessCode" class="form-label">New Password</label> <span style="color:#ff0000">*</span>
                  <input type="password" value="" class="form-control" id="admin_new_access_code" name="admin_new_access_code" aria-describedby="emailHelp" placeholder="New Password" style="font-size:13px;">
                  <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fas fa-solid fa-eye"></i>
                    <i id="hide2" class="fas fa-solid fa-eye-slash"></i>
                  </span>
                </div>

                <button type="submit" class="btn btn-success" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Save Changes</button>
              </form>
              <!-- End of form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Edit Admin Password modal -->

    </div>
    <!-- End of main container -->

    <script>
      function myFunction(){
        var x = document.getElementById("admin_new_access_code");
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
      function validateForm1(){
        let fname = document.forms["editAdmin"]["admin_first_name"].value;
        let lname = document.forms["editAdmin"]["admin_last_name"].value;
        let adminMobile = document.forms["editAdmin"]["admin_mobile_number"].value;
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

    <script>
      function validateForm2(){
        let userPass = document.forms["editAdminPass"]["admin_new_access_code"].value;
        if (userPass.length < 8){
          swal({
            title: "Failed to change!!",
            text: "Use a strong password with minimum of 8 characters",
            button: "Ok",
          });
          return false;
        }
      }
    </script>

  </body>
</html>
