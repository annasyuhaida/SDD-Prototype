<?php

require_once '../BusinessService/Model/ManageMarriageRequest/MarriageRequestModel.php';

class Requested_Marriage_ctrl {



    public function getApplicant($Lid,$appID){
        $model = new MarriageRequestModel();
        if($Lid == 0){
            $apps = $model->getAppByID($appID);
            
            require_once '../App/View/ManageMarriageRequest/RequestMarriageForm.php' ;
            $view = new RequestMarriageForm();
            $view->render($apps,$Lid,$appID);
        }
        if($Lid == 1){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                // Get the user data from the form
                $applicantPhoneNo = $_POST['applicantPhoneNo'];
                $applicantstat = $_POST['applicantEducationLevel'];
                $applicantJob = $_POST['applicantJob'];
                $applicantDOB = $_POST['applicantDOB'];
                $applicantEmploymentSector = $_POST['applicantEmploymentSector'];
                $applicantAge = $_POST['applicantAge'];
                $applicantIncome = $_POST['applicantIncome'];
                $applicantGender = $_POST['applicantGender'];
                $applicantRace = $_POST['applicantRace'];
                $applicantAddress = $_POST['applicantAddress'];

                echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->createMarriageRequest($appID, $applicantPhoneNo, $applicantstat, $applicantJob, $applicantDOB, $applicantEmploymentSector, $applicantAge, $applicantIncome, $applicantGender, $applicantRace, $applicantAddress);
                
                $apps = $model->getAppByID($appID);
                
                require_once '../App/View/ManageMarriageRequest/RequestMarriageForm.php' ;
                $view = new RequestMarriageForm();
                $view->render($apps,$Lid,$appID);

                exit;
            }
        }
        if($Lid == 2){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                // Get the user data from the form
                $partnerEducationalLevel = $_POST['partnerEducationalLevel'];
                $partnerIC = $_POST['partnerIC'];
                $partnerEmploymentSector = $_POST['partnerEmploymentSector'];
                $partnerJob = $_POST['partnerJob'];
                $partnerName = $_POST['partnerName'];
                $partnerIncome = $_POST['partnerIncome'];
                $partnerDOB = $_POST['partnerDOB'];
                $partnerAge = $_POST['partnerAge'];
                $partnerPhoneNo = $_POST['partnerPhoneNo'];
                $partnerGender = $_POST['partnerGender'];
                $partnerEmail = $_POST['partnerEmail'];
                $partnerRace = $_POST['partnerRace'];
                $partnerRace = $_POST['partnerRace'];
                $partnerCitizenship = $_POST['partnerCitizenship'];
                $partnerAddress = $_POST['partnerAddress'];

                //echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->createPartnerData($partnerEducationalLevel, $partnerIC, $partnerEmploymentSector, $partnerJob, $partnerName, $partnerIncome, $partnerDOB, $partnerAge, $partnerPhoneNo, $partnerGender, $partnerEmail, $partnerRace, $partnerWorkplaceAddress, $partnerAddress);
                $apps = $model->getAppByID($appID);

                $partner = $model->getPartnerByID();
                $partnerID = $partner['partnerID'];
                $model->updateAppPartnerID($appID,$partnerID);
                require_once '../App/View/ManageMarriageRequest/RequestMarriageForm.php' ;
                $view = new RequestMarriageForm();
                $view->render($apps,$Lid,$appID);

                exit;
            }
        }
        if($Lid == 3){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Get the user data from the form
                $rm_Country = $_POST['rm_Country'];
                $rm_Date = $_POST['rm_Date'];
                $rm_Mahr_Amount = $_POST['rm_Mahr_Amount'];
                $rm_Address = $_POST['rm_Address'];
                $rm_Mahr_Type = $_POST['rm_Mahr_Type'];
                $rm_Witness_name = $_POST['rm_Witness_name'];
                $rm_Witness_IC = $_POST['rm_Witness_IC'];
                $rm_Witness_Address = $_POST['rm_Witness_Address'];
                $rm_Witness_Phone_No = $_POST['rm_Witness_Phone_No'];
                $rm_Marriage_Category = $_POST['rm_Marriage_Category'];

                //echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->createNewMarriageRequest($rm_Country,$rm_Date, $rm_Mahr_Amount, $rm_Address, $rm_Mahr_Type, $rm_Witness_name, $rm_Witness_IC, $rm_Witness_Address, $rm_Witness_Phone_No, $rm_Marriage_Category);
                
                $request = $model->getReqByID();
                echo "<script>console.log('Debug Objects: " . $request['req_marriage_ID'] . "' );</script>";
                $reqID = $request['req_marriage_ID'];
                $model->updateAppReqID($appID,$reqID);

                header('Location: index.php?action=requestMarriageListStaff&appID='.$appID);
                exit;
            }
        }
        if($Lid == 4){

            
        }

    }


    public function EditMarriageRequest($Lid,$appID,$reqID) {
        $model = new MarriageRequestModel();

        if($Lid == 0){
            $all = $model->updateAppPartReqID($appID);
            
            require_once '../App/View/ManageMarriageRequest/EditRequestedMarriageForm.php' ;
            $view = new EditRequestedMarriageForm();
            $view->render($all,$Lid,$reqID,$appID);
        }
        if($Lid == 1){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                // Get the user data from the form
                $applicantPhoneNo = $_POST['applicantPhoneNo'];
                $applicantstat = $_POST['applicantEducationLevel'];
                $applicantJob = $_POST['applicantJob'];
                $applicantDOB = $_POST['applicantDOB'];
                $applicantEmploymentSector = $_POST['applicantEmploymentSector'];
                $applicantAge = $_POST['applicantAge'];
                $applicantIncome = $_POST['applicantIncome'];
                $applicantGender = $_POST['applicantGender'];
                $applicantRace = $_POST['applicantRace'];
                $applicantAddress = $_POST['applicantAddress'];

                echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->createMarriageRequest($applicantPhoneNo, $applicantstat, $applicantJob, $applicantDOB, $applicantEmploymentSector, $applicantAge, $applicantIncome, $applicantGender, $applicantRace, $applicantAddress);
                
                $apps = $model->getAppByID($appID);
                $all = $model->updateAppPartReqID($appID);
            
                require_once '../App/View/ManageMarriageRequest/EditRequestedMarriageForm.php' ;
                $view = new EditRequestedMarriageForm();
                $view->render($all,$Lid,$reqID,$appID);
    

                exit;
            }
        }
        if($Lid == 2){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                // Get the user data from the form
                $partnerEducationalLevel = $_POST['partnerEducationalLevel'];
                $partnerIC = $_POST['partnerIC'];
                $partnerEmploymentSector = $_POST['partnerEmploymentSector'];
                $partnerJob = $_POST['partnerJob'];
                $partnerName = $_POST['partnerName'];
                $partnerIncome = $_POST['partnerIncome'];
                $partnerDOB = $_POST['partnerDOB'];
                $partnerAge = $_POST['partnerAge'];
                $partnerPhoneNo = $_POST['partnerPhoneNo'];
                $partnerGender = $_POST['partnerGender'];
                $partnerEmail = $_POST['partnerEmail'];
                $partnerRace = $_POST['partnerRace'];
                $partnerRace = $_POST['partnerRace'];
                $partnerCitizenship = $_POST['partnerCitizenship'];
                $partnerAddress = $_POST['partnerAddress'];

                //echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->createPartnerData($partnerEducationalLevel, $partnerIC, $partnerEmploymentSector, $partnerJob, $partnerName, $partnerIncome, $partnerDOB, $partnerAge, $partnerPhoneNo, $partnerGender, $partnerEmail, $partnerRace, $partnerWorkplaceAddress, $partnerAddress);
                $apps = $model->getAppByID($appID);

                $partner = $model->getPartnerByID();
                $partnerID = $partner['partnerID'];
                $model->updateAppPartnerID($appID,$partnerID);
                $all = $model->updateAppPartReqID($appID);
            
                require_once '../App/View/ManageMarriageRequest/EditRequestedMarriageForm.php' ;
                $view = new EditRequestedMarriageForm();
                $view->render($all,$Lid,$reqID,$appID);
    

                exit;
            }
        }
        if($Lid == 3){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Get the user data from the form
                $rm_Country = $_POST['rm_Country'];
                $rm_Date = $_POST['rm_Date'];
                $rm_Mahr_Amount = $_POST['rm_Mahr_Amount'];
                $rm_Address = $_POST['rm_Address'];
                $rm_Mahr_Type = $_POST['rm_Mahr_Type'];
                $rm_Witness_name = $_POST['rm_Witness_Name'];
                $rm_Witness_IC = $_POST['rm_Witness_IC'];
                $rm_Witness_Address = $_POST['rm_Witness_Address'];
                $rm_Witness_Phone_No = $_POST['rm_Witness_Phone_No'];
                $rm_Marriage_Category = $_POST['rm_Marriage_Category'];

                //echo "<script>console.log('Debug Objects: " . $applicantPhoneNo . "' );</script>";
                // Perform actions to create a user in the database
                $model->updateMarriageRequest($rm_Country,$rm_Date, $rm_Mahr_Amount, $rm_Address, $rm_Mahr_Type, $rm_Witness_name, $rm_Witness_IC, $rm_Witness_Address, $rm_Witness_Phone_No, $rm_Marriage_Category);
                
                $request = $model->getReqByID();
                echo "<script>console.log('Debug Objects: " . $request['req_marriage_ID'] . "' );</script>";
                $reqID = $request['req_marriage_ID'];
                $model->updateAppReqID($appID,$reqID);

                header('Location: index.php?action=requestMarriageListStaff&appID='.$appID);
                exit;
            }
        }
    }
    



    public function ViewMarriageRequest($appID) {
        $model = new MarriageRequestModel();

        $request = $model->updateAppPartReqID($appID);

        require_once '../App/View/ManageMarriageRequest/ViewRequestedMarriage.php';
        $view = new ViewRequestedMarriage();
        $view->render($request);
    }



    public function MarriageRequestList($appID) {
        $model = new MarriageRequestModel();
        $all = $model->getApplication();

        require_once '../App/View/ManageMarriageRequest/MarriageApplicantList.php' ;
            $view = new MarriageApplicantList();
            $view->render($all);
    }

    public function DeleteMarriageRequest($appID) {
        $model = new MarriageRequestModel();
        $model->deleteAppPartnerID($appID);
        $model->deleteAppReqID($appID);
    }

 
}