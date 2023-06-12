<?php

class Database {
    private static $host = 'localhost';
    private static $dbName = 'pahang_marriage_system';
    private static $username = 'root';
    private static $password = '';
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbName, self::$username, self::$password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        
        return self::$connection;
    }

    public function execute($query) {
        $connection = self::connect();

        try {
            $statement = $connection->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Query execution failed: " . $e->getMessage());
        }
    }
}



?>
