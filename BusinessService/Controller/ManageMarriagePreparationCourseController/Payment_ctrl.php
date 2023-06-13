<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Payment_ctrl {
    
    public function UploadPayment($Lid, $appID, $courseID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

        if($Lid == 0){
            // Get the users from the model
            $app = $appID;

            $course = $courseID;

            // Render the view and pass the data
            require_once '../App/View/ManageMarriagePreparationCourse/PaymentForm.php';
            $view = new PaymentForm();
            $view->render($course, $app);
        }
        if($Lid == 1){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                // Get the user data from the form
                $image = $_FILES['file']['tmp_name'];
                $file = addslashes(file_get_contents($image));
                $category = "Pre Marriage Course";
                // Perform actions to create a user in the database
                $model->uploadPayment($appID, $category, $file);
    
                // Redirect to the getUsers action
                header('Location: index.php?action=PreMarriageList&Lid=2&appID='.$appID.'&courseID=0');
                exit;
            }
        }
    }

    public function ViewPayment($appID, $courseID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

    }

    //temp
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

  
}