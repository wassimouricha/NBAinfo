<?php session_start(); 
require('actions/allmenuaction.php');
?>


<!DOCTYPE html>
<html lang="en">

<!-- En tete -->

<?php include 'includes/head.php' ; ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebaren.php' ; ?>
           
            <div class="containered2">
               
                <div class="titrecalend">
                  <h1 >
                    Here's the differents lodge
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus2">
             

                  <div class="cardmorph">
                  <div class="cardmorph_content">
                    <div class="cardmorph_picture">
                    <img src="./assets/loges-chase-center.jpg" alt="" >
                    </div>
                    <div class="cardmorph_picture2">
                    <img src="./assets/Blue_circle_frame.png" alt="" >
                    </div>
                      
                        <br>
                        <p class="colorcardtext"> Classical Lodge Offer</p>
                            <p class="colorcardtext"> The cheapest Lodge you can get </p>
                            <p class="colorcardtext"> Price : 90 $</p>
                        
                          </div>
                         
                  </div>
                  <div class="cardmorph">
                  <div class="cardmorph_content">
                    <div class="cardmorph_picture">
                    <img src="./assets/FTG-NBAMostPoshPrivateClubs-BarclaysCenter-CreditBruceDamote.jpg" alt="" >
                    </div>
                    <div class="cardmorph_picture3">
                    <img src="./assets/white-circle.png" alt="" >
                    </div>
                      
                        <br>
                        <p class="colorcardtext"> Offre Loge VIP</p>
                            <p class="colorcardtext"> Loge VIP Classieuse </p>
                            <p class="colorcardtext"> Prix : 350 $</p>
                          </div>
                         
                  </div>
                  <div class="cardmorph">
                  <div class="cardmorph_content">
                    <div class="cardmorph_picture">
                    <img src="./assets/FTG-NBAMostPoshPrivateClubs-BarclaysCenter-CreditBruceDamote.jpg" alt="" >
                    </div>
                    <div class="cardmorph_picture2">
                    <img src="./assets/circle-41674.png" alt="" >
                    </div>
                      
                        <br>
                            <p class="colorcardtext"> Offre Loge VIP Premium </p>
                            <p class="colorcardtext"> Loge Magic Johnson </p>
                            <p class="colorcardtext"> Prix : 750 $</p>
                          </div>
                         
                  </div>

                 

                      
                </div>
                <br> 
                    
                                        
               


              </div>
         

            
            <!-- footer -->
            <?php include 'includes/footer.php' ; ?>

    <!-- Script -->
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( "#datepicker" ).datepicker();
      </script>
      <script src="./script.js"></script>
</body>
</html>