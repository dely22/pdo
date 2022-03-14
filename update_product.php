<?php
// retrieve one product will be here
// get ID of the product to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

// include database and object files
include_once 'config/database.php';
include_once 'models/product.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare models
$product = new Product($db);

// set ID property of product to be edited
$product->id = $id;

// read the details of product to be edited
$product->readOne();

// set page header
$page_title = "Update Product";
include_once "includes/header.php";

// contents will be here
echo "<div class='right-button-margin'>
          <a href='index.php' class='btn btn-default pull-right'>Read Products</a>
     </div>";

//  update product
// <!-- post code will be here -->

// if the form was submitted
if ($_POST) {

    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];

    // update the product
    if ($product->update()) {
        echo "<div class='alert alert-success alert-dismissable'>";
        echo "Product was updated.";
        echo "</div>";
    }

    // if unable to update the product, tell the user
    else {
        echo "<div class='alert alert-danger alert-dismissable'>";
        echo "Unable to update product.";
        echo "</div>";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}"); ?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value='<?php echo $product->name; ?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type='text' name='price' value='<?php echo $product->price; ?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'><?php echo $product->description; ?></textarea></td>
        </tr>


        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Update</button>
            </td>
        </tr>

    </table>
</form>
<?php
include_once "includes/footer.php";
?>