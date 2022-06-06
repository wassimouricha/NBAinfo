

<?php 
require('actions/getinfomenuaction.php'); 
require('actions/editmenuaction.php'); 

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
                   Modifier une reservation
                  </h1>
                  
                </div>
             
                   <!-- Test de publication -->
                  
                            <!-- code pour afficher les messages d'erreur ou de succès dans le -->
                      <?php if(isset($errorMsg)){ 
                            echo '<p class="messagus">'.$errorMsg.'</p>'; 
                            } 
                            ?>

                         <br> <br>

                            <?php 

                                if(isset($contentmenu)){

                                    ?>
                                     <form class="container" method="POST" enctype="multipart/form-data"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
                                     <div class="mb-3">
                         <label for="exampleInputEmail1" class="formlabel2">Veuillez selectionner une date :</label>
                         <input type="text"  name="date"  value="<?= $titremenu; ?> " >    
                         </div>
                   

                         <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel2">Veuillez selectionner une heure :</label>
                    <select name="heure" id="selecthours" >
                   
                            <option  name="heure" value="13h00"><p>13:00</p></option>
                            <option  name="heure" value="15h00"><p>15:00</p></option>
                            <option  name="heure" value="19h45">19:45</option>
                            <option  name="heure" value="20h45">20:45</option>
                            <option  name="heure" value="21h30">21:30</option>
                        </select>
                
                </div>

                      
                <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel2">Veuillez selectionner un type de loge :</label>
                    <select name="loge" id="selecthours">
                            
                            <option  name="rloge" value="Loge classique"><p>Loge classique</p></option>
                            <option  name="rloge" value="Loge VIP"><p>Loge VIP</p></option>
                            <option  name="rloge" value="Loge premium">Loge premium </option>
                        
                        </select>
                
                </div>
                          
                          
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel2">nom</label>
                              <textarea  class="form-control" name="nom" > <?= $contentmenu; ?></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel2">email</label>
                              <textarea  class="form-control" name="email" > <?= $imagemenu; ?></textarea>
                          </div>
                          <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel2">"Veuillez selectionner une équipe pour ces playoffs (match à domicile pour l'équipe choisis):"</label>
                    <select name="equipe" id="selecthours">
                       
                            <option  name="equipe" value="Heat"><p>Heat</p></option>
                            <option  name="equipe" value="Bucks"><p>Bucks</p></option>
                            <option  name="equipe" value="Celtics">Celtics</option>
                            <option  name="equipe" value="76ers">76ers</option>
                            <option  name="equipe" value="Raptors">Raptors</option>
                            <option  name="equipe" value="Cavaliers">Cavaliers</option>
                            <option  name="equipe" value="Nets">Nets</option>
                            <option  name="equipe" value="Grizzlies">Grizzlies</option>
                            <option  name="equipe" value="Warriors">Warriors</option>
                            <option  name="equipe" value="Mavericks">Mavericks</option>
                            <option  name="equipe" value="Jazz">Jazz</option>
                            <option  name="equipe" value="Nuggets">Nuggets</option>
                            <option  name="equipe" value="Timberwolves">Timberwolves</option>
                            <option  name="equipe" value="Clippers">Clippers</option>
                     
                        </select>
                
                </div>
                  
                          <button type="submit" class="btnform" name="validate" >Modifier</button>
                     
                  </form>

                                        <?php

                                        
                                }
                            ?>
                        
              

    
       



              </div>
         



    <!-- Script -->
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script src="./script.js"></script>
</body>
</html>