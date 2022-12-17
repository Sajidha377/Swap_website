<?php
  session_start();

  //connect to database server
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

    <title>Furnitures | Category | Swap</title>
  </head>
  <body>

<!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
        if(isset($_SESSION['user_id'])){
          include("header2.php");
        }
        else{
          include("header.php");
        }

       ?>

    <!-- Container md -->
    <div class="container md">
      <div class="row">
        <div class="col-10 category">
          <div class="col-4 category">
            <h2>FURNITURES</h2>
          </div>
          <div class="col-4 category">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-10 category">
            <div class="col-4 category">
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Furnitures</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-10 category">

            <?php
              $keyword = 'yes';
              $keyword1 = 'furnitures';

              $result = $mysqli->query("SELECT * FROM user INNER JOIN product ON user.user_id = product.user_id WHERE confirmation LIKE '%$keyword%' and category LIKE '%$keyword1%'  ORDER BY product_id ASC");

              $rowcount = mysqli_num_rows($result);

             ?>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <?php
                  for ($i=1; $i<=$rowcount; $i++) {
                    $row = mysqli_fetch_array($result);
                 ?>

                 <?php

                    if($i == 1){

                  ?>

                <div class="carousel-item active">
                  <img src="images/large/<?php echo $row['picture']; ?>" class="d-block w-100" alt="...">
                </div>

                <?php
                  }
                  else{
                    ?>

                <div class="carousel-item">
                  <img src="images/large/<?php echo $row['picture']; ?>" class="d-block w-100" alt="...">
                </div>

                <?php
                  }
                ?>

              <?php
                }
               ?>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


        </div>
     </div>

     <div class="row">
       <div class="col-10 category">

         <?php

            $keyword = 'yes';
            $keyword1 = 'furniture';

            $limit = 5;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;

           //building the dynamic SQL command
           $sql = "SELECT * FROM user INNER JOIN product ON user.user_id = product.user_id WHERE confirmation LIKE '%$keyword%' and category LIKE '%$keyword1%' LIMIT $start, $limit";

           $sql2 = $mysqli->query("SELECT count(product_id) AS product_id FROM product");
           $proCount = $sql2->fetch_all(MYSQLI_ASSOC);
           $total = $proCount[0]['product_id'];
           $pages = ceil($total / $limit);

           $Previous = $page - 1;
           $Next = $page + 1;

           //executing the SQL command
           $rs = $mysqli->query($sql);

           while($row = mysqli_fetch_assoc($rs)){
             $timestamp = $row['createdAt'];
         ?>

        <div class="col-10 category1">
          <div class="col-5 category">
            <img src="images/large/<?php echo $row['picture']; ?>" alt="">
          </div>
          <div class="col-5 category">
            <table>
              <tbody>
                <tr>
                  <td> <h5><?php echo $row['product_name']; ?></h5> </td>
                </tr>
                <tr>
                  <th>Condition</th>
                  <th>-</th>
                  <td><?php echo $row['product_condition']; ?></td>
                </tr>
                <tr>
                  <th>For trade by</th>
                  <th>-</th>
                  <td><?php echo $row['user_first_name']; ?> <?php echo $row['user_last_name']; ?></td>
                </tr>
                <tr>
                  <th>Posted on</th>
                  <th>-</th>
                  <td><?php echo date('Y-m-d', strtotime($timestamp)); ?></td>
                </tr>
                <tr>
                  <td style="visibility:hidden;"><?php echo $row['user_id']; ?></td>
                </tr>
                <tr>
                <td><button class="viewbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" name="button"
                  data-id="<?php echo $row['product_id']; ?>">View</button> </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End of col-5 -->
        </div>
        <!-- End of col-10 category1 -->

        <?php

         }

        ?>

       </div>
       <!-- End of col-10 category -->
     </div>
     <!-- End of row -->

     <div class="row">
       <div class="col-10 category">
         <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-end">
             <li class="page-item">
               <a class="page-link" aria-label="Previous" href="furnitures.php?page=<?= $Previous; ?>">&larr; Previous</a>
             </li>
             <?php for($i = 1; $i <= $pages; $i++) : ?>
                <li class="page-item"><a class="page-link" href="furnitures.php?page=<?= $i; ?>"><?= $i; ?></a></li>
            <?php endfor; ?>

             <li class="page-item">
               <a class="page-link" aria-label="Next" href="furnitures.php?page=<?= $Next; ?>">Next &rarr;</a>
             </li>
           </ul>
         </nav>
       </div>
     </div>
    </div>
    <!-- End of container md -->

    <!-- View post details -->
    <div class="modal fade post" id="proModal" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Product Details</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body-post">
            </div>
          </div>
        </div>
      </div>

    <!-- Footer -->
    <?php
      if(isset($_SESSION['user_id'])){
        include("footer2.php");
      }
      else{
        include("footer.php");
      }
    ?>

    </div>
<!-- End of Main Container -->

<script type="text/javascript">
  $(document).ready(function(){
    $('.viewbtn').click(function(){

      var errorList="";
      var product_id = $(this).data('id');
      $.ajax({
        url: 'ajaxfile1.php',
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

  </body>
</html>
