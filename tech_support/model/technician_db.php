<?php
function getTechnicians() {
    global $db;
    $query = 'SELECT * FROM technicians
              ORDER BY techID';
    $statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
    return $technicians;
}


function deleteTechnician($technician_id) {
    global $db;
    $query = 'DELETE FROM technicians
              WHERE techID = :techID';
    $statement = $db->prepare($query);
    $statement->bindValue(':techID', $technician_id);
    $statement->execute();
    $statement->closeCursor();
}

function addTechnician($firstName, $lastName, $email, $phone, $password) {
    global $db;
    $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                 (:firstName, :lastName, :email, :phone, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function updateTechnician($technician_id, $firstName, $lastName, $email, $phone, $password) {
    global $db;
    $query = 'UPDATE technicians
              SET firstName = :firstName,
                  lastName = :lastName,              
                  email = :email,
                  phone = :phone,
                  password = :password
              WHERE techID = :techID';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

?>