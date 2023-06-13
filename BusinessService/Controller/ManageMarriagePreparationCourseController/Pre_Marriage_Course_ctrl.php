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
            header('Location: index.php?action=paymentForm&Lid=0&appID='.$appID.'&courseID='.$courseID);
            exit;
        }

        // Render the create user form view
        require '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseRegForm.php';
    }

    public function ViewPreMarriage($appID, $courseID) {
         
            // Create an instance of the Temp_Model_1
            $model = new MarriagePreparationCourseModel();

            $app = $model->getAppByID($appID);

            $course = $model->getCourseById($courseID);

            // Render the view and pass the data
            require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseDetailView.php';
            $view = new PreMarriageCourseDetailView();
            $view->render($course, $app);
    }
    
    public function EditPreMarriage($appID,$courseID) {
        
            // Create an instance of the Temp_Model_1
            $model = new MarriagePreparationCourseModel();

            $app = $model->getAppByID($appID);
            $courses = $app['pre_m_reg_ID'];

            $course = $model->getAppCourseByID($courses);

            require_once '../plugins/fpdf/generate_pdf.php';
            $view = new printpdf();
            $view->render($course, $app);
         
    }

    public function DeletePreMarriage($appID, $courseID) {
        // Create an instance of the Temp_Model_1
        $model = new MarriagePreparationCourseModel();

        // Perform actions to delete the user from the database
        $model->deletePreMarriage($appID, $courseID);

        // Redirect to the getUsers action
        header('Location: index.php?action=PreMarriageList&Lid=2&appID='.$appID.'&courseID=0');
        exit;
    }
}