<?php

require_once '../BSL/Model/Database.php';
require_once '../BSL/Model/Temp_Model_1.php';
require_once '../BSL/Model/Temp_Model_2.php';
require_once '../BSL/Model/SaveDoc_model.php';
require_once '../BSL/Controller/Temp_Controller_1.php';
require_once '../BSL/Controller/Temp_Controller_2.php';
require_once '../BSL/Controller/RegistrationController/SaveDoc_ctrl.php';
require_once '../App/View/Temp_View_1.php';
require_once '../App/View/Temp_View_2.php';


// Check database connection
try {
    $db = Database::connect();
    echo "Database connected successfully";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

// Parse the action from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

// Create a new instance of the appropriate controller based on the action
switch ($action) {
    case 'SaveDoc':
        $waliname = $_POST['waliname'];
        $SaveDoc_ctrl->testinput($waliname);
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
