<?php 
require('actions/securiteaction.php');
require('actions/mesmenusaction.php');

   
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
             
                <div class="titrecalend">
                  <h1 >
                    Here are my reservations
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus2">
                  
               
                  <?php 
                        while($menus = $getAllTheMenu->fetch()){
                            ?>
                             <div class="cardass">
                     
                          <div class="card_container2">
                            <p> <?php echo $menus['date'];  ?>  </p>
                            <p> <?php echo $menus['heure'];  ?></p>
                            <p> <?php echo $menus['nom'];  ?></p>
                            <p> <?php echo $menus['email'];  ?></p>
                            <p> <?php echo $menus['equipe'];  ?></p>
                            <p> <?php echo $menus['loge'];  ?></p>
                          </div>
                        
                        
                            <div>
                              <a href="modifier-reservationen.php?id=<?php echo $menus['id']; ?>" class="cardus_link"> Edit</a>
                              <a href="actions/supprimermenuaction.php?id=<?php echo $menus['id']; ?>" class="cardus_link"> Delete</a>
                            </div>
                      
                  </div>
                             <?php 
                        }
                  
                  ?>

                      

                </div>

                <br>
                <div class="butonneded" >

<a href="./reservation.php" class="btn btn-dark" >Add a reservation</a>

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