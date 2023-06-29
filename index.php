<?php 
require_once('utils/utils.php');
require_once('utils/database.php');

$pdo = getPDO();

$resultats = $pdo->query('SELECT * FROM cars ORDER BY publication_date DESC');
$cars = $resultats->fetchAll();


/**
 * Affichage
 */
$pageTitle = 'Accueil';
require('templates/cars/show_html.php');
// Fonction render dans utils
render('cars/index', compact('pageTitle', 'cars'));
?>