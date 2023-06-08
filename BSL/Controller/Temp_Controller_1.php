<?php

require_once '../BSL/Model/Temp_Model_1.php';

class Temp_Controller_1 {
    

    public function getUsersAction() {
        // Create an instance of the Temp_Model_1
        $model = new Temp_Model_1();

        // Get the users from the model
        $users = $model->getUsers();

        // Render the view and pass the data
        require_once '../App/View/Temp_View_1.php';
        $view = new Temp_View_1();
        $view->render($users);
    }

    public function createUserAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_1
            $model = new Temp_Model_1();

            // Get the user data from the form
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Perform actions to create a user in the database
            $model->createUser($name, $email, $password);

            // Redirect to the getUsers action
            header('Location: index.php?action=getUsers');
            exit;
        }

        // Render the create user form view
        require '../App/View/CreateUserForm.php';
    }

    public function editUserAction() {
        // Create an instance of the Temp_Model_1
        $model = new Temp_Model_1();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the user data from the form
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Perform actions to update the user in the database
            $model->updateUser($id, $name, $email, $password);

            // Redirect to the getUsers action
            header('Location: index.php?action=getUsers');
            exit;
        } else {
            // Get the user ID from the query string
            $id = $_GET['id'];

            // Get the user details from the model
            $user = $model->getUserById($id);

            // Render the edit user form view and pass the user data
            require '../App/View/EditUserForm.php';
        }
    }

    public function deleteUserAction() {
        // Create an instance of the Temp_Model_1
        $model = new Temp_Model_1();

        // Get the user ID from the query string
        $id = $_GET['id'];

        // Perform actions to delete the user from the database
        $model->deleteUser($id);

        // Redirect to the getUsers action
        header('Location: index.php?action=getUsers');
        exit;
    }
}