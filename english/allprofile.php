<?php session_start(); 
require('actions/showalluserprofilaction.php');
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
           
            <div class="containered">

              
                <!-- mon tableau de carte -->
                <div class="cardus">
                 
                  <?php 
                        while($ausers = $getAllTheProfile->fetch()){
                            ?>
                             <div class="cardass">
                            
                          <div class="card_container2">
                          <?= '<img src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $ausers['binu'] ) . '" />'; ?>
                         
                          </div>
                          <p>Pseudo :  <?php echo $ausers['pseudo'];  ?>  </p>
                            <p> Name : <?php echo $ausers['nom'];  ?></p>
                            <p> Firstname : <?php echo $ausers['prenom'];  ?></p>
                  </div>
                             <?php 
                        }
                  
                  ?>

                      
                </div>
                         
               


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