<?php
namespace App\Models;
require_once('../Utils/Database.php');

use App\Utils\Database;

abstract class Model extends Database
{
    protected string $table; //
    protected $database;

    /**
     * Retourne la liste des voitures par date de création
     *
     * @return array
     */
    public function findAll(): array
    {
        $this->database = Database::getInstance();
        $query = $this->database->query('SELECT * FROM cars ORDER BY publication_date DESC');
        return $query->fetchAll();
    }

    /**
     * Retourne une voiture selon son id
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        // $id = $_GET['id'];
        $this->database = Database::getInstance();
        $query = $this->database->prepare('SELECT * FROM cars WHERE id = :id');
        $query->bindValue(':id', $id, Database::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }
}

?>