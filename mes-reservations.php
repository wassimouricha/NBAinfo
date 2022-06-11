<?php 
require('actions/securiteaction.php');
require('actions/mesreservationsaction.php');

   
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
                    Voici mes reservations
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus2">
                  
               
                  <?php 
                        while($reser = $getAllTheRes->fetch()){
                            ?>
                             <div class="cardass">
                     
                          <div class="card_container2">
                            <p>Date : <?php echo $reser['date'];  ?>  </p>
                            <p>Heure : <?php echo $reser['heure'];  ?></p>
                            <p>Nom : <?php echo $reser['nom'];  ?></p>
                            <p>Mail :  <?php echo $reser['email'];  ?></p>
                            <p>Equipe : <?php echo $reser['equipe'];  ?></p>
                            <p>Loge : <?php echo $reser['loge'];  ?></p>
                          </div>

                        
                            <div>
                              <a href="modifier-reservation.php?id=<?php echo $reser['id']; ?>" class="cardus_link"> Modifier</a>
                              <a href="actions/supprimerresaction.php?id=<?php echo $reser['id']; ?>" class="cardus_link"> Supprimer</a>
                            </div>
        
                  </div>
                             <?php 
                        }
                  
                  ?>

                      

                </div>

                <br>
                <div class="butonneded" >
                        <!-- bouton bootstrap -->
<a href="./reservation.php" class="btn btn-dark" >Ajouter une reservation</a>

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