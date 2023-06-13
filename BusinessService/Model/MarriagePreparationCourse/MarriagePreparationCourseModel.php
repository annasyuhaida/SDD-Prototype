<?php

require_once '../BusinessService/Model/Database.php';

class MarriagePreparationCourseModel {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    //Manage Marriage Course(Staff) 
    public function getMarriageCourseList() {
        $query = "SELECT * FROM pre_marriage_course";
        return $this->db->execute($query);
    }

    public function getCourseById($courseID) {
        $query = "SELECT * FROM pre_marriage_course WHERE pre_m_reg_ID = $courseID";
        return $this->db->execute($query)[0];
    }

    public function createMarriageCourse($organiser, $venue, $date, $officer, $series, $phoneno, $capacity) {
        $query = "INSERT INTO pre_marriage_course (pre_m_organiser, pre_m_venue	, pre_m_date, pre_m_officer, pre_m_series, pre_m_phone, pre_m_capacity) VALUES ('$organiser', '$venue', '$date', '$officer', '$series', '$phoneno', '$capacity')";
        return $this->db->execute($query);
    }

    public function editMarriageCourse($courseID, $organiser, $venue, $date, $officer, $series, $phoneno, $capacity) {
        $query = "UPDATE pre_marriage_course SET pre_m_organiser = '$organiser', pre_m_venue = '$venue', pre_m_date = '$date', pre_m_officer = '$officer', pre_m_series = '$series', pre_m_phone = '$phoneno', pre_m_capacity = '$capacity' WHERE pre_m_reg_ID = $courseId";
        return $this->db->execute($query);
    }

    public function deleteCourse($courseID) {
        $query = "DELETE FROM pre_marriage_course WHERE pre_m_reg_ID = $courseID";
        return $this->db->execute($query);
    }

    //Manage Pre Marriage Application(Applicant)
    public function applyPreMarriage($appId, $courseID, $name, $IDnum, $age, $email, $address, $employment, $eduLevel, $gender, $phoneno) {
        $query = "UPDATE applicant SET applicantName = '$name', pre_m_reg_ID = '$courseID', applicantIC = '$IDnum', applicantAge = '$age', applicantEmail = '$email', applicantAddress = '$address', applicantJob = '$employment', applicantEducationalLevel = '$eduLevel', applicantGender = '$gender', applicantPhoneNo = '$phoneno' WHERE applicantID = $appId";
        return $this->db->execute($query);
    }

    public function getAppByID($appID) {
        $query = "SELECT * FROM applicant WHERE applicantID = $appID";
        return $this->db->execute($query)[0];
    }
    public function getAppCourseByID($courses) {
        $query = "SELECT * FROM pre_marriage_course WHERE pre_m_reg_ID = $courses";
        return $this->db->execute($query);
    }

    public function deletePreMarriage($appId) {
        $query = $query = "UPDATE applicant SET applicantName = NULL, pre_m_reg_ID = NULL, applicantIC = NULL, applicantAge = NULL, applicantEmail = NULL, applicantAddress = NULL, applicantJob = NULL, applicantEducationalLevel = NULL, applicantGender = NULL, applicantPhoneNo = NULL WHERE applicantID = $appId";
        return $this->db->execute($query);
    }


    //Manage payment
    public function uploadPayment($appID, $category, $file) {
        $query = "INSERT INTO proof_of_payment (applicantID, p_category, p_file) VALUES ('$appID', '$category', '$file')";
        return $this->db->execute($query);
    }

    public function getPaymentByID($payID) {
        $query = "SELECT * FROM proof_of_payment WHERE paymentID = $payID";
        return $this->db->execute($query);
    }
}