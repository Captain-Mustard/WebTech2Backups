<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
}

//instantiate variable(s)
$lastName = '';
$customers = array();

if ($action == 'searchCustomers') {   
    // ???
} else if ($action == 'displayCustomers') {
    // ???
} else if ($action == 'displayCustomer') {
    // ???
} else if ($action == 'updateCustomer') {
   // ???
    include('customer_search.php');
}
?>