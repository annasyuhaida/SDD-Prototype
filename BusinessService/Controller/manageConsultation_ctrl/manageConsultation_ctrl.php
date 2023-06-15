<?php

class manageConsultation_ctrl
{   
    private $model;
    public function approveConsultation($marriageNo){
        return $this->model->approveConsultationModel($marriageNo);
    }
    public function new_requestConsultation($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc)
    {
        $this->model->New_requestConsultationModel($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc);
    }
    public function receiveConsultation($consultaion_ID){
        return $this->model->ReceiveConsultationList();
    }
    public function rejectConsultation(){
        return $this->model->RejectConsultationList();
    }

    public function requestConsultationAction($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_1
            $model = new manageConsultationModel();

            // Get the user data from the form
            $consultation_ID = $_POST['consultation_ID'];
            $consultation_Purpose = $_POST['consultation_Purpose'];
            $marriageNo = $_POST['marriage'];
            $consultation_Date = $_POST['consultation_Date'];
            $consultation_Time = $_POST['consultation_Time'];
            $consultation_Desc = $_POST['consultation_Desc'];

            // Perform actions to create a user in the database
            $model->requestConsultation($consultation_ID, $consultation_Purpose ,$marriageNo ,$consultation_Date ,$consultation_Time , $consultation_Desc);

            // Redirect to the getUsers action
            header('Location: index.php?action=getUsers');
             exit;
        }
    }
    
    public function AdminReceiveConsultation($consultaion_ID){
        return $this->model->AdminReceiveConsultationList($consultaion_ID);
    }
}