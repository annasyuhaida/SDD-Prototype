<?php

require_once '../BusinessService/Model/Database.php';

class RegistrationModel {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    public function getUsers() {
        $query = "SELECT * FROM registration";
        return $this->db->execute($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM registration WHERE id = $id";
        return $this->db->execute($query)[0];
    }

    public function createDoc($waliname,$waliIC,$relationship,$bridename,$groomname, $dowry, $date) {
        $query = "INSERT INTO registration (waliname, waliIC, relationship, bridename, groomname, dowry, date) VALUES ('$waliname', '$waliIC', '$relationship', '$bridename','$groomname', '$dowry', '$date')";
        return $this->db->execute($query);
    }

}