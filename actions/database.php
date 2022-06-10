<?php
//try catch fonctionne comme une fonction if else
try{
     //création d'une variable bdd 
    $bdd = new PDO('mysql:host=localhost;dbname=nba;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('une erreur à été trouvé : ' . $e->getMessage());  //je concatene le message avec la variable $e qui stock l'exception puis get message pour récuperer le message
}

// la classe PDO est une classe qui va nous permettre de faire des requetes SQL 
// on donne le liens de sa base de donnée ici localhost , le nom de la base de donnée ici nba puis le nom d'utilisateur 
//de phpmyadmin et le mot de passe (ici il n'y en a pas)

