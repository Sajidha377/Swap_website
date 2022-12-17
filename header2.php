<?php

  //connecting the database
  require("db_connection.php");
?>

<!-- Menu Bar -->
      <div class="row" style="background:linear-gradient(#f4f4f4, #fff);">
        <div class="topbar">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src="images/Logo.png" alt="Logo"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" style="color:#02444b;" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catgories
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="electronics.php">Electronics</a></li>
                    <li><a class="dropdown-item" href="books.php">Books</a></li>
                    <li><a class="dropdown-item" href="furnitures.php">Furnitures</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="contact-us.php">Contact Us</a>
                </li>
              </ul>
              <a href="" class="btn" style="border:0px;" data-bs-toggle="modal" data-bs-target="#exampleModal">My Account</a>
              <a href="add-product1.php" class="btn">Post a Product</a>

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

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Logged In</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <table>
                          <tbody>
                            <tr>
                              <th>Name - </th>
                              <td><?php echo $row['user_first_name']; ?> <?php echo $row['user_last_name']; ?></td>
                            </tr>
                            <tr>
                              <td> <a href="user-account.php">View Account</a> </td>
                            </tr>

                          </tbody>
                        </table>                        

                      </div>
                      <div class="modal-footer">
                        <a href="user-account.php">Edit Account</a>
                        <a href="logout.php">  <i class="fas fa-sign-out-alt"></i> Log Out</a>
                      </div>
                    </div>
                  </div>
                </div>

                 <?php
                    }
                  ?>


            </div>
          </div>
        </nav>
      </div>
    </div>
<!-- End of Menu bar -->
