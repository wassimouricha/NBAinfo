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
              
                <div class="titrecalend">
                  <h1 >
                    Réservez une loge VIP
                  </h1>
                  
                </div>
              
            <form class="form-container" method="POST"> <!-- ici j'ajoute la method HTTP post afin d'indiquer que je vais envoyer des informations -->
           

                <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nom" name="rname">
                    </div>

                <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="rmail">
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une date :</label>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <!-- j'indique  que dans l'input je veux le type date ce qui va pouvoir importer le datepicker , je donne le nom de la donnée récupéré puis j'indique min et max afin d'avoir le format dd/mm/yyyy -->
                        <input type="date" placeholder="date" name="rdate"  min="1997-01-01" max="2030-12-31">  
                    </div>

                

                <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une heure :</label>
                <div class="input-field">
                        <i class="fas fa-user"></i>
                        <select  name="rhours" class="selectuded"> 
                        <option  name="rhours" value="13h00"><p>13:00</p></option>
                            <option  name="rhours" value="15h00"><p>15:00</p></option>
                            <option  name="rhours" value="19h45">19:45</option>
                            <option  name="rhours" value="20h45">20:45</option>
                            <option  name="rhours" value="21h30">21:30</option>

                        </select>
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Veuillez selectionner un type de loge :</label>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <select  name="rloge" class="selectuded"> 
                        <option  name="rloge" value="Loge classique"><p>Loge classique</p></option>
                            <option  name="rloge" value="Loge VIP"><p>Loge VIP</p></option>
                            <option  name="rloge" value="Loge premium">Loge premium </option>

                        </select>
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Veuillez selectionner une équipe pour ces playoffs (match à domicile pour l'équipe choisis):</label>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <select  name="rteam" class="selectuded"> 
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
                <br>
                <br>
                
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