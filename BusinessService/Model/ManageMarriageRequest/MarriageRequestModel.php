<?php

require_once '../BusinessService/Model/Database.php';

class MarriageRequestModel {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }

    //Apply Marriage Request
    public function getAppByID($appID) {
        $query = "SELECT * FROM applicant WHERE applicantID = $appID";
        return $this->db->execute($query)[0];
    }
    public function getReqpByID($reqID) {
        $query = "SELECT * FROM request_marriage WHERE req_marriage_ID = $reqID";
        return $this->db->execute($query)[0];
    }
    public function getPartByID($partID) {
        $query = "SELECT * FROM partner WHERE partnerID = $partID";
        return $this->db->execute($query)[0];
    }

    public function getMarriageRequestListByID($reqID){
        $query = "SELECT * FROM request_marriage WHERE req_marriage_ID = $reqID";
        return $this->db->execute($query);
    }

    public function createMarriageRequest($applicantID, $applicantPhoneNo, $applicantstat, $applicantJob, $applicantDOB, $applicantEmploymentSector, $applicantAge, $applicantIncome, $applicantGender, $applicantRace, $applicantAddress) {
        $query = "UPDATE applicant SET applicantPhoneNo = '$applicantPhoneNo', applicantEducationalLevel = '$applicantstat', applicantJob = '$applicantJob', applicantDOB = '$applicantDOB', applicantEmploymentSector = '$applicantEmploymentSector', applicantAge = '$applicantAge', applicantIncome = '$applicantIncome', applicantGender = '$applicantGender', applicantRace = '$applicantRace', applicantAddress = '$applicantAddress  ' WHERE applicantID = $applicantID";
        return $this->db->execute($query);
    }


    public function getPartnerByID() {
        $query = "SELECT *
        FROM partner
        ORDER BY partnerID DESC
        LIMIT 1;";
        return $this->db->execute($query)[0];
    }
    
    public function getReqByID() {
        $query = "SELECT *
        FROM request_marriage
        ORDER BY req_marriage_ID DESC
        LIMIT 1;";
        return $this->db->execute($query)[0];
    }

    public function createPartnerData($partnerEducationalLevel, $partnerIC, $partnerEmploymentSector, $partnerJob, $partnerName, $partnerIncome, $partnerDOB, $partnerAge, $partnerPhoneNo, $partnerGender, $partnerEmail, $partnerRace, $partnerWorkplaceAddress, $partnerAddress) {
        $query = "INSERT INTO partner (partnerEducationalLevel, partnerIC, partnerEmploymentSector, partnerJob, partnerName, partnerIncome, partnerDOB, partnerAge, partnerPhoneNo, partnerGender, partnerEmail, partnerRace, partnerWorkplaceAddress, partnerAddress) VALUES ('$partnerEducationalLevel', '$partnerIC', '$partnerEmploymentSector', '$partnerJob', '$partnerName', '$partnerIncome', '$partnerDOB', '$partnerAge', '$partnerPhoneNo', '$partnerGender', '$partnerEmail', '$partnerRace', '$partnerWorkplaceAddress', '$partnerAddress')";
        return $this->db->execute($query);
    }

    public function createReqMarriageData($partnerEducationalLevel, $partnerIC, $partnerEmploymentSector, $partnerJob, $partnerName, $partnerIncome, $partnerDOB, $partnerAge, $partnerPhoneNo, $partnerGender, $partnerEmail, $partnerRace, $partnerWorkplaceAddress, $partnerAddress) {
        $query = "INSERT INTO partner (partnerEducationalLevel, partnerIC, partnerEmploymentSector, partnerJob, partnerName, partnerIncome, partnerDOB, partnerAge, partnerPhoneNo, partnerGender, partnerEmail, partnerRace, partnerWorkplaceAddress, partnerAddress) VALUES ('$partnerEducationalLevel', '$partnerIC', '$partnerEmploymentSector', '$partnerJob', '$partnerName', '$partnerIncome', '$partnerDOB', '$partnerAge', '$partnerPhoneNo', '$partnerGender', '$partnerEmail', '$partnerRace', '$partnerWorkplaceAddress', '$partnerAddress')";
        return $this->db->execute($query);
    }

    public function createNewMarriageRequest($appID, $rm_Country,$rm_Date, $rm_Mahr_Amount, $rm_Address, $rm_Mahr_Type, $rm_Witness_name, $rm_Witness_IC, $rm_Witness_Address, $rm_Witness_Phone_No, $rm_Marriage_Category) {
        $query = "INSERT INTO request_marriage (applicantID, rm_Country, rm_Date, rm_Mahr_Amount, rm_Address, rm_Mahr_Type, rm_Witness_name, rm_Witness_IC, rm_Witness_Address, rm_Witness_Phone_No, rm_Marriage_Category) VALUES ('$appID', '$rm_Country', '$rm_Date', '$rm_Mahr_Amount', '$rm_Address', '$rm_Mahr_Type', '$rm_Witness_name', '$rm_Witness_IC', '$rm_Witness_Address', '$rm_Witness_Phone_No', '$rm_Marriage_Category')";
        return $this->db->execute($query);
    }

    public function updateMarriageRequest( $rm_Country,$rm_Date, $rm_Mahr_Amount, $rm_Address, $rm_Mahr_Type, $rm_Witness_name, $rm_Witness_IC, $rm_Witness_Address, $rm_Witness_Phone_No, $rm_Marriage_Category) {
        $query = "INSERT INTO request_marriage ( rm_Country, rm_Date, rm_Mahr_Amount, rm_Address, rm_Mahr_Type, rm_Witness_name, rm_Witness_IC, rm_Witness_Address, rm_Witness_Phone_No, rm_Marriage_Category) VALUES ('$rm_Country', '$rm_Date', '$rm_Mahr_Amount', '$rm_Address', '$rm_Mahr_Type', '$rm_Witness_name', '$rm_Witness_IC', '$rm_Witness_Address', '$rm_Witness_Phone_No', '$rm_Marriage_Category')";
        return $this->db->execute($query);
    }

    public function updateAppPartnerID($app,$partnerID){
        $query = "UPDATE applicant SET partnerID = '$partnerID' WHERE applicantID = '$app'";
        return $this->db->execute($query);
    }

    public function updateAppReqID($app,$reqID){
        $query = "UPDATE applicant SET req_marriage_ID = '$reqID' WHERE applicantID = '$app'";
        return $this->db->execute($query);
    }

    public function deleteAppPartnerID($app){
        $query = "UPDATE applicant SET partnerID = NULL WHERE applicantID = '$app'";
        return $this->db->execute($query);
    }

    public function deleteAppReqID($app){
        $query = "UPDATE applicant SET req_marriage_ID = NULL WHERE applicantID = '$app'";
        return $this->db->execute($query);
    }

    public function updateAppPartReqID($appID){
        $query="SELECT *
                FROM applicant
                JOIN partner ON applicant.partnerID = partner.partnerID
                JOIN request_marriage ON applicant.req_marriage_ID = request_marriage.req_marriage_ID
                WHERE applicant.applicantID = '$appID' ;";
        return $this->db->execute($query);
    }

    public function getApplication(){
        $query="SELECT *
                FROM applicant
                JOIN partner ON applicant.partnerID = partner.partnerID
                JOIN request_marriage ON applicant.req_marriage_ID = request_marriage.req_marriage_ID";
        return $this->db->execute($query);
    }

    public function printAppPartReqID($appID){
        $query="SELECT *
                FROM applicant
                JOIN partner ON applicant.partnerID = partner.partnerID
                JOIN request_marriage ON applicant.req_marriage_ID = request_marriage.req_marriage_ID
                WHERE applicant.applicantID = '$appID' ;";
        return $this->db->execute($query)[0];
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

    public function updateStatus($req){
        $query = "UPDATE request_marriage SET rm_req_approval = 'Approved' WHERE applicantID = '$req'";
        return $this->db->execute($query);
    }
}

?>