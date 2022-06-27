<?php require('actions/signupaction.php');  ?>

<!DOCTYPE html>
<html lang="en">

<!-- En tete -->
<?php include 'includes/head.php' ; ?>

<!-- Body -->
<body class="main">


            <!-- sidebar -->
            <?php include 'includes/sidebar.php' ; ?>
            <!-- formulaire -->



        <div class="containereform">
        

<div class="containerloginform" > 
   

    <!-- Formulaire version plus belle -->
    <div class="form-container" >
        <div class="signin-signup">
            <form  class="sign-in-form2" method="POST" enctype="multipart/form-data">
                 <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
                <h2 class="titreformulaire"> Sign up</h2>
                <?php 

            if(isset($errorMsg)){echo '<p class="messagus">'.$errorMsg.'</p>'; }  ?>
                <br>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Pseudo" name="pseudo">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Lastame" name="lastname">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Firstname" name="firstname">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
              
                <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Select a picture </label>
                          <br>
                            <input type="file"  name="binu" id="upload">
                          </div>
                

                <button type="submit" class="btnform" name="validate">Sign up</button>
                <a href="login.php"><p >Already have an account ? Sign in !</p></a>
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