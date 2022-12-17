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

    <title>Terms & Conditions | Swap</title>
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


            <div class="col-12 tc">
              <img src="images/tc-banner.jpg" alt="">
              <h1>Don't lose a <br>chance to reuse</h1>
              <p class="banner">Join us to grab every chance of reusing products.</p>
            </div>
            <!-- End of col-12 -->

            <div class="small-container">
              <div class="col-12 tc">
                <h2>Terms & Conditions</h2>
              </div>
              <!-- End of col-12 -->
            </div>
            <!-- End of small-container -->


            <div class="small-container">
              <div class="col-12 tc">

                <h6>User Agreement</h6>
                <p> SWAP website has been created as a great platform users to find 
                other traders with similar interest to exchange products with easily and securely. As users you should 
                understand that SWAP website has limitations and risk that may befall before before participating. You will
                be notified if any updates were made to our terms via email. By using the Service in any way, you are 
                agreeing to comply with these Terms. Should you object to any term or condition of these Terms, any 
                guidelines, or any subsequent modifications thereto or become dissatisfied with SWAP 
                in any way, your only recourse is to immediately discontinue use of SWAP.
               </p> <br>

               <h6>Rights to Terminate</h6>
               <p>You agree that SWAP, in its sole discretion, may terminate
                any post or use of the service immediately and without notice if (a) SWAP believes that 
                you have acted inconsistently with the spirit or the letter of this Terms of Service or (b) if SWAP 
                believes you have violated or tried to violate the rights of other users.</p> <br>
                
                <h6>Your Conduct</h6>
                <p>You are solely responsible for the contents of your 
                transmissions through the service. You must ensure that your participation in the swapping of items 
                or services does not violate any applicable laws or regulations. By this we mean that you must 
                check that you are not prohibited from doing so by any law or regulation. <br>
                In particular, you may not;

                <ul>
                  <li>swap property which requires a written contract, which is illegal, which requires a licence to buy
                or sell (for instance firearms, alcohol or pharmaceutical drugs) or which requires you to obtain 
                an export licence. </li>
                  <li>In the interests of animal welfare, live animals of any type may not be posted  for swapping.</li>
                  <li>Adult or any sort of pornographic items may not be posted.</li>
                  <li>Weapons including, but not limited to, knives, firearms, air powered guns or rifles and coshes may not
                  be posted.</li>
                </ul>

                <p>You must not transmit through the service any unlawful, harassing, libelous, abusive, threatening, harmful, 
                vulgar, obscene or otherwise objectionable material. You must also not transmit any material that encourages
                conduct that could constitute a criminal offence, give rise to civil liability or otherwise violate any 
                applicable law or regulation.</p>

                <p>You must solely avoid misusing other user's contact information, which if reported you may have to face
                legal consequences, pay compensation to the victim and SWAP for misusing and your account will be 
                permanently terminated.</p> <br>
                

                <h6>Eligibility for Membership</h6>
                <p>Our services are available only to individuals who can
                form legally binding contracts under applicable law. If you are under 18 years old, you can use this 
                service only in conjunction with and under the supervision of a parent or guardian. If you do not qualify, 
                please do not use our services. </p> <br>


                <h6>Condtions</h6>
                <p>Our site acts as the venue for members to list and swap items. We are not involved in the actual 
                transaction between swappers. As a result, we have no control over the quality, safety or legality of the 
                items advertised, the truth or accuracy of the listings, the ability of swappers to complete swaps. In
                addition, note that there are risks of dealing with underage persons or people acting
                under false pretence. <br> <br>

                You give us a non-exclusive, worldwide, royalty-free, irrevocable, sublicenseable (through multiple 
                tiers) right to exercise all copyright and publicity rights, in any existing or future media, known 
                or unknown, over the material or User Data displayed in Your posts.  <br> <br>

                SWAP makes no warranty that the service will meet your requirements, or that the service will be
                uninterrupted, timely, secure, or entirely error free. We do not make any warranty as to the results 
                that may be obtained from the use of the service or as to the accuracy or reliability of any information 
                provided by swappers and obtained through the service. We will not be liable to you or any third party
                for any indirect or consequential loss or damage, or for any loss of data, profit, revenue or business, 
                howsoever caused (whether arising out of any negligence or breach of this Agreement or otherwise), even
                if that loss or damage was foreseeable by, or the possibility of it was brought to the attention of, SWAP.
                <br><br>
                
                We reserve the right to provide counterparties with information pertaining to a complaint or 
                statement, written or oral, made against them by you or a third party acting with or without 
                your consent. Because we do not and cannot be involved in user-to-user dealings, in the event 
                that you have a dispute with one or more users, you release SWAP (and our agents and employees) 
                from claims, demands and damages (actual and consequential) of every kind and nature, know and
                unknown, suspected and unsuspected, disclosed and undisclosed, arising out of or in any way 
                connected with such disputes. <br><br>

                User agrees that SWAP shall not be responsible or liable to user, or anyone for the statements 
                or conduct of any third party on the service. No advice or information, whether oral or written, 
                obtained by user from SWAP or through or from the service shall create any warranty not expressly
                stated herein. You Agree that use of the service is at user's sole risk. The service is provided
                on an "as is" and an "as available" basis. <br><br>

                You must reimburse SWAP for any loss, cost or expense which we suffer if someone else makes a
                claim against us as consequence of the use of the service by you or by someone else from your computer.
                SWAP shall not be responsible for any items obtained by swapping, for any damage to items during transit
                or during the inspection period, nor for misrepresentations and/or breaches of contract by either buyer
                and/or seller. SWAP shall not be responsible for the cost of procurement of substitute goods or any 
                losses resulting from any goods purchased or obtained. SWAP assumes no liability for the content of 
                the posts. The SWAP user shall reimburse SWAP for all losses SWAP may suffer as a result of the 
                posting, unless that loss is due to SWAP's act or omission.
                </p> <br>
                

                <h6>No Spam Policy</h6>
                <p>You understand and agree that sending unsolicited email advertisements to SWAP email
                addresses, which is expressly prohibited by these Terms. Any unauthorized use of SWAP systems is a 
                violation of these Terms and certain federal and state laws. Such violations 
                may subject the sender and his or her agents to civil and criminal penalties.
                </p> <br>


                <h6>Governing law</h6>
                <p>SWAP is operated under the laws and regulations of Sri Lanka.
                </p>
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
