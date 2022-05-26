<?php

require('actions/database.php');

//on va d'abord verifier si l'utilisateur clic bien sur le bouton modifier 

if(isset($_POST['validate'])){

    if(!empty($_POST['date']) AND !empty($_POST['heure']) AND !empty($_POST['nom']) AND !empty($_POST['email'])  AND !empty($_POST['equipe']) AND !empty($_POST['loge'])){

        $newmenutitle = htmlspecialchars($_POST['date']);
        $newmenudescriptioned = htmlspecialchars($_POST['heure']);
        $newmenucontent = htmlspecialchars($_POST['nom']);
        $newmenuemail = htmlspecialchars($_POST['email']);
        $newmenuequipe = htmlspecialchars($_POST['equipe']);
        $newloge = htmlspecialchars($_POST['loge']);
        // $newmenuimage = file_get_contents($_FILES['bin']['tmp_name']);

            //update est une requete permettant de mettre à jour des informations dans notre table
            //ici on lui dit de mettre a jour la table menu , il va mettre à jour le titre, le description et le contenu du menu qui possede l'id soit donc un id existant déjà dans la table menu
        $editmenu = $bdd->prepare('UPDATE booking SET date = ?, heure = ?, nom = ?, email = ?, equipe = ? , loge = ? WHERE id = ?');
        //on execute la requete qui dans un tableau va venir récuperer le $_GET['id'] (ou ici la variable $idofmenu) soit donc la variable id 
        $editmenu->execute(array($newmenutitle, $newmenudescriptioned, $newmenucontent, $newmenuemail, $newmenuequipe,  $newloge, $_GET['id']));

        //si la session est connecté alors une fois modifier il va rediriger vers les menu de l'id du compte qui est connecté 
        if(isset($_SESSION['id'])){
            header('Location: mes-reservations.php');
        }else{
            header('Location: booked.php');
        }
        

    }else{
        $errorMsg = "Veuillez compléter tout les champs" ;
    }

}

