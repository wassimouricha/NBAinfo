  <nav>
        <ul>
            <li id="btnnav">
                <a href="index.php" class="nbalogo">
                    <img src="assets/nbalogo.svg" alt="">
                </a>
                <div id="toggle">
                <i class="indicator"></i>

                     </div>
            </li>
            <li>
                <a href="indexen.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item"> Home</span>
                </a>
            </li>

            <?php 
        if(!isset($_SESSION['auth']) && !isset($_SESSION['mdp']) ){
          ?>
            <li>
                <a href="loginen.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Login </span>
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
                    <span class="nav-item"> Logout </span>
                </a>
            </li>
            <li>
                <a href="reservationen.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Book a Lodge  </span>
                </a>
            </li>
            <li>
                <a href="mes-reservationsen.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> My reservations </span>
                </a>
            </li>

            <li>
                <a href=" profile.php?id=<?= $_SESSION['id']; ?>">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> My profil </span>
                </a>
            </li>

         

<?php
        } 
          ?>

 <!-- Si le profil admin nest pas connecté et  le profil user est  connecté alors ça affiche la liste en dessous dans la sidebar -->
 <?php 
        if(!isset($_SESSION['mdp']) && isset($_SESSION['auth'])){
          ?>
     
     <!-- Si le profil admin et le profil user est pas connecté alors ça affiche la liste en dessous dans la sidebar -->
        <?php
        } 
        if(!isset($_SESSION['mdp']) && !isset($_SESSION['auth'])){
            ?>
            <li>
                <a href="loginadminen.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item"> Login Admin</span>
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
                    <span class="nav-item"> Logout Admin</span>
                </a>
             </li>

             <li>
                <a href="bookeden.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">reservation</span>
                </a>
            </li>

            <li>
                <a href="allprofile.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profils </span>
                </a>
            </li>


<?php
        } 
          ?>
            <li>
                <a href="offers.php">
                <i class="fas fa-wallet"></i>
                    <span class="nav-item"> Offers  </span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">  NBA News </span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-at"></i>
                    <span class="nav-item"> Contact us </span>
                </a>
            </li>

            <li>
                <div class="langagewrapped">
                <a href="#" langage = "anglais" >EN</a>

                <a href="../index.php" class="france" langage = "français">FR</a>
                </div>
               
            </li>

          
            
            
         
        </ul>
    </nav>