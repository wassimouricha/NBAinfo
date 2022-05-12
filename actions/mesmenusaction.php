<?php

//ici on va avec ces requetes prendre les données pour un auteur et les publié dans mes reservations.php

require('actions/database.php');

$getAllTheMenu = $bdd->prepare('SELECT id, date, heure, nom, email,equipe FROM booking WHERE id_auteur = ? ORDER BY id DESC');
$getAllTheMenu->execute(array($_SESSION['id']));
