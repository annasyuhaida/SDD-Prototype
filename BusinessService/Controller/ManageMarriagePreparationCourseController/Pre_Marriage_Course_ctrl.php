<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Pre_Marriage_Course_ctrl {
    

    public function PreMarriageList($Lid, $appID, $courseID) {
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();

        if($Lid == 0){
                // Get the users from the model
                $app = $model->getAppByID($appID);

            $course = $model->getMarriageCourseList();

            // Render the view and pass the data
            require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseList.php';
            $view = new PreMarriageCourseList();
            $view->render($course, $app);
        }
        else if($Lid == 1){
            // Get the user details from the model
            $app = $model->getAppByID($appID);

            $course = $model->getCourseById($courseID);

            // Render the view and pass the data
            require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseRegForm.php';
            $view = new PreMarriageCourseRegForm();
            $view->render($course, $app);
        }
        else if($Lid == 2){
            // Get the user details from the model
            $app = $model->getAppByID($appID);
            $courses = $app['pre_m_reg_ID'];
            $course = $model->getAppCourseByID($courses);
            echo "<script>console.log('Debug Objects: " . $course . "' );</script>";

            // Render the view and pass the data
            require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseView.php';
            $view = new PreMarriageCourseView();
            $view->render($course, $app);
        }
        
    }

    public function ApplyPreMarriage($appID, $courseID) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_1
            $model = new MarriagePreparationCourseModel();

            // Get the user data from the form
            $name = $_POST['name'];
            $IDnum = $_POST['IDnum'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $state = $_POST['state'];
            $district = $_POST['district'];
            $postcode = $_POST['postcode'];
            $address = $address1 . ', ' . $address2 . ', ' . $state . ', ' . $district . ', ' . $postcode;
            $employment = $_POST['employment'];
            $eduLevel = $_POST['eduLevel'];
            $gender = $_POST['gender'];
            $phoneno = $_POST['phoneno'];

            // Perform actions to create a user in the database
            $model->applyPreMarriage($appID, $courseID, $name, $IDnum, $age, $email, $address, $employment, $eduLevel, $gender, $phoneno);

            // Redirect to the getUsers action
            header('Location: index.php?action=PreMarriageList&Lid=2&appID='.$appID.'&courseID=0' );
            exit;
        }

        // Render the create user form view
        require '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseRegForm.php';
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