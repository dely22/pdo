<?php
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 5;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

// retrieve records here
// include database and object files
include_once 'config/database.php';
include_once 'models/product.php';

// instantiate database and models
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();

// set page header
$page_title = "Read Products";
include_once "includes/header.php";

// contents will be here
echo "<div class='right-button-margin'>
    <a href='create_product.php' class='btn btn-default pull-right'>Create Product</a>
</div>";

// the page where this paging is used
$page_url = "index.php?";

// count all products in the database to calculate total pages
$total_rows = $product->countAll();
// display the products if there are any
if ($num > 0) {

    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
    echo "<th>Product</th>";
    echo "<th>Price</th>";
    echo "<th>Description</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$price}</td>";
        echo "<td>{$description}</td>";
        echo "<td>";


        echo "<td>";
        // read, edit and delete buttons
        // read, edit and delete buttons
        echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>
            <span class='glyphicon glyphicon-list'></span> Read
            </a>
            
            <a href='update_product.php?id={$id}' class='btn btn-info left-margin'>
                <span class='glyphicon glyphicon-edit'></span> Edit
            </a>
            
            <a href='delete_product.php?id={$id}' class='btn btn-danger left-margin'>
            <span class='glyphicon glyphicon-edit'></span> Delet
        </a>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";

    // paging buttons will be here
}

// tell the user there are no products
else {
    echo "<div class='alert alert-info'>No products found.</div>";
}
// paging buttons here
include_once 'includes/paging.php';

// set page footer
include_once "includes/footer.php";
