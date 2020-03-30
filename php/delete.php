<?php
	
	$id=$_GET['id'];

	$con = mysqli_connect('127.0.0.1','root','','webtech');

	$sql ="delete from users where uid=$id";

	if(mysqli_query($con, $sql)){
			echo "Deletion done!";
			header("location:../views/view_users.php");
		}
		else
		{
			echo "None";
			header("location:../views/view_users.php");
		}



?>