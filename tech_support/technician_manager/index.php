<?php
require('../model/database.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'listTechnicians';
    }
}

if ($action == 'listTechnicians') {
    // Get technician data
    $technicians = getTechnicians();
    // Display the technician list
    include ('technician_list.php');
} else if ($action == 'deleteTechnician') {
    // ???
    $techID = filter_input(INPUT_POST, 'techID');
    //Delete technician
    // ???
    deleteTechnician($techID);
    header("Location: .");
} else if ($action == 'showAddForm') {
    // ???
    header("Location: technician_add.php");
    exit;
} else if ($action == 'addTechnician') {
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $password = filter_input(INPUT_POST, 'password');


    // Validate the inputs

    if ($firstName === NULL) {
        $error = "First Name is required.";
        include ('../errors/error.php');

    } else if ($lastName === NULL) {
        $error = "Last Name is required.";
        include ('../errors/error.php');

    } else if ($phone === NULL) {
        $error = "Phone Number is required.";
        include ('../errors/error.php');

    } else if ($password === NULL) {
        $error = "Password is required.";
        include ('../errors/error.php');

    } else if (
        $firstName === NULL || $lastName === FALSE ||
        $email === NULL || $phone === FALSE ||
        $password === NULL
    ) {
        $error = "Invalid technician data. Check all fields and try again.";
        include ('../errors/error.php');

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email address is not valid.";
        include ('../errors/error.php');

    } else {
        addTechnician($fistName, $lastName, $email, $phone, $password);
        header("Location: .");
    }
}
?>