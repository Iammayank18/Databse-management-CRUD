
<?php
include "./connection.php";

$id = $_GET['Id'];

$deletequery = "DELETE FROM studentDetails WHERE Id=$id";
$query = mysqli_query($conn, $deletequery);

header('location:view.php');


?>