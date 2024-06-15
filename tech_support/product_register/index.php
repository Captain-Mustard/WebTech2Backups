<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
    $action = filter_input(INPUT_GET,'action');
    if ($action === NULL) {
        include('customer_login.php');
    }
}

//instantiate variable(s)
$email = '';
$product = '';
if ($action == 'login_customer') {
    // ???
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (get_customer_by_email($email)) {
            include('product_register.php');
        } else {
            $error = "A customer with that email address does not exist.";
            include ('../errors/error.php');
        }
    } else {
        include('customer_login.php');
    }
} else if ($action == 'getCustomer') {
    // ???

} else if ($action == 'register_product') {
    // ???
    if (isset($_POST['productCode'])) {
        $product = $_POST['productCode'];
        $email = $_POST['email'];
        add_registration((get_customer_by_email($email)),$product);
        $message = "Product (" + $product + ") was registered successfully.";
    }
}
?>