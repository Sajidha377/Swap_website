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

    <title>Contact Us | Swap</title>
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


          <!-- Main Container -->
              <div class="container contact">
                <div class="row">
                  <div class="login-box">
                    <div class="col-1 contact">
                      <img src="images/login.jpg" alt="">
                    </div>
                    <div class="col-2 contact">
                      <h5>Message Us</h5>
                      <p>Share your thoughts with Us.</p>
                      <form method="post" action="https://formspree.io/f/mqkjrdzy" id="my-form">
                        <div class="mb-1">
                          <label for="exampleFirstName" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="first_name" name="First Name" aria-describedby="emailHelp" placeholder="First name" required>
                        </div>
                        <div class="mb-1">
                          <label for="exampleLastName" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="last_name" name="Last Name" aria-describedby="emailHelp" placeholder="Last name" required>
                        </div>
                        <div class="mb-1">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="Email" aria-describedby="emailHelp" placeholder="Use your email address" required>
                        </div>
                        <div class="mb-1">
                          <label for="description" class="form-label">Description</label>
                          <textarea class="form-control" name="Message" id="message" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send</button>
                        <div class="mb-1" style="text-align:center; padding-top:10px;">
                          <p id="my-form-status"></p>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          <!-- End of Main Container -->


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

    <script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Thanks for your submission!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>


  </body>
</html>
