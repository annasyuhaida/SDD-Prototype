<?php

require_once '../BusinessService/Model/ManageRegistration/RegistrationModel.php';

class SaveDoc_ctrl {
    

    public function getUsersAction() {
        // Create an instance of the Temp_Model_1
        $model = new RegistrationModel();

        // Get the users from the model
        $users = $model->getUsers();

        // Render the view and pass the data
        require_once '../App/View/ManageRegistration/persetujuan_wali.php';
        $view = new persetujuan_wali();
        $view->render($users);
    }

    public function createDocAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_1
            $model = new RegistrationModel();

            // Get the user data from the form
            $waliname = $_POST['waliname'];
            $waliIC=$_POST['waliIC'];
            $relationship=$_POST['relationship'];
            $bridename=$_POST['bridename'];
            $groomname = $_POST['groomname'];
            $dowry = $_POST['dowry'];
            $date = $_POST['date'];

            // Perform actions to create a user in the database
            $model->createDoc($waliname, $waliIC ,$relationship ,$bridename ,$groomname , $dowry, $date);

            // Redirect to the getUsers action
            header('Location: index.php?action=getUsers');
            exit;
        }

        
    }

}