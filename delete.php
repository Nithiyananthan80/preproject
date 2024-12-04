<?php
$connection = mysqli_connect("localhost", "root", "", "registerdetails");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM student WHERE id = $id";

    if (mysqli_query($connection, $sql)) {
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
