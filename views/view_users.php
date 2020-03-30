<?php
	session_start();
	//print_r($_SESSION['user']);

	if(!isset($_SESSION['user'])) {
		header("location:login.html");
	}

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

		<a href="home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br>
		
		<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>Email</td>
				<td>TYPE</td>
				<td>Action</td>
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['uid']?></td>
			<td><?=$row['uname']?></td>
			<td><?=$row['upassword']?></td>
			<td><?=$row['uemail']?></td>
			<td><?=$row['utype']?></td>
			<td>
				<a href="edit.php?id=<?=$row['uid']?>">Edit</a> |
				<a href="delete.php?id=<?=$row['uid']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

	</table>
</body>
</html>