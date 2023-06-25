<?php

require_once '../BusinessService/Model/ManageMarriageRequest/MarriageRequestModel.php';

class Request_Marriage_Status_ctrl {
    
    public function getApplicant() {
        // Create an instance of the MarriageRequestModel
        $model = new MarriageRequestModel();
        
        $request = $model->getApplication();

        require_once '../App/View/ManageMarriageRequest/ApproveRequestMarriageForm.php';
        $view = new ApproveRequestMarriageForm();
        $view->render($request);
    }
    
    public function ViewMarriageRequest($appID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriageRequestModel();
        $request = $model->updateAppPartReqID($appID);

        require_once '../App/View/ManageMarriageRequest/ViewRequestedMarriage.php';
        $view = new ViewRequestedMarriage();
        $view->render($request);
    
       
    }

    public function updateStatus($appID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriageRequestModel();

        $request = $model->printAppPartReqID($appID);

        $req = $request['req_marriage_ID'];

        $status = $model->updateStatus($req);

        header('Location: index.php?action=onlineVerify');
        exit;

       
    }
    
 
}