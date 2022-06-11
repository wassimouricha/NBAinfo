<?php
// Session start va démarrer une session ou reprendre une session déjà existante 
session_start();

if(!isset($_SESSION['auth'])){
    header('Location : ../login.php');
}

require('database.php');
//la fonctions isset est une fonction php qui permet de savoir si une variable est bien déclaré
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //on va verifier si l'identifiant utilisé par l'utilisateur possede bien une question

    $idoftheres = $_GET['id'];
    //selectionner l'id_auteur d'une réservation  dans la table booking qui possède l'identifiant entré par l'utilisateur
    $checkifresexist = $bdd->prepare('SELECT id_auteur FROM booking WHERE id = ?');
    $checkifresexist->execute(array($idoftheres));

    //verifier si la réservation existe
    if($checkifresexist->rowCount() > 0){
            //avec cette variable et la methode fetch ça va me permettre de récuperer toutes les données lors de la requete
        $userinfo = $checkifresexist->fetch();
            if($userinfo[['id_auteur'] == $_SESSION['id']]){
                    //on dit de supprimer une reservation dans la table booking qui possede l'id de l'identifiant de notre reservation 
                    //($idoftheres qui est passé dans l'url)
                $deletethisres = $bdd->prepare('DELETE FROM booking WHERE id = ?');
                $deletethisres->execute(array($idoftheres));
                    
                header('location: ../mes-reservations.php'); //permet de rediriger vers la page mes-reservations.php lors de la fin de la fonction
            }else{
                echo "vous n'avez pas le droit de supprimer une reservation qui ne vous appartient pas !";
            }
    }else{
        echo "Aucune reservation n'a été trouvé !";
    }
}else{
    echo "Aucune reservation n'a été trouvé !";
}