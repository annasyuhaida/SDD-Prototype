<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Marriage_Course_Details_ctrl {
    

    public function MarriageCourseList() {
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();

        // Get the users from the model
        $course = $model->getMarriageCourseList();

        // Render the view and pass the data
        require_once '../App/View/ManageMarriagePreparationCourse/MarriageCourseDetailsList.php';
        $view = new MarriageCourseDetailsList();
        $view->render($course);
    }

    public function CreateMarriageCourse() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_1
            $model = new MarriagePreparationCourseModel();

            // Get the user data from the form
            $organiser = $_POST['organiser'];
            $venue = $_POST['venue1']. $_POST['venue2'];
            $date = $_POST['date'];
            $capacity = $_POST['capacity'];
            $officer = $_POST['officer'];
            $series = $_POST['series'];
            $phoneno = $_POST['phoneno'];

            // Perform actions to create a user in the database
            $model->createMarriageCourse($organiser, $venue, $date, $officer, $series, $phoneno, $capacity);

            // Redirect to the getUsers action
            header('Location: index.php?action=getMarriageCourseList');
            exit;
        }

        // Render the create user form view
        require '../App/View/ManageMarriagePreparationCourse/MarriageCourseDetailsForm.php';
    }

    public function getMarriageCourse($courseID) {
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();
        // Get the user details from the model
        $course = $model->getCourseById($courseID);

        // Render the view and pass the data
        require_once '../App/View/ManageMarriagePreparationCourse/UpdateMarriageCourseDetailsForm.php';
        $view = new UpdateMarriageCourseDetailsForm();
        $view->render($course);
    }

    
    public function EditMarriageCourse($courseID) {
        
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Get the user data from the form
            $organiser = $_POST['organiser'];
            $venue = $_POST['venue1']. $_POST['venue2'];
            $date = $_POST['date'];
            $capacity = $_POST['capacity'];
            $officer = $_POST['officer'];
            $series = $_POST['series'];
            $phoneno = $_POST['phoneno'];

            // Perform actions to create a user in the database
            $model->editMarriageCourse($courseID, $organiser, $venue, $date, $officer, $series, $phoneno, $capacity);

            // Redirect to the getUsers action
            header('Location: index.php?action=getMarriageCourseList');
            exit;
        } 
    }

    public function DeleteMarriageCourse($courseID) {
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();

        // Perform actions to delete the user from the database
        $model->deleteCourse($courseID);

        // Redirect to the getUsers action
        header('Location: index.php?action=getMarriageCourseList');
        exit;
    }
}