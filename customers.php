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

    <title>Customers | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("dashboard-header.php");
      ?>



        <div class="row 2">

          <div class="col-10 customer" style="margin-top:20px;">
            <h2>Customers</h2>
          </div>

          <div class="row" style="align-items:stretch; justify-content:flex-start;">

            <!-- Carousel -->
            <?php
             include("dashboard-carousel.php");
            ?>

            <div class="col-lg-8 col-md-8">
              <?php

                $limit = 5;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                //building the dynamic SQL command
                $sql = "select * from user LIMIT $start, $limit";

                $sql2 = $mysqli->query("SELECT count(user_id) AS user_id FROM user");
                $proCount = $sql2->fetch_all(MYSQLI_ASSOC);
                $total = $proCount[0]['user_id'];
                $pages = ceil($total / $limit);

                $Previous = $page - 1;
                $Next = $page + 1;

                //executing the SQL command
                $rs = $mysqli->query($sql);

                while($row = mysqli_fetch_assoc($rs)){

              ?>

              <div class="col-12 customer">
                <div class="alert alert-dismissible fade show" role="alert">
                  <div class="row 3">
                    <div class="col-4">
                      <i class="fas fa-solid fa-user fa-5x"></i>
                    </div>
                    <div class="col-8 confirm">
                        <table>
                          <tbody>
                            <tr>
                              <th>User ID</th>
                              <th>-</th>
                              <td><?php echo $row['user_id']; ?></td>
                            </tr>
                            <tr>
                              <th>Name</th>
                              <th>-</th>
                              <td><?php echo $row['user_first_name']; ?> &nbsp; <?php echo $row['user_last_name']; ?></td>
                            </tr>
                            <tr>
                              <th>Mobile</th>
                              <th>-</th>
                              <td><?php echo $row['mobile_number']; ?></td>
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

              <!-- Pagination -->
              <div class="row">
                <div class="col-10 customer">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item">
                        <a class="page-link" aria-label="Previous" href="customers.php?page=<?= $Previous; ?>">&larr; Previous</a>
                      </li>
                      <?php for($i = 1; $i <= $pages; $i++) : ?>
                         <li class="page-item"><a class="page-link" href="customers.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                     <?php endfor; ?>

                      <li class="page-item">
                        <a class="page-link" aria-label="Next" href="customers.php?page=<?= $Next; ?>">Next &rarr;</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- End of row -->
              <!-- End of Pagination -->


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
