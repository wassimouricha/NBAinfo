<?php

require('actions/database.php');

//on va d'abord verifier si l'utilisateur clic bien sur le bouton modifier 

if(isset($_POST['validate'])){

    if(!empty($_POST['date']) AND !empty($_POST['heure']) AND !empty($_POST['nom']) AND !empty($_POST['email'])  AND !empty($_POST['equipe']) AND !empty($_POST['loge'])){

        $newrestitle = htmlspecialchars($_POST['date']);
        $newresdescriptioned = htmlspecialchars($_POST['heure']);
        $newrescontent = htmlspecialchars($_POST['nom']);
        $newresemail = htmlspecialchars($_POST['email']);
        $newresequipe = htmlspecialchars($_POST['equipe']);
        $newloge = htmlspecialchars($_POST['loge']);

   //update est une requete permettant de mettre à jour des informations dans notre table
  //ici on lui dit de mettre a jour la table booking , il va mettre à jour le titre, le description et le contenu d'une reservation qui possede 
  //l'id soit donc un id existant déjà dans la table booking
        $editres = $bdd->prepare('UPDATE booking SET date = ?, heure = ?, nom = ?, email = ?, equipe = ? , loge = ? WHERE id = ?');
        //on execute la requete qui dans un tableau va venir récuperer le $_GET['id'] 
        $editres->execute(array($newrestitle, $newresdescriptioned, $newrescontent, $newresemail, $newresequipe,  $newloge, $_GET['id']));

        //si la session est connecté alors une fois modifier il va rediriger vers les réservations de l'id du compte qui est connecté 
        if(isset($_SESSION['id'])){
            header('Location: mes-reservations.php');
        }else{
            header('Location: booked.php');
        }

    }else{
        $errorMsg = "Veuillez compléter tout les champs" ;
    }

}

