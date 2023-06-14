<?php
//DB
require_once '../BusinessService/Model/Database.php';

///VIEW
//require_once '../App/View/Temp_View_1.php';
require_once '../App/View/ManageRegistration/persetujuan_wali.php';

//Module 1
require_once '../App/View/user_account/ApplicantRegister.php';


//Module 2
require_once '../App/View/ManageRegistration/persetujuan_wali.php';
require_once '../App/View/ManageMarriagePreparationCourse/MarriageCourseDetailsForm.php';
require_once '../App/View/ManageMarriagePreparationCourse/UpdateMarriageCourseDetailsForm.php';
require_once '../App/View/ManageMarriagePreparationCourse/PreMarriageCourseRegForm.php';


///MODEL
//require_once '../BusinessService/Model/Temp_Model_1.php';

//Module 1
require_once '../BusinessService/Model/userAccount/userAccount_model.php';
//Module 2
require_once '../BusinessService/Model/MarriagePreparationCourse/MarriagePreparationCourseModel.php';
//Module 3
//require_once '../BusinessService/Model/SaveDoc_model.php';

//CONTROLLER
//require_once '../BusinessService/Controller/Temp_Controller_1.php';

//Module 1
require_once '../BusinessService/Controller/userAccount_ctrl/ApplicantRegister_ctrl.php';

//Module 2
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Marriage_Course_Details_ctrl.php';
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Pre_Marriage_Course_ctrl.php';
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Payment_ctrl.php';
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Participant_ctrl.php';
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Online_Verify_ctrl.php';
require_once '../BusinessService/Controller/ManageMarriagePreparationCourseController/Attendance_ctrl.php';

//Module 3
require_once '../BusinessService/Controller/RegistrationController/SaveDoc_ctrl.php';

//Check database connection
//try {
//    $db = Database::connect();
//    echo "Database connected successfully";
//} catch (PDOException $e) {
//    echo "Database connection failed: " . $e->getMessage();
//    exit;
//}
// Instantiate the SaveModel class
//$saveModel = new SaveModel($db);

// Instantiate the SaveDoc_ctrl class and pass the SaveModel instance to the constructor
//$saveDocCtrl = new SaveDoc_ctrl($saveModel);

/// Parse the action from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'default';


// Create a new instance of the appropriate controller based on the action
switch ($action) {
    case 'SaveDoc':
        $waliname = $_POST['waliname'];
        $waliIC = $_POST['waliIc'];
        $relationship = $_POST['relationship'];
        $bridename = $_POST['bridename'];
        $groomname = $_POST['groomname'];
        $dowry = $_POST['dowry'];
        $date = $_POST['date'];
        $saveDocCtrl->testinput($waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date);
        break;

    //Module 1//
    //Applicant account registration
    case 'getUsers':
        $controller = new ApplicantRegister_ctrl();
        $controller->getUsersAction();
        break;
    case 'createAccount':
        $controller = new ApplicantRegister_ctrl();
        $controller->createAccountAction();
        break;

    //Module 2//
    //Manage Marriage Course Details(Staff)
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
    
    //Manage Marriage Course Application(Applicant)
    case 'PreMarriageList':
        $Lid = $_GET['Lid'];
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Pre_Marriage_Course_ctrl();
        $controller->PreMarriageList($Lid, $appID, $courseID);
        break;
    case 'ApplyPreMarriage':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Pre_Marriage_Course_ctrl();
        $controller->ApplyPreMarriage($appID, $courseID);
        break;
    case 'editPreMarriage':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Pre_Marriage_Course_ctrl();
        $controller->EditPreMarriage($appID, $courseID);
        break;
    case 'viewPreMarriage':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Pre_Marriage_Course_ctrl();
        $controller->ViewPreMarriage($appID, $courseID);
        break;
    case 'deletePreMarriage':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Pre_Marriage_Course_ctrl();
        $controller->DeletePreMarriage($appID, $courseID);
        break;
    

    //ManagePayment
    case 'paymentForm':
        $Lid = $_GET['Lid'];
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Payment_ctrl();
        $controller->UploadPayment($Lid, $appID, $courseID);
        break;
    case 'viewPayment':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Payment_ctrl();
        $controller->ViewPayment($appID, $courseID);
        break;
    
    //Manage Participant
    case 'getParticipant':
        $controller = new Participant_ctrl();
        $controller->getParticipant();
        break;
    case 'approveParticipant':
        $appID = $_GET['appID'];
        $courseID = $_GET['courseID'];
        $controller = new Participant_ctrl();
        $controller->ApproveParticipant($appID,$courseID);
        break;
    
    //Manage Online Verify
    case 'getOnlineVerify':
        $controller = new Online_Verify_ctrl();
        $controller->getOnlineVerify();
        break;
    case 'updateOnlineVerify':
        $Lid = $_GET['Lid'];
        $courseID = $_GET['courseID'];
        $controller = new Online_Verify_ctrl();
        $controller->updateOnlineVerify($Lid, $courseID);
        break;
    
    //Manage Attendance
    case 'getApplicant':
        $Lid = $_GET['Lid'];
        $controller = new Attendance_ctrl();
        $controller->getApplicant($Lid);
        break;
     case 'updateAttendance':
         $controller = new Attendance_ctrl();
         $controller->updateAttendance();
         break;


    //Example    
    case 'getUsers':
        $controller = new Temp_Controller_1();
        $controller->getUsersAction();
        break;
    case 'createUser':
        $controller = new Temp_Controller_1();
        $controller->createUserAction();
        break;
    case 'editUser':
        $controller = new Temp_Controller_1();
        $controller->editUserAction();
        break;
    case 'deleteUser':
        $controller = new Temp_Controller_1();
        $controller->deleteUserAction();
        break;
    case 'getProducts':
        $controller = new Temp_Controller_2();
        $controller->getProductsAction();
        break;
    case 'createProduct':
        $controller = new Temp_Controller_2();
        $controller->createProductAction();
        break;
    case 'editProduct':
        $controller = new Temp_Controller_2();
        $controller->editProductAction();
        break;
    case 'deleteProduct':
        $controller = new Temp_Controller_2();
        $controller->deleteProductAction();
        break;
    default:
        // Handle default action
        break;
}
?>
