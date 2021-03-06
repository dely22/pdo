<?php
// check if value was posted

if ($_GET) {

    // include database and object file
    include_once 'config/database.php';
    include_once 'models/product.php';

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // prepare product object
    $product = new Product($db);

    // set product id to be deleted
    $product->id = $_GET['id'];

    // delete the product
    if ($product->delete()) {
        echo "Object was deleted.";
    }

    // if unable to delete the product
    else {
        echo "Unable to delete object.";
    }
}
