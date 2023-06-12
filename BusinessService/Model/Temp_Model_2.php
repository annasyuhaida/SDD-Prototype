<?php

require_once '../BusinessService/Model/Database.php';

class Temp_Model_2 {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    public function getProducts() {
        $query = "SELECT * FROM products";
        return $this->db->execute($query);
    }

    public function getProductById($id) {
        $query = "SELECT * FROM products WHERE id = $id";
        return $this->db->execute($query)[0];
    }

    public function createProduct($name, $price) {
        $query = "INSERT INTO products (name, price) VALUES ('$name', $price)";
        return $this->db->execute($query);
    }

    public function updateProduct($id, $name, $price) {
        $query = "UPDATE products SET name = '$name', price = $price WHERE id = $id";
        return $this->db->execute($query);
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM products WHERE id = $id";
        return $this->db->execute($query);
    }
}
