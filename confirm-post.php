<?php
  require("validate-admin.php");

  //connect to database server
  require("db_connection.php");

  require("code_lib.inc.php");

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

    <title>Confirm Post | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("dashboard-header.php");
      ?>



        <div class="row 2">

          <div class="col-10 confirm" style="margin-top:20px;">
            <h2>Confirm Post</h2>
          </div>

          <div class="col-10 confirm">
            <?php
              if(isset($_SESSION['status'])){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:20px;">'
                .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                unset($_SESSION['status']);
              }
            ?>
          </div>

          <div class="row" style="align-items:stretch; justify-content:flex-start;">

            <!-- Carousel -->
            <?php
             include("dashboard-carousel.php");
            ?>

            <div class="col-lg-8 col-md-8">
              <?php

                $keyword = 'no';

                //building the dynamic SQL command
                $sql = "select * from product where confirmation like '%$keyword%'";

                //executing the SQL command
                $rs = $mysqli->query($sql);

                while($row = mysqli_fetch_assoc($rs)){

              ?>

              <form class="form" action="confirm-post2.php" method="post" enctype="multipart/form-data">
              <div class="col-12 confirm">
                <div class="alert alert-dismissible fade show" role="alert">
                  <strong><h5 id="user_id"><?php echo $row['user_id']; ?></h5></strong>
                  <div class="row 3">
                    <div class="col-4">
                      <img src="images/large/<?php echo $row['picture']; ?>" alt="">
                    </div>

                    <div class="col-8 confirm">
                        <table>
                          <tbody>
                              <tr>
                                <th>Product ID </th>
                                <th>-</th>
                              <td> <input type="text" name="product_id" value="<?php echo $row['product_id']; ?> "> </td>
                            </tr>
                            <tr>
                              <th>Product Name</th>
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
                              <td><?php echo $row['description']; ?></td>
                            </tr>
                            <tr>
                              <th>Category</th>
                              <th>-</th>
                              <td><?php echo $row['category']; ?></td>
                            </tr>
                            <tr>
                              <th>Confirm</th>
                              <th>-</th>
                              <td> <select class="form-select" name="confirmation">
                                <option disabled value="<?php echo $row['confirmation']; ?>"><?php echo $row['confirmation']; ?></option>
                                <option value="Yes">Yes</option>
                              </select></td>
                            </tr>
                          </tbody>
                        </table>

                    </div>
                    <!-- End of col-8 -->
                  </div>
                  <!-- End of row 3 -->

                  <button type="submit" class="btn btn-success" data-bs-dismiss="alert" aria-label="Close">Save</button></a>
                  <a href="admin-delete-post.php?a=<?php echo $row['product_id']; ?>"><button type="button" class="btn btn-danger" data-bs-dismiss="alert" aria-label="Close">Delete</button></a>
                  </form>

                </div>
              </div>
              <!-- End of col-12 -->

              <?php

               }

              ?>

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

                <input type="hidden" name="" value="<?php echo $row['admin_id']; ?>">

                <?php

                 }

                ?>


            </div>
            <!-- End of col-lg-8 -->
          </div>
          <!-- End of row -->

        </div>
        <!-- End of row 2 -->

    </div>
    <!-- End of main container -->


  </body>
</html>
