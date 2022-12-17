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

    <title>Help & Support | Swap</title>
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


            <div class="col-12 hp">
              <img src="images/hp-banner.jpg" alt="">
              <h1>NATURE <br> is the FUTURE</h1>
              <p class="banner">Become a part of SWAP and join hands with us <br>
               to accomplish the mission of creating an eco-friendly future.</p>
            </div>
            <!-- End of col-12 -->
          
            <div class="small-container">
              <div class="col-12 hp">
                <h2>Help & Support</h2>
              </div>
            </div>

            <div class="small-container">
              <div class="col-12 hp">
                
              <div class="row" style="display:flex; align-items:flex-start;">
                <div class="col-4" style="margin-top:5%;">
                  <div id="simple-list-example" class="d-flex flex-column simple-list-example-scrollspy">
                    <a class="p-1 rounded" href="#simple-list-item-1">SWAP process</a>
                    <a class="p-1 rounded" href="#simple-list-item-2">About Post</a>
                    <a class="p-1 rounded" href="#simple-list-item-3">Edit Post details</a>
                    <a class="p-1 rounded" href="#simple-list-item-4">Security and Verification</a>
                  </div>
                </div>
                <!-- End of col-4 -->

                <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    
                  
                  <div class="accordion accordion-flush" id="accordionFlushExample1">
                  <h4 id="simple-list-item-1">SWAP process</h4>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          How SWAP works?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          <ol>
                            <li>Create an Account for you.</li>
                            <li>Use "Post a Product" button to post a product you want to exchange. Make sure your product belongs to one
                              of the category mention in SWAP.
                            </li>
                            <li>After verification your post will be posted in the website and available in your profile.</li>
                            <li>A trade buddy who finds your product interesting for exchange will contact you using your contact details.</li>
                            <li>Negotiate your offer and see if the exchange deal is of equal worth.</li>
                            <li>If you find your best deal, meet your trader and exchnage your products.</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 1 -->
                  </div>
                  <!-- SWAP process -->

                  
                  
                  <div class="accordion accordion-flush" id="accordionFlushExample2">
                  <h4 id="simple-list-item-2">About Post</h4>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          How to post your products? (Step by step)
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                          <ol>
                            <li>If you do not have an account "Sign Up", if you have an account "Login"</li>
                            <li>Use "Post a Product" button to post a product you want to exchange.</li>
                            <li>Enter your "Product Name".</li>
                            <li>Select the "Condition" of your product accurately.</li>
                            <li>Describe your product. Mention whether it has any damages or if you made an amends to it. Also do not forget
                              to mention its how much its worth. You can also mention what product you wish to exchange yours for.
                            </li>
                            <li>Add a good quality image of your product. Make sure you capture the photo in a well lit place, so that it 
                              looks clear.</li>
                            <li>Select the "Category" to which your product belongs to.</li>
                            <li>Finally you can post your product.</li>
                            <li>Post will visible in your profile after verification.</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 2 -->

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          How to take clear photos?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                          <p>Take photos of your products very clearly. Set the lighting and angle properly. Photo should cover up the entire
                            product. Make sure product is not far away or too close, but in a perfect distance.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 3 -->

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          What photos you should upload?
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                          <p>Any photo you upload should be a "JPEG" type, with a minimum size of 200 * 200.</p>
                          <div class="alert alert-danger" role="alert" style="font-size:13px;">
                            <strong>Important!</strong> Any image you upload should not be liable to copyrights.
                            Photos should be owned by you and do not use stock or watermarked images.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 4 -->

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          How to describe your post?
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                          <p>Describe your product clearly. Describe every details you wish your trade buddy knows about your product.
                            Mention how much worth is your product and if you have made any amends. Being honest will get you great deals.
                            <br><br>

                            A detailed description for <strong>electronics</strong> should include information about;
                          </p>
                          <ul>
                            <li>Quality</li>
                            <li>Brands if available</li>
                            <li>If any repairs were done</li>
                            <li>Mention any flaws like scratches, cracks or stains.</li>
                          </ul>
                          <div class="alert alert-danger" role="alert" style="font-size:13px;">
                            <strong>Important!</strong> Please do not swap electronic products with electronic
                            defects or electric shortage unless it is completely repaired and is in working condition.
                          </div>
                          <br><br>

                          <p>A detailed description for <strong>books</strong> should include information about;</p> 
                          <ul>
                            <li>Number of books you wish to exchange</li>
                            <li>Names of the books and their authors</li>
                            <li>If possible mention the genre it belongs to</li>
                            <li>Mention any flaw like damages, stains and are there any missing pages</li>
                          </ul>

                          <p>A detailed description for <strong>furnitures</strong> should include information about;</p> 
                          <ul>
                            <li>Quality</li>
                            <li>Material it is made of</li>
                            <li>Color</li>
                            <li>Quantity</li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <!-- Accordion 5 -->

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                          Choosing item condition
                        </button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                          <p>Choose the "Condition" of your product properly, so the person you wants it knows exactly the condition of
                            the product you posted. The types of condition in detail;
                            <ul>
                              <li><strong>New:-</strong> Product has never been used and it is flawless.</li>
                              <li><strong>Very Good:-</strong> Used a few times but has no flaws and in great condition.</li>
                              <li><strong>Good:-</strong> Quite used with little imperfections.</li>
                              <li><strong>Satisfactory:-</strong> Very well used but still serves its purpose at its best.</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 6 -->

                  </div>
                  <!-- End of Post -->



                  
                  <div class="accordion accordion-flush" id="accordionFlushExample3">
                  <h4 id="simple-list-item-3">Edit Post details</h4>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                          How to edit post details?
                        </button>
                      </h2>
                      <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body">
                          <ol>
                            <li>Click the "Edit" button of your post.</li>
                            <li>Edit the details you want to change.</li>
                            <li>Save the changes</li>
                            <li>Changes will be verified and confirmed.</li>
                            <li>Once your post is confirmed it will be posted back again in SWAP.</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 7 -->
                    
                  </div>
                  <!-- End of Edit post -->



                  
                  <div class="accordion accordion-flush" id="accordionFlushExample4">
                  <h4 id="simple-list-item-4">About Account Creation</h4>
                    
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                          How to create an Account properly?
                        </button>
                      </h2>
                      <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample4">
                        <div class="accordion-body">
                          <ol>
                            <li>Use the "Sign Up" link</li>
                            <li>Provide your First Name</li>
                            <li>Provide your Last Name</li>
                            <li>Prodive your Email</li>
                            <li>Provide a strong password with a minimum of 8 characters which includes <b><i>letters (a-z) both
                            upper case and lower case</i></b>, <b><i>special characters</i></b> and <b><i>numbers</i></b>.</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 8 -->
                      
                  </div>
                  <!-- End of account creation -->

                    
                  
                  <div class="accordion accordion-flush" id="accordionFlushExample5">
                  <h4 id="simple-list-item-4">Security and Verification</h4>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                          Verification after posting a new product or updating an existing product.
                        </button>
                      </h2>
                      <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample5">
                        <div class="accordion-body">
                          <p>Once you post a product or update the details of an already posted product, it will be sent for 
                            verification. Once the verification is done it will be posted in SWAP and available in your profile.</p> <br>
                          <p>Any products with wrong or misleading information will be rejected and your post will be rejected.</p>
                        </div>
                      </div>
                    </div>
                    <!-- Accordion 9 -->
                    
                  </div>
                  <!-- End of security and verification -->
                  
                  

                </div>
                <!-- End of scrollspy -->
                </div>
                <!-- End of col-8 -->

              </div>
                <!-- End of row -->

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
