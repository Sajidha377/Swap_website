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

    <title>Home | Swap</title>

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

<!-- Banner -->
     <div class="small-container">
       <div class="row">
         <div class="col-6 index">
           <h1>SWAP</h1>
           <h3>products at your own ease </h3>
           <h5>Do you have a surplus of unused products? Don’t be bothered, find your customer and swap it here.</h5>
         </div>

         <div class="col-6 index">
           <img src="images/banner1.png" alt="banner">
         </div>
       </div>
     </div>
<!-- End of Banner -->

<!-- Description -->
    <div class="small-container">
      <div class="row">
        <div class="col-3 index">
          <h5>EXCHANGE YOUR PRODUCTS</h5>
          <p>Exchange your unused products for items that would be of more useful to you.</p>
        </div>
        <div class="col-3 index">
          <h5>RECYCLE</h5>
          <p>Be a part of making a greener future.</p>
        </div>
        <div class="col-3 index">
          <h5>SAVE MONEY</h5>
          <p>Completely cut off product cost. Get products without spending money.</p>
        </div>
      </div>
    </div>
<!-- End of Description -->

<!-- Tabs -->
    <div class="small-container">
      <div class="row">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> <a href="#"><i class=" fas fa-solid fa-laptop"></i> <br> Electronics</a> </button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <a href="#"><i class="fas fa-solid fa-book"></i> <br>  Books</a> </button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <a href="#"><i class="fas fa-solid fa-couch"></i> <br> Furnitures</a> </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/electronics.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Electronics -->
                <?php

                  $keyword = 'electronics';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount1 = mysqli_num_rows($result);

                 ?>
                <p class="text-muted"><?php echo $rowcount1; ?> posts</p>
                Do you have a surplus of unused electronic products? Then why not take a chance to swap it for another product that will be more useful for you. Get products you need without spending any money. Exchange your unused electronic products  and promote to reduce e-waste. Find you best trade through SWAP easily and quickly. Swap your electronics for equally worthy products by posting your product in our website and  your trade buddy will find you easily. <br>
                <a href="electronics.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/books.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Books -->
                <?php

                  $keyword = 'books';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount2 = mysqli_num_rows($result);

                 ?>
                <p class="text-muted"><?php echo $rowcount2; ?> Posts</p>
                 SWAP allows you to give away books you no longer need for books you want. Create an account and add the books you want to give away and find other traders who gives away books which might be of your interest. Exchange knowledge and entertainment by exchanging books through SWAP. You can find traders from around the country easily.<br>
                <a href="books.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/furnitures.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Furnitures -->
                <?php

                  $keyword = 'furnitures';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount3 = mysqli_num_rows($result);

                 ?>
                <p class="text-muted"><?php echo $rowcount3; ?> posts</p>
                Do you have a pair of kitchen stools that you no longer use? Exchange it via SWAP and find something more useful for you. Furnitures can be refurbished, therefore giving away few old chairs in exchange for a coffee table and refurbishing it is totally worth it. Why worrying about cost of paying for storage units when you can now give away things you no longer need. <br>
                <a href="furnitures.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End of tabs -->

<!-- About Swap -->
    <div class="small-container">
      <div class="row">
        <div class="col-5 index">
          <h5>About Us</h5>
          <p>SWAP is a gateway to get products you want for free of charge. You only need to give away products you no longer need and get products you really need. Post your unused products in our website and traders will find their way to you offering their products they might want to exchange with you. Find the product you want now!</p>
        </div>
        <div class="col-4 index">
          <img src="images/about_us.png" alt="">
        </div>
      </div>
    </div>
<!-- End of About Swap -->

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
<!-- End of Container -->


  </body>
</html>
