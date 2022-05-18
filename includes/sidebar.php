<!-- <div class="sidebar">
        
        <a href="index.php"><img src="./assets/Couleur-logo-NBA.jpg" alt="logo bustronome" class="imagelogo" ></a>
        <div class="logo_container">
     
        </div>
        <ul class="nav">
           
        <?php 
        if(!isset($_SESSION['auth']) && !isset($_SESSION['mdp']) ){
          ?>
        <li class="solou">
        <a href="login.php"  class="binks">
            <span class="list_name" ><i class='bx bx-star'></i> Connexion <i class='bx bx-star'></i></span>
        </a>
    
        </li>
        <?php
        } 
          ?>
          <?php 
        if(isset($_SESSION['auth']) ){
          ?>

        <li class="solou">
        <a href=" actions/logaoutaction.php"  class="binks">
            <span class="list_name" > Deconnexion </span>
        </a>
    
        </li>

        <li class="solou" id="golden">
            <a href="reservation.php" class="binks" id="blackus" >
                <span class="list_name"><i class='bx bx-star'></i> Réservez Une loge <i class='bx bx-star'></i></span>
            </a>
        </li>

        <li class="solou">
        <a href=" mes-menu.php"  class="binks">
            <span class="list_name" > Mes réservations </span>
        </a>
    
        </li>

        <li class="solou">
        <a href=" profile.php?id=<?= $_SESSION['id']; ?>"  class="binks">
            <span class="list_name" > Mon Profil </span>
        </a>
    
        </li>

        <?php
        } 
          ?>
          <!-- Si le profil admin n'est pas connecté et  le profil user est  connecté alors ça affiche la liste en dessous dans la sidebar -->
           <?php 
        if(!isset($_SESSION['mdp']) && isset($_SESSION['auth'])){
          ?>
     
     <!-- Si le profil admin et le profil user est pas connecté alors ça affiche la liste en dessous dans la sidebar -->
        <?php
        } 
        if(!isset($_SESSION['mdp']) && !isset($_SESSION['auth'])){
            ?>
          <!-- <li class="solou">
          <a href="loginadmin.php"  class="binks">
              <span class="list_name" ><i class='bx bx-star'></i> Connexion Admin <i class='bx bx-star'></i></span>
          </a>
      
          </li> -->
          <?php
          }
          ?>
          <?php 
        if(isset($_SESSION['mdp']) && !isset($_SESSION['auth'])){
          ?>
<!-- 
        <li class="solou">
        <a href=" actions/logaoutaction.php"  class="binks">
            <span class="list_name" > Deconnexion admin </span>
        </a>
    
        </li>
        <li class="solou">
            <a href="booked.php" class="binks">
                <span class="list_name"> Les réservations </span>
            </a>
          
            </li>
            <li class="solou">
            <a href="allprofile.php" class="binks">
                <span class="list_name"> Les profils </span>
            </a>

            </li> -->
      
        <?php
        } 
          ?>
            <!-- </li>
       
            <li class="solou">
            <a href="offres.php" class="binks">
                <span class="list_name"> Les offres </span>
            </a>
     
            </li>
        
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Actualités NBA </span>
            </a>
         
            </li>
            <li class="solou">
            <a href="#" class="binks">
                <span class="list_name"> Le blog </span>
            </a>
          
            </li>
           
            
            </li>
            <li class="solou" >
            <a href="#" class="binks">
                <span class="list_name"> Nous contacter </span>
            </a>
           
            </li>
         
         

        </ul>
      
        <div class="footer_side" >
            <div class="iconus">
                <i class='bx bxs-map'></i>
            </div>
            <ul class="titrou">
                <li>
                    <span>NBA siège social</span>     
                </li>
                <li>
                    <a href="https://www.google.com/maps/@40.7590625,-73.9764552,3a,75y,20.32h,99.02t/data=!3m7!1e1!3m5!1sofCa3fjVY5eEJGY49emHbg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DofCa3fjVY5eEJGY49emHbg%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D116.71684%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192" target="_blank" class="angle">Olympic Tower au 645, de la 5 Avenue à New York</a>

                </li>
                
            </ul>
            <ul>
            
            </ul>
            </div>
            
       

    </div> --> 

    <nav>
        <ul>
            <li>
                <a href="#" class="nbalogo">
                    <img src="assets/nbalogo.svg" alt="">
                </a>
            </li>
            <li>
                <a href="index.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item"> Accueil</span>
                </a>
            </li>

            <?php 
        if(!isset($_SESSION['auth']) && !isset($_SESSION['mdp']) ){
          ?>
            <li>
                <a href="login.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Connexion </span>
                </a>
            </li>
            <?php
        } 
          ?>
            <?php 
        if(isset($_SESSION['auth']) ){
          ?>
               <li>
                <a href="actions/logaoutaction.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Déconnexion </span>
                </a>
            </li>
            <li>
                <a href="reservation.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Reserver une loge </span>
                </a>
            </li>
            <li>
                <a href="mes-menu.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Mes menus </span>
                </a>
            </li>

            <li>
                <a href=" profile.php?id=<?= $_SESSION['id']; ?>">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Mon profil </span>
                </a>
            </li>

         

<?php
        } 
          ?>

 <!-- Si le profil admin n'est pas connecté et  le profil user est  connecté alors ça affiche la liste en dessous dans la sidebar -->
 <?php 
        if(!isset($_SESSION['mdp']) && isset($_SESSION['auth'])){
          ?>
     
     <!-- Si le profil admin et le profil user est pas connecté alors ça affiche la liste en dessous dans la sidebar -->
        <?php
        } 
        if(!isset($_SESSION['mdp']) && !isset($_SESSION['auth'])){
            ?>
            <li>
                <a href="loginadmin.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Connexion Admin</span>
                </a>
            </li>
            <?php
          }
          ?>
          <?php 
        if(isset($_SESSION['mdp']) && !isset($_SESSION['auth'])){
          ?>

                <li>
                <a href="actions/logaoutaction.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Déconnexion Admin</span>
                </a>
             </li>

             <li>
                <a href="booked.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Les réservations</span>
                </a>
            </li>

            <li>
                <a href="allprofile.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Les profils</span>
                </a>
            </li>


<?php
        } 
          ?>
            <li>
                <a href="offres.php">
                <i class="fas fa-wallet"></i>
                    <span class="nav-item"> Les offres </span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item"> Actualités NBA </span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-at"></i>
                    <span class="nav-item"> Nous contacter </span>
                </a>
            </li>
         
        </ul>
    </nav>