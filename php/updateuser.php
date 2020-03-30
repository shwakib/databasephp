<?php
	
	if (isset($_REQUEST['submit']))
	{
		if (empty($_REQUEST['id'])||empty($_REQUEST['username'])||empty($_REQUEST['password'])||empty($_REQUEST['email'])||empty($_REQUEST['type'])) 
		{
			echo "Null value found";
			header("location:../views/view_users.php");
		}
		else
		{
			$id=$_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$type = $_POST['type'];

			$con = mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "update users set uid='{$id}',uname='{$username}',upassword='{$password}',uemail='{$id}',utype='{$type}'where uid='$id'";
		if(mysqli_query($con, $sql)){
			echo "Update done!";
			header("location:../views/home.php");
		}
		else
		{
			echo "None";
		}
	}
}
else
	{
		echo "No Upload";
	}



?>