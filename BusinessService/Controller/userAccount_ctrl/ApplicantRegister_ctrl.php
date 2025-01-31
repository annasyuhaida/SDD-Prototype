<?php

require_once '../BusinessService/Model/userAccount/userAccount_model.php';

class ApplicantRegister_ctrl {

    // Fetches users
    public function getUsersAction() {
        // Create an instance of the userAccount_model
        $model = new userAccount_model();

        // Get the users from the model
        $users = $model->getApplicant();

        // Render the view and pass the data
        require_once '../App/View/user_account/ApplicantRegister.php';
        $view = new ApplicantRegister();
        $view->render($users);
    }

    // Handles the user registration process
    public function createAccountAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the userAccount_model
            $model = new userAccount_model();

            // Get the user data from the form
            $icnumber = $_POST['icnumber'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $phoneno = $_POST['phoneno'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Perform actions to create a user in the database
            $model->createAccount($icnumber, $name, $gender, $phoneno, $email, $password);

            // Redirect to the getUsers action (you might want to change this location if needed)
            header('Location: index.php?action=getApplicant');
            exit;
        }

        // Render the create user form view (if it's a GET request, show the form)
        require_once '../App/View/user_account/CreateAccountForm.php'; // Update this with the correct path to the registration form
    }
}
