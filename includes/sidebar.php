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
                <a href="mes-reservations.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Mes réservations </span>
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