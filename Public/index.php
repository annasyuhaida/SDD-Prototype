<?php
// DB
require_once '../BusinessService/Model/Database.php';

// VIEW
require_once '../App/View/user_account/ApplicantRegister.php';

// MODULES
require_once '../App/View/ManageMarriagePreparationCourse/MarriageCourseDetailsForm.php';
require_once '../App/View/ManageMarriagePreparationCourse/UpdateMarriageCourseDetailsForm.php';
require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseRegForm.php';
require_once '../App/View/ManageMarriageRequest/RequestMarriageForm.php';
require_once '../App/View/ManageRegistration/persetujuan_wali.php';

// MODEL
require_once '../BusinessService/Model/userAccount/userAccount_model.php';
require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';
require_once '../BusinessService/Model/ManageMarriageRequest/MarriageRequestModel.php';
require_once '../BusinessService/Model/ManageRegistration/RegistrationModel.php';

// CONTROLLER
require_once '../BusinessService/Controller/userAccount_ctrl/ApplicantRegister_ctrl.php';

// Other controllers...
// (Include other required controllers for your application)

/// Parse the action from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

// Create a new instance of the appropriate controller based on the action
switch ($action) {

    // Module 1 - Applicant Registration
    case 'getApplicant':
        $controller = new ApplicantRegister_ctrl();
        $controller->getUsersAction();
        break;

    case 'createAccount':
        $controller = new ApplicantRegister_ctrl();
        $controller->createAccountAction();
        break;

    // Module 2 - Marriage Course Management
    case 'MarriageCourseForm':
        $view = new MarriageCourseDetailsForm();
        $view->render();
        break;
    case 'createMarriageCourse':
        $controller = new Marriage_Course_Details_ctrl();
        $controller->CreateMarriageCourse();
        break;
    case 'getMarriageCourseList':
        $controller = new Marriage_Course_Details_ctrl();
        $controller->MarriageCourseList();
        break;
    case 'editMarriageCourseForm':
        $courseID = $_GET['courseID'];
        $controller = new Marriage_Course_Details_ctrl();
        $controller->getMarriageCourse($courseID);
        break;
    case 'editMarriageCourse':
        $courseID = $_GET['courseID'];
        $controller = new Marriage_Course_Details_ctrl();
        $controller->EditMarriageCourse($courseID);
        break;
    case 'deleteMarriageCourse':
        $courseID = $_GET['courseID'];
        $controller = new Marriage_Course_Details_ctrl();
        $controller->DeleteMarriageCourse($courseID);
        break;

    // More cases for other modules (Marriage Course Application, Marriage Request, etc.)
    // You can add additional cases based on your application requirements...

    // Default case if no action is specified
    default:
        echo "Action not found.";
        break;
}
?>
