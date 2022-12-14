<?php
include_once 'config.php';
$sql = "DELETE FROM std WHERE Name='" . $_GET["Name"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: table.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>