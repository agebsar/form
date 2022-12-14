<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head></head>
<bod action="" method="GET">
<!-- Using required can be hacked using inspect-->
    <form>
        <input type="text" name="name">
        <input type="text" name="age">
        <input type="text" name="number">
        <input type="submit" name="click">
    </form>
<?php
    $name = $_GET['name'];
    $age = $_GET['age'];
    $number = $_GET['number'];
    $sql = "INSERT INTO `std` (`Name`, `Age`, `Number`) 
    VALUES ('$name', '$age', '$number');";
    $results = mysqli_query($conn,$sql);
?>
</body>
</html>