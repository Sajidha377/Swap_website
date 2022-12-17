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

    <title>Privacy Policy | Swap</title>
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


            <div class="col-12 policy">
              <img src="images/policy-banner.jpg" alt="">
              <h1>The choice is yours - <br>Save it or Waste it</h1>
              <p class="banner">Be the change you want to see in the world.</p>
            </div>
            <!-- End of col-12 -->

            <div class="small-container">
              <div class="col-12 policy">

                <h2>Privacy Policy</h2>

              </div>
              <!-- End of col-12 -->
            </div>
            <!-- End of small-container -->


            <div class="small-container">

              <div class="col-12 policy">

                <h6>Collection</h6>
                <p>Information posted on ikman.lk is publicly available. If you choose to 
                provide us with personal information, you are consenting to the transfer 
                and storage of that information on our servers. We collect and store the 
                following personal information:</p>

                <ul>
                  <li>Email address and contact information</li>
                  <li>Computer sign-on data</li>
                </ul>

                <h6>Use</h6>
                <p>We use users' personal information to:</p>

                <ul>
                  <li>Provide our services</li>
                  <li>Resolve disputes and troubleshoot problems</li>
                  <li>Encourage safe trading and enforce our policies</li>
                  <li>Customize users experience, measure interest in our services</li>
                  <li>Improve our services and inform users about services and updates</li>
                </ul>

                <h6>Cookie policy</h6>
                <p><strong>What are cookies?</strong></p>
                <p>Cookies are text files containing small amounts of information that are 
                downloaded to your computer or mobile device when you visit a site and allow
                a site to recognize your device. Websites use cookies to improve your browsing
                experience, for example, to keep you signed in, remember your site preferences, 
                and serve you relevant content.</p>

                <p><strong>Cookies and personal data</strong></p>
                <p>All data stored in your browser can be cleared by clearing your browser cache.</p>
                <p>Types of cookies we use:</p>
                <ul>
                  <li>Session cookies: required to operate our service.</li>
                </ul>

                <h6>Disclosure</h6>
                <p>We don't sell or rent users' personal information to third parties for their marketing 
                  purposes without users' explicit consent. We may disclose personal information to respond 
                  to legal requirements, enforce our policies, respond to claims that a posting or other 
                  content violates other's rights, or protect anyone's rights, property, or safety.</p>

                <h6>Security</h6>
                <p>We use lots of tools (encryption, passwords, physical security) to protect your personal
                information against unauthorized access and disclosure. All personal electronic details will 
                be kept private by the Service except for those that you wish to disclose. It is unacceptable 
                to disclose the contact information of others through the Service. If you violate the laws of 
                your country of residence and/or the terms of use of the Service you forfeit your privacy 
                rights over your personal information.</p>

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
