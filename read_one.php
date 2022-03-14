<?php
// get ID of the product to be read
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

// include database and object files
include_once 'config/database.php';
include_once 'models/product.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare objects
$product = new Product($db);

// set ID property of product to be read
$product->id = $id;

// read the details of product to be read
$product->readOne();
// set page headers
$page_title = "Read One Product";
include_once "includes/header.php";

// read products button
echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-primary pull-right'>";
echo "<span class='glyphicon glyphicon-list'></span> Read Products";
echo "</a>";
// HTML table for displaying a product details
echo "<table class='table table-hover table-responsive table-bordered'>";

echo "<tr>";
echo "<td>Name</td>";
echo "<td>{$product->name}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Price</td>";
echo "<td>{$product->price}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Description</td>";
echo "<td>{$product->description}</td>";
echo "</tr>";



echo "</table>";
echo "</div>";


// set footer
include_once "includes/footer.php";
