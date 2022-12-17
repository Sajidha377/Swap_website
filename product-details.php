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

    <title>Product Details | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
        <div class="container">

          <!-- Header -->
          <?php
            include("header.php");
           ?>

           <div class="row">
             <div class="col-8 details">
               <h3>Three Novels</h3>
             </div>
             <div class="col-4">

             </div>
           </div>

           <div class="row">
             <div class="col-8 details">
               <img src="images/banner-books.png" alt="">
             </div>

             <div class="col-4">
               <table>
                 <tbody>
                   <tr>
                     <td> <strong>For Trade by :-</strong> John </td>
                   </tr>
                   <tr>
                     <td><strong>Mobile number :-</strong> 077 123 4567 </td>
                   </tr>
                   <tr>
                     <td> Click to show mobile number </td>
                   </tr>
                   <tr>
                     <td> <strong>Chat</strong> <i class="fas fa-solid fa-comment"></i> </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>


           <!-- Footer -->
           <?php
             include("footer.php");
            ?>

        </div>
    <!-- End of Main Container -->

  </body>
</html>
