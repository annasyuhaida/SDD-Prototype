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
    public function updatePreID($course,$appID) {
        $query = "UPDATE applicant SET  pre_m_reg_ID = '$courseID' WHERE applicantID = $appID";
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
        $query = $query = "UPDATE applicant SET  pre_m_reg_ID = 0 WHERE applicantID = $appId";
        return $this->db->execute($query);
    }


    //Manage payment
    public function uploadPayment($appID, $category, $file) {
        $query = "INSERT INTO proof_of_payment (applicantID, p_category, p_file) VALUES ('$appID', '$category', '$file')";
        return $this->db->execute($query);
    }

    public function getPaymentByID($applicant) {
        $query = "SELECT * FROM proof_of_payment WHERE applicantID = $applicant";
        return $this->db->execute($query);
    }

    //Manage Participant
    public function getParticipantByCourseID() {
        $query = "SELECT * FROM applicant JOIN pre_marriage_course ON applicant.pre_m_reg_ID = pre_marriage_course.pre_m_reg_ID";
        return $this->db->execute($query);
    }

    public function approveParticipant($courseID,$course) {
        $query = "UPDATE pre_marriage_course SET pre_m_reg_approval = '$course' WHERE pre_m_reg_ID ='$courseID' ";
        return $this->db->execute($query);
    }

    //Manage Attendance
    public function getCourseByseriesorganiser($organiser,$series) {
        $query = "SELECT * FROM  pre_marriage_course WHERE pre_m_organiser = '$organiser' AND pre_m_series = '$series'";
        return $this->db->execute($query)[0];
    }

    public function getParticipantByID($course) {
        $query = "SELECT * FROM applicant WHERE pre_m_reg_ID = '$course'";
        return $this->db->execute($query);
    }

    public function insertAttendance($attendanceValue, $note) {
        $query = "INSERT INTO attendance (attendance_status, attendance_note) VALUES ('$attendanceValue', '$note')";
        return $this->db->execute($query);
    }

    public function getAttendance() {
        $query = "SELECT *
        FROM attendance
        ORDER BY attendanceID DESC
        LIMIT 1;";
        return $this->db->execute($query)[0];
    }

    public function updateApplicantAttendanceID($applicantID, $getattendanceID) {
        $query = "UPDATE applicant SET attendanceID = $getattendanceID WHERE applicantID = $applicantID";
        return $this->db->execute($query);
    
    }
}