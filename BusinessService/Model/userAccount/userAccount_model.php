<?php

require_once '../BusinessService/Model/Database.php';

class userAccount_model {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    public function getUsers() {
        $query = "SELECT * FROM applicant";
        return $this->db->execute($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM applicant WHERE id = $id";
        return $this->db->execute($query)[0];
    }

    public function createAccount($icnumber,$name,$gender,$phoneno,$email, $password) {
        $query = "INSERT INTO applicant (applicantIC, applicantName, applicantGender, applicantphoneNo,applicantEmail, password) VALUES ('$icnumber', '$name', '$gender', '$phoneno','$email', '$password')";
        return $this->db->execute($query);
    }

}