<?php


//je vais faire une condition pour permettre de voir si l'utilisateur est authentifié
session_start();
if(!isset($_SESSION['auth'])){
    //si ma session est n'est pas authentifié alors je redirige vers login.php
    header('Location: login.php');
}