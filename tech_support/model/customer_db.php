<?php
function getCustomers() {
    // ???
    global $db;
    $query = 'SELECT * FROM customers
              ORDER BY customerID';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function getCustomer_lastName($lastName) {
    // ???
}

function getCustomer($customerId) {
    // ???
    global $db;
    $query = 'SELECT * FROM customers
              WHERE customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerId);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}

function get_customer_by_email($email) {
    // ???
}

function deleteCustomer($customerId) {
    // ???
    global $db;
    $query = 'DELETE FROM customers
              WHERE customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerId);
    $statement->execute();
    $statement->closeCursor();
}

function addCustomer($firstName, $lastName,
        $phone, $email, $password) {
    // ???
    global $db;
    $query = 'INSERT INTO customers
                 (firstName, lastName, phone, email, password)
              VALUES
                 (:firstName, :lastName, :phone, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function updateCustomer($customerId, $firstName, $lastName,
        $phone, $email, $password) {
   // ???
   global $db;
    $query = 'UPDATE customers
              SET firstName = :firstName,
                  lastName = :lastName,
                  phone = :phone,
                  email = :email,
                  password = :password
              WHERE customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':customerID', $customerId);
    $statement->execute();
    $statement->closeCursor();
}
?>