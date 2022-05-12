<?php session_start();
  require('actions/reservezaction.php');
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
                <ul class="listemenud">
                 <li> <a href="reservation.php"> <i class="fa-solid fa-calendar"> <span> Date & Heure </span>  </i></a></li>
                 <li> <a href="menu.php"> <i class="fa-solid fa-calendar"> <span> Menu </span>  </i></a>  </li>
                 <li> <i class="fa-solid fa-calendar"> <span> Option </span>  </i> </li>
                </ul>
                <div class="titrecalend">
                  <h1 >
                    Réservez une loge VIP
                  </h1>
                  
                </div>
              
            <form class="container" method="POST"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="rname">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="rmail">
                  
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une date :</label>
                <input type="text"  name="rdate" id="datepicker">    
                </div>
            
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une heure :</label>
                    <select name="rhours" id="selecthours">
                            
                            <option  name="rhours" value="13h00"><p>13:00</p></option>
                            <option  name="rhours" value="15h00"><p>15:00</p></option>
                            <option  name="rhours" value="19h45">19:45</option>
                            <option  name="rhours" value="20h45">20:45</option>
                            <option  name="rhours" value="21h30">21:30</option>
                        </select>
                
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Veuillez selectionner un type de loge :</label>
                    <select name="rloge" id="selecthours">
                            
                            <option  name="rloge" value="Loge classique"><p>Loge classique</p></option>
                            <option  name="rloge" value="Loge VIP"><p>Loge VIP</p></option>
                            <option  name="rloge" value="Loge premium">Loge premium </option>
                        
                        </select>
                
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une équipe pour ces playoffs (match à domicile pour l'équipe choisis):</label>
                    <select name="rteam" id="selecthours">
                            
                            <option  name="rteam" value="Heat"><p>Heat</p></option>
                            <option  name="rteam" value="Bucks"><p>Bucks</p></option>
                            <option  name="rteam" value="Celtics">Celtics</option>
                            <option  name="rteam" value="76ers">76ers</option>
                            <option  name="rteam" value="Raptors">Raptors</option>
                            <option  name="rteam" value="Cavaliers">Cavaliers</option>
                            <option  name="rteam" value="Nets">Nets</option>
                            <option  name="rteam" value="Grizzlies">Grizzlies</option>
                            <option  name="rteam" value="Warriors">Warriors</option>
                            <option  name="rteam" value="Mavericks">Mavericks</option>
                            <option  name="rteam" value="Jazz">Jazz</option>
                            <option  name="rteam" value="Nuggets">Nuggets</option>
                            <option  name="rteam" value="Timberwolves">Timberwolves</option>
                            <option  name="rteam" value="Clippers">Clippers</option>
                     
                        </select>
                
                </div>

                <input type="submit" name="validate"  value="Reservez">
            </form>

            
       

              </div>
         

            
            <!-- footer -->
            <?php include 'includes/footer.php' ; ?>

    <!-- Script -->
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( "#datepicker" ).datepicker();
      </script>
      <script src="./script.js"></script>
</body>
</html>