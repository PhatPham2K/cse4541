﻿<?php
require 'db.php';
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Edit Product</title>
    <style type="text/css">
        .mt-20 {
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h1>Edit Product</h1>
    <?php
    if (isset($_GET['id'])) {
        $conn = create_connect();
        if (!$conn) {
            die("Fail!");
        }
        $id = $_GET['id'];
        mysqli_set_charset($conn, "utf8");
        $sql = "SELECT * FROM `cse4541` WHERE id = " . $id;
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);

    ?>
        <div class="container mt-20">
            <form method="GET" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Code</label>
                    <input type="text" class="form-control" id="productCode" name="productCode" value="<?php if (isset($row['productCode'])) echo $row['productCode'] ?>">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" value="<?php if (isset($row['productName'])) echo $row['productName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="<?php if (isset($row['brand'])) echo $row['brand'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="number" class="form-control" id="Quantity" name="Quantity" value="<?php if (isset($row['quantity'])) echo $row['quantity'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Import Date</label>
                        <input type="datetime-local" class="form-control" id="ImportDate" name="ImportDate" value="<?php if (isset($row['importingDate'])) echo $row['importingDate'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image Url</label>
                        <input type="text" class="form-control" id="ImageUrl" name="ImageUrl" value="<?php if (isset($row['imageUrl'])) echo $row['imageUrl'] ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        <?php
        mysqli_close($conn);
    }
    if (isset($_GET['productCode']) && isset($_GET['productName'])) {
        $conn = create_connect();
        if (!$conn) {
            die("Fail!");
        }
        $id = $_GET['id'];
        mysqli_set_charset($conn, "utf8");
        $code = $_GET['productCode'];
        $name = $_GET['productName'];
        $brand = $_GET['brand'];
        $quantity = $_GET['Quantity'];
        $ImportDate = $_GET['ImportDate'];
        $ImageUrl = $_GET['ImageUrl'];

        $sql =
            "UPDATE 
                  `cse4541`
                  SET 
                    `productCode`='{$code}',
                    `productName`='{$name}',
                    `brand`='{$brand}',
                    `quantity`='{$quantity}',
                    `importingDate`='{$ImportDate}',
                    `imageUrl`='{$ImageUrl}'
                    
                  WHERE id = {$id}";

        if (mysqli_query($conn, $sql)) {
            echo "Update Succesfully";
            header("refresh:3; url =http://localhost/cse4541/index.php");
        } else {
            echo "Update Unsuccesfully";
        }
        mysqli_close($conn);
    }

        ?>

        </div>
</body>

</html>