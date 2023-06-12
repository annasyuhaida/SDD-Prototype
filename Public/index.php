<?php
require_once '../App/View/ManageRegistration/persetujuan_wali.php';
require_once '../BusinessService/Model/Database.php';
require_once '../BusinessService/Model/SaveDoc_model.php';
require_once '../BusinessService/Controller/RegistrationController/SaveDoc_ctrl.php';

// Check database connection
try {
    $db = Database::connect();
    echo "Database connected successfully";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

// Instantiate the SaveModel class
$saveModel = new SaveModel($db);

// Instantiate the SaveDoc_ctrl class and pass the SaveModel instance to the constructor
$saveDocCtrl = new SaveDoc_ctrl($saveModel);

// Parse the action from the URL
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
