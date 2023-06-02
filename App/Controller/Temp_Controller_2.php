<?php

require_once '../App/Model/Temp_Model_2.php';

class Temp_Controller_2 {

    
    public function getProductsAction() {
        // Create an instance of the Temp_Model_2
        $model = new Temp_Model_2();

        // Get the products from the model
        $products = $model->getProducts();

        // Render the view and pass the data
        require_once '../App/View/Temp_View_2.php';
        $view = new Temp_View_2();
        $view->render($products);
    }

    public function createProductAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create an instance of the Temp_Model_2
            $model = new Temp_Model_2();

            // Get the product data from the form
            $name = $_POST['name'];
            $price = $_POST['price'];

            // Perform actions to create a product in the database
            $model->createProduct($name, $price);

            // Redirect to the getProducts action
            header('Location: index.php?action=getProducts');
            exit;
        }

        // Render the create product form view
        require '../View/CreateProductForm.php';
    }

    public function editProductAction() {
        // Create an instance of the Temp_Model_2
        $model = new Temp_Model_2();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the product data from the form
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];

            // Perform actions to update the product in the database
            $model->updateProduct($id, $name, $price);

            // Redirect to the getProducts action
            header('Location: index.php?action=getProducts');
            exit;
        } else {
            // Get the product ID from the query string
            $id = $_GET['id'];

            // Get the product details from the model
            $product = $model->getProductById($id);

            // Render the edit product form view
            require '../View/EditProductForm.php';
        }
    }

    public function deleteProductAction() {
        // Create an instance of the Temp_Model_2
        $model = new Temp_Model_2();

        // Get the product ID from the query string
        $id = $_GET['id'];

        // Perform actions to delete the product from the database
        $model->deleteProduct($id);

        // Redirect to the getProducts action
        header('Location: index.php?action=getProducts');
        exit;
    }

    // Other methods and logic for Temp_Controller_2
}

?>
