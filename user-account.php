<?php
  require("validate-user.php");

  //connecting the database
  require("db_connection.php");
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

    <title>My Account | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
        <div class="container">

          <!-- Header -->
          <?php
            include("header2.php");
           ?>

          <div class="container md">

             <div class="row 1">
               <div class="col-10 account">
                 <h2>Profile</h2>
               </div>
               <!--End of col-10 account-->
             </div>
             <!-- End of row 1 -->

             <div class="row 2">
               <div class="col-10 account" style="background-color:#fff;">
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

             <div class="row 3">
               <div class="col-10 account" style="background-color:#f4f4f4;">
                 <div class="row 4" style="align-items:stretch; justify-content:center;">
                   <div class="col-2 account">
                     <ul>
                       <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Account Details</a> </li>
                       <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Account</a> </li>
                       <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Change Password</a> </li>
                       <li> <a href="add-product1.php">Post a Product</a> </li>
                       <li> <a href="logout.php">  <i class="fas fa-sign-out-alt"></i> Log Out</a> </li>
                     </ul>
                     <!-- End of UL -->
                   </div>
                   <!-- End of col-2 -->


                   <!-- Display Products -->
                   <div class="col-8 account" style="display:flex; flex-basis:60%; flex-wrap:wrap;">
                     <div class="row 5">

                       <?php
                          $user_id = $_SESSION['user_id'];
                         $keyword = 'yes';

                         //building the dynamic SQL command
                         $sql = "select * from product where confirmation like '%$keyword%' and user_id='$user_id'";

                         //executing the SQL command
                         $rs = $mysqli->query($sql);

                         while($row = mysqli_fetch_assoc($rs)){

                       ?>

                         <div class="card mb-3" style="width:100%;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="images/large/<?php echo $row['picture']; ?>" alt="">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <table>
                                 <tbody>
                                   <tr>
                                     <th>Name</th>
                                     <th>-</th>
                                     <td><?php echo $row['product_name']; ?></td>
                                   </tr>
                                   <tr>
                                     <th>Condition</th>
                                     <th>-</th>
                                     <td><?php echo $row['product_condition']; ?></td>
                                   </tr>
                                   <tr>
                                     <th>Description</th>
                                     <th>-</th>
                                     <td stlye="width:100%; overflow:hidden;"><?php echo $row['description']; ?></td>
                                   </tr>
                                   <tr>
                                     <th>Category</th>
                                     <th>-</th>
                                     <td><?php echo $row['category']; ?></td>
                                   </tr>
                                 </tbody>
                               </table>
                                 <table style="width:100%;">
                                   <tbody>
                                     <tr style="float:right;">
                                       <th><button class="editbtn" type="button" name="button" 
                                       data-id="<?php echo $row['product_id']; ?>" style="cursor:pointer;">
                                       Edit</button></th>
                                     </tr>
                                   </tbody>
                                 </table>


                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of card mb-3 -->

                        <?php
                          }
                         ?>

                     </div>
                     <!-- End of row 5 -->
                   </div>
                   <!-- End of col-8 -->
                   <!-- End of display products -->

                 </div>
                 <!-- End of row 4 -->
               </div>
               <!-- End of col-10 -->
             </div>
             <!-- End of row 3 -->
             <!-- ***********************************End of display products************************************** -->

             <!-- Edit products modal -->
             <div class="modal fade post" id="proModal" role="dialog" >
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title">Edit Product Details</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body-post">
                   </div>
                   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   </div>
                 </div>
               </div>
             </div>



             <!-- My Account Modal -->
             <?php
              $user_id = $_SESSION['user_id'];

              //building the dynamic SQL command
              $sql = "select * from user where user_id='$user_id'";

              //executing the SQL command
              $rs = $mysqli->query($sql);


              if(mysqli_num_rows($rs) > 0){

                //fetching the records
                $row = mysqli_fetch_assoc($rs);
             ?>

             <!-- My Account Modal -->
             <div class="modal fade 1" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Account Details</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body 1">
                     <table>
                       <tbody>
                         <tr>
                           <th>Email -</th>
                           <td><?php echo $row['user_id']; ?></td>
                         </tr>
                         <tr>
                           <th>First Name -</th>
                           <td><?php echo $row['user_first_name']; ?></td>
                         </tr>
                         <tr>
                           <th>Last Name -</th>
                           <td><?php echo $row['user_last_name']; ?></td>
                         </tr>
                         <tr>
                           <th>Mobile Number -</th>
                           <td><?php echo $row['mobile_number']; ?></td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   </div>
                 </div>
               </div>
             </div>
             <!-- End of My Account modal -->


             <!-- Edit Account Modal -->
             <div class="modal fade 2" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Account Details</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body 2">
                     <!-- Form -->
                     <form name="editAcc" onsubmit="return validateForm1()" id="editUser" action="edit-user-account.php" method="post" enctype="multipart/form-data" style="color:#02444b; font-size:14px; font-weight:600;">
                       <div class="mb-1">
                         <label for="exampleInputFirstName" class="form-label">First Name</label> <span style="color:#ff0000">*</span>
                         <input type="text" value="<?php echo $row['user_first_name']; ?>" class="form-control" id="user_first_name" name="user_first_name" aria-describedby="emailHelp" required style="font-size:14px;">
                       </div>
                       <div class="mb-1">
                         <label for="exampleInputSecondName" class="form-label">Last Name</label> <span style="color:#ff0000">*</span>
                         <input type="text" value="<?php echo $row['user_last_name']; ?>" class="form-control" id="user_last_name" name="user_last_name" aria-describedby="emailHelp" required style="font-size:14px;">
                       </div>
                       <div class="mb-1">
                         <label for="exampleInputEmail1" class="form-label">Email</label> <span style="color:#ff0000">*</span>
                         <input type="email" value="<?php echo $row['user_id']; ?>" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp" required style="font-size:14px;">
                       </div>

                       <div class="mb-1">
                         <label for="exampleInputMobile" class="form-label">Mobile Number</label> <span style="color:#ff0000">*</span>
                         <input type="text" value="<?php echo $row['mobile_number']; ?>" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="emailHelp" required style="font-size:14px;">
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
             <!-- End of Edit account modal -->

             <?php
               }
             ?>


             <!-- Change Password Modal -->
            <div class="modal fade 2" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body 3">
                    <form name="editPass" onsubmit="return validateForm2()" id="changePassword" class="form" action="change-password.php" method="post" enctype="multipart/form-data" style="color:#02444b; font-size:14px; font-weight:600;">

                      <div class="mb-1">
                        <label for="exampleAccessCode" class="form-label">Old Password</label> <span style="color:#ff0000">*</span>
                        <input disabled type="password" value="<?php echo $row['access_code']; ?>" class="form-control" id="access_code" name="access_code" aria-describedby="emailHelp" placeholder="Old Password" style="font-size:13px;">
                      </div>

                      <!-- <input type="hidden" value="<?php echo $row['user_id']; ?>" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp"> -->

                      <div class="mb-1">
                        <label for="exampleAccessCode" class="form-label">New Password</label> <span style="color:#ff0000">*</span>
                        <input type="password" value="" class="form-control" id="new_access_code" name="new_access_code" aria-describedby="emailHelp" placeholder="New Password" style="font-size:13px;">
                        <span class="eye" onclick="myFunction()">
                          <i id="hide1" class="fas fa-solid fa-eye"></i>
                          <i id="hide2" class="fas fa-solid fa-eye-slash"></i>
                        </span>
                      </div>

                      <button type="submit" class="btn btn-success" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Change Password</button>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- End of container md -->



          <!-- Footer -->
          <?php
              include("footer2.php");
          ?>

        </div>
    <!-- End of Main Container -->

    <script>
      function myFunction(){
        var x = document.getElementById("new_access_code");
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


    <script type="text/javascript">
      $(document).ready(function(){
        $('.editbtn').click(function(){

          var errorList="";
          var product_id = $(this).data('id');
          $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {product_id: product_id},
            success: function(response){
              $('.modal-body-post').html(response);
              $('#proModal').modal('show');
            }
          });
        });
      });
    </script>

    <script>
      function validateForm1(){
        let fname = document.forms["editAcc"]["user_first_name"].value;
        let lname = document.forms["editAcc"]["user_last_name"].value;
        let userMobile = document.forms["editAcc"]["mobile_number"].value;
        if (fname.length > 20){
          swal({
            title: "Failed to update!!",
            text: "First Name must be within 20 characters",
            button: "Ok",
          });
          return false;
        }
        else if (lname.length > 20){
          swal({
            title: "Failed to update!!",
            text: "Last Name must be within 20 characters",
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

    <script>
      function validateForm2(){
        let userPass = document.forms["editPass"]["new_access_code"].value;
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
