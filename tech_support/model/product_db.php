<?php
function getProducts()
{
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY name';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_products_by_customer($email)
{
    global $db;
    $query = 'SELECT products.productCode, products.name 
              FROM products
                INNER JOIN registrations ON products.productCode = registrations.productCode
                INNER JOIN customers ON registrations.customerID = customers.customerID
              WHERE customers.email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function getProduct($productCode)
{
    global $db;
    $query = 'SELECT * FROM products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function deleteProduct($productCode)
{
    global $db;
    $query = 'DELETE FROM products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $statement->closeCursor();
}

function addProduct($code, $name, $version, $releaseDate)
{
    global $db;
    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:code, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();
}

function update_product($code, $name, $version, $releaseDate)
{
    global $db;
    $query = 'UPDATE products
              SET name = :name,
                  version = :version,
                  releaseDate = :releaseDate
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->bindValue(':productCode', $code);
    $statement->execute();
    $statement->closeCursor();
}

/*
This block has been commented out for testing purposes. Uncomment to use.
function checkCode($code)
{
    global $db;
    $db = "tech_support";
    global $row;
    $row = 1;
    $result = mysqli_query($db, "SELECT * FROM products");
    $end = true;
    while ($row = mysqli_fetch_array($result) && $end) {
        if (strcmp($row['productCode'], $code) == 0)
            $end = false;
    }
    return $end;
}
*/

?>