<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM std");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<th>Name</th>
    <th>Age</th>
    <th>Number</th>
	</tr>
	<?php
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["Age"]; ?></td>
	<td><?php echo $row["Number"]; ?></td>
	<td><a href="delete-process.php?Name=<?php echo $row["Name"]; ?>">Delete</a></td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>