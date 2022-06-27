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
                   Here are the different boxes
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
                                <h3 class="card__title">Classical box</h3>            
                                <span class="card__status">Available</span>
                              </div>
                            </div>
                            <p class="card__description">Classic and modest Box giving a good experience </p>
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
                                <h3 class="card__title">VIP Box</h3>
                                <span class="card__status">Available</span>
                              </div>
                            </div>
                            <p class="card__description">Box of a higher standard, giving access to 5-star meals</p>
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
                                <h3 class="card__title">Premium Box</h3>
                                <span class="card__status">Available</span>
                              </div>          
                            </div>
                            <p class="card__description">Very high standard box, opening access to a jacuzzi in addition to 5-star meals </p>
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