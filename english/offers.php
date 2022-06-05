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
            <?php include 'includes/sidebaren.php' ; ?>
           
            <div class="containered2">
               
                <div class="titrecalend">
                  <h1 >
                    Here are our Lodge offers 
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
                                <h3 class="card__title">Classical Lodge</h3>            
                                <span class="card__status">Available</span>
                              </div>
                            </div>
                            <p class="card__description">The most classic and modest lodge giving a good experience </p>
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
                                <h3 class="card__title">VIP Lodge</h3>
                                <span class="card__status">Available</span>
                              </div>
                            </div>
                            <p class="card__description">Lodge of a higher standing, giving access to 5 star meals </p>
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
                                <h3 class="card__title">Premium Lodge</h3>
                                <span class="card__status">Available</span>
                              </div>          
                            </div>
                            <p class="card__description">Lodge of very high standing  , opening access to a jacuzzi in addition to meals 5 stars </p>
                          </div>
                        </a>
                      </li>    
                    </ul>
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