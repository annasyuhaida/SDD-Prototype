<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Online_Verify_ctrl {
    
    public function getOnlineVerify() {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

    
        $participant = $model->getParticipantByCourseID();


            require_once '../App/View/ManageMarriagePreparationCourse/UpdateOnlineVerify.php';
            $view = new UpdateOnlineVerify();
            $view->render($participant);


    }

    public function updateOnlineVerify($Lid, $courseID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

        if($Lid == 0){
            $course = "Approved";
        } else if($Lid == 1){
            $course = "Rejected";
        }

        $model->approveParticipant($courseID,$course);
        header('Location: index.php?action=getParticipant');
        exit;
    }
    
 
}