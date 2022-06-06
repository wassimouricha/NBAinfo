<?php session_start(); 

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
           
            <div class="containered2">
               
                <div class="titrecalend">
                  <h1 >
                    Voici les différentes loges 
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                                    <ul class="cards">
                      <li>
                        <a href="#" class="card">
                          <img src="assets/loges-chase-center.jpg" class="card__image" alt="" />
                          <div class="card__overlay">
                            <div class="card__header">
                    
                              <img class="card__thumb" src="assets/NBA_Logo.svg" alt="" />
                              <div class="card__header-text">
                                <h3 class="card__title">Loge Classique</h3>            
                                <span class="card__status">Disponible</span>
                              </div>
                            </div>
                            <p class="card__description">Loge des plus classiques et modeste tout en donnant une bonne expérience </p>
                          </div>
                        </a>      
                      </li>
                      <li>
                        <a href="#" class="card">
                          <img src="assets/FTG-NBAMostPoshPrivateClubs-BarclaysCenter-CreditBruceDamote.jpg" class="card__image" alt="" />
                          <div class="card__overlay">        
                            <div class="card__header">
               
                              <img class="card__thumb" src="assets/NBA_Logo.svg" alt="" />
                              <div class="card__header-text">
                                <h3 class="card__title">Loge VIP</h3>
                                <span class="card__status">Disponible</span>
                              </div>
                            </div>
                            <p class="card__description">Loge d'un plus haut standing , donnant accès a des repas 5 étoiles </p>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card">
                          <img src="assets/nbavip.jpeg" class="card__image" alt="" />
                          <div class="card__overlay">
                            <div class="card__header">
               
                              <img class="card__thumb" src="assets/NBA_Logo.svg" alt="" />
                              <div class="card__header-text">
                                <h3 class="card__title">Loge Premium</h3>
                                <span class="card__status">Disponible</span>
                              </div>          
                            </div>
                            <p class="card__description">Loge de très haut standing  , ouvrant accès a un jacuzzi en plus des repas 5 étoiles </p>
                          </div>
                        </a>
                      </li>    
                    </ul>
                <br> 
                    
                                        
               


              </div>
         



    <!-- Script -->
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( "#datepicker" ).datepicker();
      </script>
      <script src="./script.js"></script>
</body>
</html>