<?php

require_once '../BusinessService/Model/ManageMarriageRequest/MarriageRequestModel.php';

class Payment_ctrl2 {
    
    public function UploadPayment($Lid, $appID) {
        // Create an instance of the MarriageRequestModel
        $model = new MarriageRequestModel();
    
        if ($Lid == 0) {
            // Get the user and course data
            $app = $appID;
            $req = $reqID;
    
            // Render the view and pass the data
            require_once '../App/View/ManageMarriageRequest/RequestMarriagePaymentForm.php';
            $view = new RequestMarriagePaymentForm();
            $view->render($app);
        } elseif ($Lid == 1 && $_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if a file was uploaded
            if (!empty($_FILES['file']['tmp_name'])) {
                $file = $_FILES['file']['tmp_name'];
                $fileExtension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
                $category = "Pre Marriage Course";
    
                // Perform actions to create a payment entry in the database
                $model->uploadPayment($appID, $category, $file);
    
                // Redirect to the appropriate page
                header('Location: index.php?action=requestMarriageList&appID=' . $appID);
                exit;
            }
        }
    }
    
    public function ViewPayment($appID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();
    
        $app = $model->getAppByID($appID);
        $applicant = $app['applicantID'];
    
        $payment = $model->getPaymentByID($applicant);
    
        foreach ($payment as $payment) {
            $filePath = $payment['p_file'];
    
            // Check if the file exists
            if (!file_exists($filePath)) {
                echo 'File not found';
                return;
            }
    
            // Get the file extension
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
            exit;
        }
    }
    
 
}