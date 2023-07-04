<?php

namespace App\Utils;

use PDO;

use PDOException;

class Database extends PDO 
{
    protected static $instance;


    public function __construct()
    {
        $dsn = 'mysql:dbname=garage_v_parrot;host=localhost';

        try {
            parent::__construct($dsn, 'root', '');
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * Singleton instance pdo
     *
     * @return self
     */
    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}


?>

