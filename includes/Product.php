<?php
// PRODUCT PROCESSES


header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(trim(file_get_contents("php://input")));

    // ADD PRODUCT PROCESS
    if (isset($data->action) && $data->action === 'addProduct') {
        $productName = $data->productName;
        $size = $data->size;
        $type = $data->type;
        $traySize = $data->traySize;
        $price = $data->price;

        try {
            require_once '../config/Database.php';
            require_once '../models/ProductModel.php';
            require_once '../views/ProductView.php';
            require_once '../controllers/ProductController.php';


            // ERROR HANDLERS

            $errors = [];
            $success = [];


            if (isEmpty($productName, $size, $type, $traySize, $price)) {
                $errors["message"] = "Fill in all fields.";
            }


            if ($errors) {

                $_SESSION["emptyInput"] = $errors;
                echo json_encode($errors);
                exit;
            } else {

                addProduct($pdo, $productName, $size, $type, $traySize, $price);
                $success["success"] = true;
                $success["message"] = "New product data added successfully";
                echo json_encode($success);
                exit;
            }



            $pdo = null;
            $stmt = null;
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    // END OF ADD PRODUCT PROCESS...




    else if (isset($data->action) && $data->action === 'getAllProducts') {
        try {
            require_once '../config/Database.php';
            require_once '../models/ProductModel.php';
            require_once '../views/ProductView.php';
            require_once '../controllers/ProductController.php';

            $result = getAllProducts($pdo);

            echo json_encode($result);
            exit;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }



    // DELETE PRODUCT PROCESS
    else if (isset($data->action) && $data->action === 'delete') {

        $id = $data->id;

        try {
            require_once '../config/Database.php';
            require_once '../models/ProductModel.php';
            require_once '../controllers/ProductController.php';


            // ERROR HANDLERS
            $errors = [];
            $success = [];

            $result = getProduct($pdo, $id);

            if (!$result) {
                $errors["message"] = "Product not found.";
            }

            if ($errors) {
                echo json_encode($errors);
                exit;
            } else {
                removeProduct($pdo, $id);
                $success["success"] = true;
                $success["message"] = "Product data deleted successfully";
                echo json_encode($success);
                exit;
            }




            $pdo = null;
            $stmt = null;
            exit;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    // END OF DELETE PRODUCT PROCESS


} else {
    header("Location: ../index.php");
    die();
}
