<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'searchCustomers';
    }
}

//instantiate variable(s)
$lastName = '';
$customers = array();

if ($action == 'searchCustomers') {   
    // ???
    include('customer_search.php');
} else if ($action == 'displayCustomers') {
    // ???
    $customers = getCustomers();

} else if ($action == 'displayCustomer') {

    // ???
    header("Location: customer_display.php");
    exit;
} else if ($action == 'updateCustomer') {
   // ???
    include('customer_search.php');
    updateCustomer('customerID', 'firstName', 'lastName', 'phone', 'email', 'password');
}
?>