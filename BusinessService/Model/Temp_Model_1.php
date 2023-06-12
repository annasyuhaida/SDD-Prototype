<?php

require_once '../BusinessService/Model/Database.php';

class Temp_Model_1 {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    public function getUsers() {
        $query = "SELECT * FROM users";
        return $this->db->execute($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = $id";
        return $this->db->execute($query)[0];
    }

    public function createUser($name, $email, $password) {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        return $this->db->execute($query);
    }

    public function updateUser($id, $name, $email, $password) {
        $query = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";
        return $this->db->execute($query);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = $id";
        return $this->db->execute($query);
    }
}