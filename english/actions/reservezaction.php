<?php

require('actions/database.php');

// je vais vérifier si l'utilisateur à bien cliqué sur le bouton publier
if(isset($_POST['validate'])){


    if(!empty($_POST['rdate']) AND !empty($_POST['rhours']) AND !empty($_POST['rname']) AND !empty($_POST['rmail']) AND !empty($_POST['rteam']) AND !empty($_POST['rloge']))
    {
            //déclaration des variables
       $res_date = htmlspecialchars($_POST['rdate']);
       $res_name = htmlspecialchars($_POST['rname']);
       $res_mail = htmlspecialchars($_POST['rmail']);
       $res_hours = htmlspecialchars($_POST['rhours']);
       $res_team = htmlspecialchars($_POST['rteam']);
       $res_loge = htmlspecialchars($_POST['rloge']);
    

        $insertResOnWebsite = $bdd->prepare('INSERT INTO booking(date, heure, nom, email, equipe,loge,  id_auteur )VALUES(?, ?, ?, ?, ?, ?, ? )');
        //ma requete sql INSERT INTO va inserer dans la table booking de ma bdd dans chaques lignes les variables que l'utilisateur aura tapé dans les inputs
        $insertResOnWebsite->execute(
            array( 
            $res_date,   
            $res_hours,  
            $res_name,  
            $res_mail, 
            $res_team, 
            $res_loge, 
            $_SESSION['id'] ));

            $successMsg = "Votre Réservation à bien été publié sur le site !";

            header('location: indexen.php');

    }else{
            $errorMsg = "Veuillez compléter tous les champs";
        }


}

