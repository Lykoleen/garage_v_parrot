<?php

require_once('utils/database.php');
//Récupération du param id et vérification de celui-ci
//On part du principe qu'on ne possède pas de param "id"

$car_id = null;

//Mais si il y en a un et que c'est un entier, alors c'est ok.
if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $car_id = $_GET['id'];
}

//Erreur si les conditions ne sont pa respectées.
if (!$car_id) {
    die("Vous devez préciser un paramètre 'id' dans l'url !");
} 

?>