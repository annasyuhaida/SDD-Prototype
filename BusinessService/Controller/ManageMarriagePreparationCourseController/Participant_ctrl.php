<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Participant_ctrl {
    
    public function getParticipant() {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

    
        $participant = $model->getParticipantByCourseID();
            
            require_once '../App/View/ManageMarriagePreparationCourse/ParticipantList.php';
            $view = new ParticipantList();
            $view->render($participant);

    }

    public function ApproveParticipant($appID,$courseID) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

            $course = "Pending";
        

        $model->approveParticipant($courseID,$course);
        header('Location: index.php?action=paymentForm&Lid=0&appID='.$appID.'&courseID='.$courseID);
        exit;
    }
    
 
}