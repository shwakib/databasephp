<?php
session_start();

if(!isset($_SESSION['user'])) {
		header("location:login.html");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h2>Create User</h2>
	<form action="../php/regCheck.php" method="post">
		<table>
			<tr>
				<td>
					ID:
				</td>
				<td>
					<input type="number" name="uid">
				</td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="home.php">Back</a></td>
			</tr>
		</table>
	</form>
</body>
</html>