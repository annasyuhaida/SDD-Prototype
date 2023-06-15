<?php

require_once '../BusinessService/Model/Database.php';

class approveConsultationModel {
    private $db;

    public function __construct() {
    // Create a new instance of the Database class
    $this->db = new Database();
    }
    public function getUsers() {
    $query = "SELECT * FROM applicant";
    return $this->db->execute($query);
    }

    public function new_requestConsultationAction($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc)
    {
        $query = "INSERT INTO manageConsultation (consultation_ID, consultation_Purpose, marriageNo, consultation_Date, consultation_Time, consultation_Desc) VALUES ('$consultation_ID', '$consultation_Purpose', '$marriageNo', '$consultation_Date', '$consultation_Time', '$consultation_Desc')";
        return $this->db->execute($query);
    }

    public function requestConsultationAction($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc)
    {
        $query = "INSERT INTO manageConsultation (consultation_ID, consultation_Purpose, marriageNo, consultation_Date, consultation_Time, consultation_Desc) VALUES ('$consultation_ID', '$consultation_Purpose', '$marriageNo', '$consultation_Date', '$consultation_Time', '$consultation_Desc')";
        return $this->db->execute($query);
    }

    public function approveConsultationAction($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc)
    {
        $query = "INSERT INTO manageConsultation (consultation_ID, consultation_Purpose, marriageNo, consultation_Date, consultation_Time, consultation_Desc) VALUES ('$consultation_ID', '$consultation_Purpose', '$marriageNo', '$consultation_Date', '$consultation_Time', '$consultation_Desc')";
        return $this->db->execute($query);
    }
}

