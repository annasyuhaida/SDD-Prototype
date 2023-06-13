<?php

require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';

class Attendance_ctrl {
    
    public function getApplicant($Lid) {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

    
        $participant = $model->getMarriageCourseList();
        if($Lid == 0){
            require_once '../App/View/ManageMarriagePreparationCourse/AttendanceList.php';
            $view = new AttendanceList();
            $view->render($participant,'','');
        }
        if($Lid == 1){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $organiser = $_POST['sel1'];
            $series = $_POST['sel2'];

            $course = $model-> getCourseByseriesorganiser($organiser,$series);
            
            $courses = $course['pre_m_reg_ID'];
            $course1 = $model->getAppCourseByID($courses);

            $apps = $model->getParticipantByID($course['pre_m_reg_ID']);

            require_once '../App/View/ManageMarriagePreparationCourse/AttendanceList.php';
            $view = new AttendanceList();
            $view->render($participant,$course1,$apps);

            }
        }
    }

    public function updateAttendance() {
        // Create an instance of the MarriagePreparationCourseModel
        $model = new MarriagePreparationCourseModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the attendance data from the form
            $attendance = $_POST['attendance'];
            $notes = $_POST['note'];
        
            // Process the attendance data for each participant
            foreach ($attendance as $applicantID => $attendanceValue) {
                // Get the applicant's ID
                $applicantID = intval($applicantID);
        
                // Get the attendance value (0 or 1)
                $attendanceValue = intval($attendanceValue);
        
                // Get the notes for the applicant
                $note = $notes[$applicantID];
        
                // Perform the necessary actions to insert the attendance record in the database
                // For example, you can call a method in your model to insert the attendance
                $attendanceID = $model->insertAttendance($attendanceValue, $note);
                
                $getattendanceID = $model->getAttendance();
                $model->updateApplicantAttendanceID($applicantID, $getattendanceID['attendanceID']);
            }
        
            header('Location: index.php?action=getApplicant&Lid=0');
            exit;
        }
        
        
    }
    
 
}