<?php
  //connecting the database
  require("db_connection.php");
?>
<div class="row 1 admin">
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <img src="images/logo.png" alt="Logo">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

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

            <li class="nav-item" style="color:#02444b;">
              <strong>Admin &nbsp; - &nbsp;</strong><?php echo $row['admin_first_name']; ?> &nbsp; <?php echo $row['admin_last_name']; ?>
            </li>
            <?php
               }
             ?>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php"> <i class="fas fa-tachometer-alt fa-2x" style="margin-right:15px;"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="confirm-post.php"> <i class="fa fa-plus-square fa-2x" aria-hidden="true" style="margin-right:15px;"></i></i>Confirm Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customers.php"> <i class="fas fa-solid fa-users fa-2x" style="margin-right:15px;"></i>Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php"><i class="fa fa-cogs fa-2x" aria-hidden="true" style="margin-right:15px;"></i>Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin-logout.php"><i class="fas fa-sign-out-alt fa-2x" style="margin-right:15px;"></i></i>Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- End of row1 -->
