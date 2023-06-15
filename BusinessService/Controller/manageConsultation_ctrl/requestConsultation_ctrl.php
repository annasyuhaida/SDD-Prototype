<?php
require_once '../BusinessService/Model/manageConsultation/manageConsultationModel.php';

class requestConsultation_ctrl {

    public function getUsersAction() {
        // Create an instance of the Temp_Model_1
        $model = new manageConsultationModel();

        // Get the users from the model
        $users = $model->getUsers();

        // Render the view and pass the data
        require_once '../App/View/ManageRegistration/requestConsultation.php';
        $view = new requestConsultation();
        $view->render($users);
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
}