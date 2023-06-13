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
    
        $app = $model->getAppByID($appID);
        $applicant = $app['pre_m_reg_ID'];
    
        $payment = $model->getPaymentByID($applicant);
        foreach($payment as $payment){
            
            $filePath = $payment['p_file'];
            $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    
            // Set the appropriate content type header
            if (getimagesize($filePath)) {
                header('Content-Type: image/jpeg');
            } else if ($fileExtension === 'pdf') {
                header('Content-Type: application/pdf');
            } else {
                echo 'Invalid file type';
                return;
            }
    
            // Set the content disposition header to force file download
            header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    
            // Read the file and output its contents
            readfile($filePath);
        }
    }
    
 
}