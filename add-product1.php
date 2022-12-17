<?php
  require("validate-user.php");
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

    <title>Add Product | Swap</title>
  </head>
  <body>

    <!-- Main container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("header2.php");
      ?>

      <!-- Container md -->
      <div class="container md">

        <div class="row 1">
          <div class="col-10 product" style="background-color:#fff;">
          <h2>Post a Product</h2>
          </div>
          <!-- End of col-10 product -->
        </div>
        <!-- End of row 1 -->

        <div class="row">
          <div class="col-10 product" style="background-color:#fff;">
            <?php
              if(isset($_SESSION['status'])){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:20px;">'
                .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                unset($_SESSION['status']);
              }
            ?>
          </div>
        </div>

        <div class="row 2">
          <div class="col-11 product">

            <div class="col-10 product">

              <div class="col-10 product1">
                <h6>Product Details</h6>
              </div>
              <!-- End of col-10 product1 -->

              <div class="col-10 product2">
                <form class="form row g-3" action="add-product2.php" method="post" enctype="multipart/form-data" id="form1">

                  <div class="col-md-6">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required>
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-md-6">
                    <label for="productCondition" class="form-label">Condition</label>
                    <select class="form-select" name="product_condition" required>
                      <option selected value="New">New</option>
                      <option value="Very Good">Very Good</option>
                      <option value="Good">Good</option>
                      <option value="Satisfactory">Satisfactory</option>
                    </select>
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" cols="80" required></textarea>
                  </div>
                  <!-- End of col-12 -->



                  <div class="col-md-6"  style="display:flex; display:inline-block;">
                    <label for="productName" class="form-label">Add Image</label>
                    <input type="file" class="form-control" name="picture" id="picture" value="" required onchange="previewImage(this.files[0])">
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-md-6">
                    <div class="image-placeholder">
                      <img src="" alt="" style="min-width:200px; height:200px;" onerror=this.src="https://via.placeholder.com/150">
                    </div>
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category" required>
                      <option selected value="Electronics">Electronics</option>
                      <option value="Books">Books</option>
                      <option value="Furnitures">Furnitures</option>
                    </select>
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-md-6">
                    <select class="form-select" name="confirmation" style="visibility:hidden;">
                      <option selected value="No">No</option>
                      <option value="Yes">Yes</option>
                    </select>
                  </div>
                  <!-- End of col-md-6 -->

                  <input type="email" style="visibility:hidden;" value="<?php echo $_SESSION['user_id']; ?>" class="form-control" id="user_id" name="user_id">

                </form>
                <!-- End of form -->
              </div>
              <!-- End of col-10 product2 -->

            </div>
            <!-- End of col-10 product -->

            <div class="col-10 product">

              <div class="col-10 product1">
                <h6>Contact Details</h6>
              </div>
              <!-- End of col-10 product1 -->

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

              <div class="col-10 product2">
                <table>
                  <tbody>
                    <tr>
                      <th>Name</th>
                    </tr>
                    <tr>
                      <td><?php echo $row['user_first_name']; ?> <?php echo $row['user_last_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                    </tr>
                    <tr>
                      <td><?php echo $row['user_id']; ?></td>
                    </tr>
                    <tr>
                      <th>Mobile Number</th>
                    </tr>
                    <tr>
                      <td><?php echo $row['mobile_number']; ?></td>
                    </tr>
                  </tbody>
                </table>
                <!-- End of table -->
              </div>
              <!-- End of col-10 product2 -->

               <?php
                    }
                  ?>

            </div>
            <!-- End of col-10 product -->

            <div class="col-10 product">
              <div class="col-md-6 product">
                <input  class="postproduct form-control" type="submit" name="submit" id="submit" value="Post Product" form="form1">
                <input class="postproduct form-control" type="reset" name="cancel" value="Cancel" id="reset" form="form1">
              </div>
              <!-- End of col-md-6 -->
            </div>
            <!-- End of col-10 product -->

          </div>
          <!-- End of col-11 product -->
        </div>
        <!-- End of row 2 -->

      </div>
      <!-- End of container md -->

      <!-- Footer -->
      <?php
        include("footer2.php");
      ?>

    </div>
    <!-- End of main container -->

    <script type="text/javascript">
      function previewImage(image){

        let reader = new FileReader();

        reader.readAsDataURL(image);
        reader.onload = function(event){
          if(this.readyState == 2){
            document.querySelector(".image-placeholder img").src = event.target.result;
          }
        }
      }
    </script>

  </body>
</html>
