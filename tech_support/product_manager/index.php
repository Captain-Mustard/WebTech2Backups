<?php
require ('../model/database.php');
require ('../model/product_db.php');

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
    include ('product_list.php');
} else if ($action == 'deleteProduct') {
    $productCode = filter_input(INPUT_POST, 'productCode');
    //Delete product
    // ???
    deleteProduct($productCode);
    header("Location: .");
} else if ($action == 'showAddForm') {
    // ???
    header("Location: product_add.php");
    exit;
} else if ($action == 'addProduct') {
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
    $releaseDate = filter_input(INPUT_POST, 'releaseDate');

    // Validate the inputs

    if ($code === NULL) {
        $error = "Code is required.";
        include ('../errors/error.php');

    } else if ($name === NULL) {
        $error = "Name is required.";
        include ('../errors/error.php');

    } else if ($releaseDate === NULL) {
        $error = "Release Date is required.";
        include ('../errors/error.php');

    } else if (
        $code === NULL || $name === FALSE ||
        $version === NULL || $version === FALSE ||
        $releaseDate === NULL
    ) {
        $error = "Invalid product data. Check all fields and try again.";
        include ('../errors/error.php');
    } else if ($version < 1) {
        $error = "Version must be greater than 0.";
        include ('../errors/error.php');

    } else if (!is_float($version)) {
        $error = "Version must be a valid number.";
        include ('../errors/error.php');

    } 
    // Commented out for testing purposes. Uncomment to use.
    //else if (!checkCode($code)) {
        //$error = "A product with that code already exists.";
        //include ('../errors/error.php');

    //} 
    else {
        addProduct($code, $name, $version, $releaseDate);
        header("Location: .");
    }

}
?>