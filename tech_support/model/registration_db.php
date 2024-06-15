<?php
function add_registration($customerId, $productCode) {
    // ???
    global $db;
    $query = 'INSERT INTO registrations
                 (customerID, productCode)
              VALUES
                 (:customerID, :productCode)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerId);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $statement->closeCursor();
}
?>