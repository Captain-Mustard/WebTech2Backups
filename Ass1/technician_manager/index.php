<?php
require('../model/database.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
}

if ($action == 'listTechnicians') {
    // ???
} else if ($action == 'deleteTechnician') {
    // ???
} else if ($action == 'showAddForm') {
    // ???
} else if ($action == 'addTechnician') {
    // Validate the inputs
}
?>