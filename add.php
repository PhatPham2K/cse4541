<?php
require 'db.php'; // import "create_connect" function
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Add Product</title>

</head>

<body>
    <div class="container mt-20">
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
                <label for="codeProduct">Code Product</label>
                <input type="text" class="form-control" id="codeProduct" name="codeProduct">
            </div>
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="form-group">
                <label for="importingDate">Importing Date</label>
                <input type="datetime-local" class="form-control" id="importingDate" name="importingDate">
            </div>
            <div class="form-group">
                <label for="imageUrl">Image URL</label>
                <input type="text" class="form-control" id="imageUrl" name="imageUrl">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if (isset($_POST['codeProduct']) && isset($_POST['productName']) && isset($_POST['brand']) && isset($_POST['quantity']) && isset($_POST['importingDate']) && isset($_POST['imageUrl'])) {
            $conn = create_connect();
            if (!$conn) {
                die("Fail!");
            }
            mysqli_set_charset($conn, 'utf8');
            $sql = "INSERT INTO `cse4541`(`productCode`, `productName`, `brand`, `quantity`, `importingDate`, `imageUrl`) VALUES ('{$_POST['codeProduct']}','{$_POST['productName']}','{$_POST['brand']}','{$_POST['quantity']}','{$_POST['importingDate']}','{$_POST['imageUrl']}')";

            if (mysqli_query($conn, $sql)) {
                echo "Inserted successfully";
                header("refresh:1; url=http://localhost/cse4541/index.php");
            } else {
                echo "error";
            }
            mysqli_close($conn);
        }
        ?>
    </div>
</body>

</html>