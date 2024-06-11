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
} else if ($action == 'showAddForm') {
    // ???
} else if ($action == 'addTechnician') {
    // Validate the inputs
}
?>