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
            <?php include 'includes/sidebar.php' ; ?>
           
            <div class="containered">
               
                <div class="titrecalend">
                  <h1 >
                    Voici les différentes loges 
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus">
                <div class="cardass">
                      <img src="./assets/loges-chase-center.jpg" alt="" class="cardus_image">
                          <div class="cardus_content">
                            <p> Offre Loge classique</p>
                            <p> Loge classique premier prix </p>
                            <p> Prix : 90 $</p>
                          </div>
                         
                  </div>
                  <div class="cardass">
                      <img src="./assets/FTG-NBAMostPoshPrivateClubs-BarclaysCenter-CreditBruceDamote.jpg" alt="" class="cardus_image">
                          <div class="cardus_content">
                            <p> Offre Loge VIP</p>
                            <p> Loge VIP Classieuse </p>
                            <p> Prix : 350 $</p>
                          </div>
                          
                  </div>

                  <div class="cardmorph">
                  <div class="cardmorph_content">
                    <div class="cardmorph_picture">
                    <img src="./assets/hospitalité-VIP-nba-paris-game-2020-accorhotels-arena-courtside.jpeg" alt="" >
                    </div>
                      
                        
                            <p> Offre Loge VIP Premium </p>
                            <p> Loge Magic Johnson </p>
                            <p> Prix : 750 $</p>
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