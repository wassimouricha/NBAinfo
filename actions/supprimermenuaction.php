<?php
// Session start va démarrer une session ou reprendre une session déjà existante 
session_start();

if(!isset($_SESSION['auth'])){
    header('Location : ../login.php');
}

require('database.php');
//la fonctions isset est une fonction php qui permet de savoir si une variable est bien déclaré
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //on va verifier si l'identifiant utiliser par l'utilisateur possede bien une question

    $idofthemenu = $_GET['id'];
    //selectionner l'id_auteur d'un menu dans la table menu qui possède l'identifiant entré par l'utilisateur
    $checkifmenuexist = $bdd->prepare('SELECT id_auteur FROM booking WHERE id = ?');
    $checkifmenuexist->execute(array($idofthemenu));

    //verifier si la question existe
    if($checkifmenuexist->rowCount() > 0){
            //avec cette variable et la methode fetch ça va me permettre de récuperer toutes les données lors de la requete
        $userinfo = $checkifmenuexist->fetch();
            if($userinfo[['id_auteur'] == $_SESSION['id']]){
                    //on dit de supprimer un menu dans la table menu qui possede l'id de l'identifiant de notre menu ($idofthemenu qui est passé dans l'url)
                $deletethismenu = $bdd->prepare('DELETE FROM booking WHERE id = ?');
                $deletethismenu->execute(array($idofthemenu));
            
                    
                header('location: ../mes-reservations.php'); //premet de rediriger vers la page mes-reservations.php lors de la fin de la fonction
            }else{
                echo "vous n'avez pas le droit de supprimer une reservation qui ne vous appartient pas !";
            }

    }else{
        echo "Aucune reservation n'a été trouvé !";
    }

}else{
    echo "Aucune reservation n'a été trouvé !";
}