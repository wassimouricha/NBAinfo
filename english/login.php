

<!DOCTYPE html>
<html lang="en">

<!-- En tete -->
<?php include 'includes/head.php' ; ?>

<?php require('actions/loginaction.php'); ?>

<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebar.php' ; ?>
            <!-- formulaire -->
            <div class="containereform">
        

    <div class="containerloginform" > <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
     

        <!-- Formulaire version plus belle -->
        <div class="form-container">
            <div class="signin-signup">
                <form  class="sign-in-form" method="POST">
                    <h2 class="titreformulaire"> Sign in</h2>
                    <?php 
                    if(isset($errorMsg)){echo '<p class="messagus">'.$errorMsg.'</p>'; }  ?>
                        <br> <br>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Pseudo" name="pseudo">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btnform" name="validate">Sign in</button>
                    <a href="inscription.php"><p >No account ? Sign up !</p></a>
                </form>
            </div>
        </div>
        <div class="panels-container">


            </div>

        </div>

        </div>

           

    <!-- Script -->
      <script src="./script.js"></script>
</body>
</html>