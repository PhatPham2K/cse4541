<!doctype html>
<?php
require 'db.php'; // import "create_connect" function
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Index - PHP Demo</title>
    <style type="text/css">
        .mt-20 {
            margin-top: 20px;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a class="btn btn-outline-primary mt-20" href="http://localhost/cse4541/add.php"> Add new</a>
        <table class="table mt-20">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Importing Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Function</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = create_connect();
                if (!$conn) {
                    die("Fail!");
                }
                $sql = "SELECT * FROM `cse4541`";
                $results = mysqli_query($conn, $sql);
                if (mysqli_num_rows($results) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $row['productCode'] ?></td>
                            <td><?php echo $row['productName'] ?></td>
                            <td><?php echo $row['brand'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['importingDate'] ?></td>
                            <td><img src="<?php echo $row['imageUrl'] ?>"></td>
                            <td>
                                <a href="http://localhost/cse4541/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-warning">Edit</a>
                                <!-- Method 1 -->
                                <!--<button type="button" class="btn btn-outline-danger" data-id="<?php echo $row['Id'] ?>">Delete</button> -->
                                <!-- Method 2 -->
                                <button type="button" class="btn btn-outline-danger" onclick="deleteProduct(<?php echo $row['id'] ?>)">Delete</button>
                            </td>
                        </tr>
                <?php
                    } // End of while loop
                } else {
                    echo "No data";
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script type="text/javascript">
        function deleteProduct(id) {
            if (confirm("Are you sure?") == true) {
                window.location.href = "http://localhost/cse4541/delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>