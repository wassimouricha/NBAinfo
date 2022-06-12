<?php

//ici on va avec ces requetes prendre toutes les données de la table booking et les publier dans mes booked.php

require('actions/database.php');

$getAllTheBooked = $bdd->query('SELECT id, date, heure, nom, email,equipe,loge FROM booking  ORDER BY id DESC');