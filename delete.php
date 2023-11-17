
<?php
require 'db.php';

if (isset($_GET['id'])) {
    $conn = create_connect();
    if (!$conn) {
        die("Fail!");
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM `cse4541` WHERE id = " . $id;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: http://localhost/cse4541/index.php");
}
?>
