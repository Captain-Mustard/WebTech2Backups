<?php
require('../model/database.php');
require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'listProducts';
    }
}

if ($action == 'listProducts') {
    // Get product data
    $products = getProducts();
    // Display the product list
    include('product_list.php');
} else if ($action == 'deleteProduct') {
    $productCode = filter_input(INPUT_POST, 'productCode');
    //Delete product
    // ???
    header("Location: .");
} else if ($action == 'showAddForm') {
    // ???
} else if ($action == 'addProduct') {
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
    $releaseDate = filter_input(INPUT_POST, 'releaseDate');

    // Validate the inputs
    if ( $code === NULL || $name === FALSE || 
            $version === NULL || $version === FALSE || 
            $releaseDate === NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        addProduct($code, $name, $version, $releaseDate);
        header("Location: .");
    }
}
?>