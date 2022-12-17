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

    <title>About Us | Swap</title>
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


          <div class="small-container">
            <div class="row 1">
              <div class="col-12 about">
                <h1>We're on a mission to <br> promote Eco-friendly future</h1>
                <p>Be a part of making a greener future with us. SWAP website intends <br> to promote upcycling of unused products. Swap products you no longer <br> need for ones you need.</p>
              </div>
              <!-- End of col-12 -->
            </div>
            <!-- End of row 1 -->
          </div>
          <!-- End of small-container -->

          <div class="small-container">
            <div class="col-12 about">
              <div class="row 2" style="align-items:flex-start;">
                <div class="col-lg-6 col-md-6" style="margin-top:20px;">
                  <img src="images/about.jpg" alt="" style="width:100%; height:auto;">
                </div>
                <!-- End of col-lg-6 -->

                <div class="col-lg-6 col-md-6" style="margin-top:20px;">
                  <div class="row 3">
                    <img src="images/about2.jpg" alt="" style="width:100%; height:250px;">

                    <div class="card" style="width: 13rem;">
                      <div class="card-body">
                        <h3 class="card-title">2022</h3>
                        <p class="card-subtitle mb-2 text-muted">Founded</p>
                      </div>
                    </div>

                    <div class="card" style="width: 13rem;">
                      <div class="card-body">
                        <h3 class="card-title">5</h3>
                        <p class="card-subtitle mb-2 text-muted">Dedicated members</p>
                      </div>
                    </div>

                    <div class="card" style="width: 13rem;">
                      <div class="card-body">
                        <h3 class="card-title">20+</h3>
                        <p class="card-subtitle mb-2 text-muted">Loyal customers</p>
                      </div>
                    </div>

                    <div class="card" style="width: 13rem;">
                      <div class="card-body">
                        <h3 class="card-title">20+</h3>
                        <p class="card-subtitle mb-2 text-muted">Posts</p>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- end of col-6 -->
              </div>
              <!-- End of row 3 -->
            </div>
            <!-- End of col-12 -->
          </div>
          <!-- End of small-container -->

          <div class="small-container">
            <div class="col-12 about">
              <div class="row 4">
                <div class="col-lg-6 col-md-6" style="margin-top:10px;">
                  <h3 style="color:#02444b; font-weight:600; text-align:left; margin-left:15%;">Our Mission</h3>
                  <p style="display:inline-block; text-align:left; margin-left:15%; margin-right:15%;">We are focused on bring up this new swapping concept to Sri Lanka to promote upcycling of products and reduce environmental pollution. Common products like electronics, books and furnitures can be reused as long as it serves the purpose. Therefore, when one has these products unused at home, why not exchange it for something that would be useful to them. <br> <br> We make way for people to get what they want via SWAP without having to spend money. All you have to do is giveaway things you don't use and get things want. Join us and be a part of our mission.</p>
                </div>
                <!-- End of col-6 -->
                <div class="col-lg-6 col-md-6" style="background-color:#02444b;">
                  <h3 style="color:#fff; font-weight:600; margin-top:8%; text-align:left; margin-left:15%;">Our Values</h3>

                  <ul style="color:#fff; font-size:13px; margin-left:15%; margin-right:15%; list-style-type:none; margin-bottom:30px;">
                    <li style="text-align:left; padding:10px;"><span style="margin-left:-35px; margin-right:10px;"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i></span> Reliable service</li>
                    <li style="text-align:left; padding:10px;"><span style="margin-left:-35px; margin-right:10px;"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i></span>Dedicated team aiming to promote Upcycling</li>
                    <li style="text-align:left; padding:10px;"><span style="margin-left:-35px; margin-right:10px;"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i></span>Provide safe and secure online platform</li>
                    <li style="text-align:left; padding:10px;"><span style="margin-left:-35px; margin-right:10px;"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i></span>Daily hardwork</li>
                    <li style="text-align:left; padding:10px;"><span style="margin-left:-35px; margin-right:10px;"><i class="fa fa-check-circle fa-lg" aria-hidden="true"></i></span>Value customer's convenience</li>
                  </ul>
                </div>
                <!-- End of col-6 -->
              </div>
              <!-- End of row 4 -->
            </div>
            <!-- End of col-12 -->
          </div>
          <!-- End of small-container -->


          <div class="small-container">
            <div class="col-12 about">

              <div class="row 6">
                <div class="col-lg-6 col-md-6">
                  <img src="images/about3.jpg" alt="" style="width:100%; height:auto;">
                </div>
                <!-- End of col-6 -->

                <div class="col-lg-6 col-md-6">
                <h3 style="color:#02444b; font-weight:600; margin-top:10%; text-align:left; margin-left:15%;">Our Vision</h3>
                  <p style="text-align:left; margin-left:15%; margin-right:15%;">We provide the greatest online gateway
                  for customers to find traders of their similar interest and swap products conveniently. We want to show you how
                  second-hand can be. SWAP is open to everyone who believe that quality products should live
                  live long. <br> <br> Contribute to protect the environment, by recycling products. Strengthen your ties
                  with your local community by exchanging products. Learn the value of upcycling and pass it to your younger
                  generation for a greener future.</p>
                </div>
                <!-- End of col-6 -->
              </div>
              <!-- End of row 6 -->

            </div>
            <!-- End of col-12 -->
          </div>
          <!-- End of small-container -->

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

  </body>
</html>
