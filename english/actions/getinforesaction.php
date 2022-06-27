<?php
session_start();
require('actions/database.php');
// if isset permet de demander si la variable est déclaré, la methode $_GET sert a récuperer les données de l'url
// donc si vous voulez modifier un menu dans l'url de la page modifier-menu.php vous ajouter ?id= puis le numéro de l'id du menu que vous voulez modifier
if(isset($_GET['id'])  AND !empty($_GET['id'])){

    $idofres = $_GET['id'];  //je met le get id dans une variable pour éviter de le réecrire
    //on va venir récuperer l'id et l'id_auteur  ( ou avec l'étoile récuperer totues les données )d'un menu qui se trouve dans la base de donnée menu(sur phpmyadmin) 
    //qui possede l'id que l'on a mis dans l'url
    $checkIfResExist = $bdd->prepare('SELECT * FROM booking WHERE id = ?');
    $checkIfResExist->execute(array($idofres));

    //rowcount nous permet de compter le nombre de donéne récuperer par cette requete
    // et donc sir le nombre de donnée est bien supérieur à 0 ça veut dire que le menu existe bien et possède l'id que l'on a mis dans l'url
    if($checkIfResExist->rowCount() > 0){

        //ici on va verifier que l'identifiant de l'auteur qui est connecté est bien l'auteur du menu que l'on veut modifier
        //fetch pour recuperer toutes les données de cette requete
        $resInfo = $checkIfResExist->fetch();
         //  si l'id auteur est le meme que l'id de l'auteur la session qui est connectée ou de l'admin qui est connectée et bien on pourra exectuer le code
        if($resInfo['id_auteur'] == isset($_SESSION['id']) || $_SESSION['mdp']){

            $titreres = $resInfo['date'];
            $descriptionres = $resInfo['heure'];
            $contentres = $resInfo['nom'];
            $imageres = $resInfo['email'];
            $imageequipe = $resInfo['equipe'];
            $imageloge = $resInfo['loge'];

        }else{
            $errorMsg = "Vous n'etes pas l'auteur de cette reservations et donc vous n'avez pas le droit de la modifier" ;
        }

    }else{
        $errorMsg = "Aucune reservations ne possède l'id en question !" ;
    }

}else{
    $errorMsg = "Aucun menu n'a été trouvé ! veuillez taper dans l'url l'id du menu avec ?id= " ;
}