<?php 

require('actions/securiteadmin.php');
require('actions/showallbooked.php');


   
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
                   All the reservations
                  </h1>
                  
                </div>
                <!-- mon tableau de carte -->
                <div class="cardus2">
                 
               
                  <?php 
                        while($booked = $getAllTheBooked->fetch()){
                            ?>
                             <div class="cardass">
                     
                          <div class="card_container2">
                            <p> Date :  <?php echo $booked['date'];  ?>  </p>
                            <p> Hour :  <?php echo $booked['heure'];  ?></p>
                            <p> Name : <?php echo $booked['nom'];  ?></p>
                            <p> E-mail : <?php echo $booked['email'];  ?></p>
                            <p> Type : <?php echo $booked['loge'];  ?></p>
                          </div>
                         
                          
                            <div>
                              <a href="modifier-reservation.php?id=<?php echo $booked['id']; ?>" class="cardus_link"> Edit</a>
                              <a href="actions/supprimermenuactionadmin.php?id=<?php echo $booked['id']; ?>" class="cardus_link"> Delete</a>
                            </div>
                      
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