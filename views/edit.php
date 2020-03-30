<?php

	$id = $_GET['id'];


	

	$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from users where uid='{$id}'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
			//print_r($row);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="../php/updateuser.php" method="post">
		<table>
			<tr>
				<td>
					ID:
				</td>
				<td>
					<input type="number" name="id" value="<?=$row['uid']?>" readonly> 
				</td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?=$row['uname']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?=$row['upassword']?>"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email" value="<?=$row['uemail']?>"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type" value="<?=$row['utype']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="home.php">Back</a></td>
			</tr>
		</table>
	</form>
</body>
</html>