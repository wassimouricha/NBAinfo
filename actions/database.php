<?php
//try catch permet la gestion d'exception (fonctionne comme une fonction if else)
//try  facilite la saisie d'une exception potentielle et doit avoir  un bloc catch  correspondant.
try{
     //création d'une variable bdd 
    $bdd = new PDO('mysql:host=localhost;dbname=nba;charset=utf8;', 'root','');
}catch(Exception $e){
    die('une erreur à été trouvé : ' . $e->getMessage());  //je concatene le message avec la variable $e qui stock l'exception puis getmessage pour récuperer le message
}

// L'extension PHP Data Objects (PDO) définit une  interface pour accéder à une base de données depuis PHP.
// on donne le liens de sa base de donnée ici localhost , le nom de la base de donnée ici nba puis le nom d'utilisateur 
//de phpmyadmin et le mot de passe (ici il n'y en a pas)

