<?php


/**
 * Retourne la connexion à notre BDD
 *
 * @return PDO
 */
function getPDO(): PDO 
{
    $pdo = new PDO('mysql:host=localhost;dbname=garage_v_parrot', 'root', '', [
    PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

return $pdo;
}
?>