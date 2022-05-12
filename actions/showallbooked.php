<?php

//ici on va avec ces requetes prendre les données pour un auteur et les publié dans mes allprofile.php

require('actions/database.php');

$getAllTheBooked = $bdd->query('SELECT id, date, heure, nom, email,equipe FROM booking  ORDER BY id DESC');