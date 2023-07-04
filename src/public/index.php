<?php 
require_once('../Utils/utils.php');
require('../vendor/autoload.php');
// define('ROOT', dirname(__DIR__));
// require_once ROOT . '../vendor/autoload.php';
use App\Models\CarModel;

// use App\Car;

$model = new CarModel;
$cars = $model->findAll();

$id_car = 2;
var_dump($id_car);
$car = $model->find($id_car);
var_dump($car);
// echo "<pre>";
// var_dump($car);
// die;
// echo "</pre>";

// $my_car = new Car(120, "BMW 120 D", "2007", 215000, 6000, "Boite auto, clim.. Assez puissant mais souvent en panne.. Das auto !");
// $my_car->presentation();




/**
 * Affichage
 */
$pageTitle = 'Accueil';
require('../Views/cars/show_html.php');
// Fonction render dans utils
render('cars/index', compact('pageTitle', 'cars'));


//Faire tous les models pour chaque table;
//Pour les tester, je peux teset dans le index.php tous les models et les fonctions de model.php
//par exemple CarController, son rôle sera de faire les requêtes bdd. (findall / find) et de les renvoyer à la vue.
//Par exemple, faire une function index(ci-dessus) {Afficher toutes les annonces}.
?>
