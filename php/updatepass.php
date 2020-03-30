<?php

session_start();
$id=$_SESSION['user']['uid'];


	if (isset($_REQUEST['submit'])) 
	{
			if(empty($_POST['upassword'])||empty($_POST['cupassword'])||empty($_POST['cupasswordn']))
			{
				echo "Null value found";
				header("location:../views/home.php");
			}
			else
			{
				if($_POST['cupassword']==$_POST['cupasswordn'])
				{
					$password=$_POST['cupasswordn'];

					$con = mysqli_connect('127.0.0.1','root','','webtech');

					$sql = "update users set upassword='$password' where uid=$id";
					if(mysqli_query($con, $sql)){
					echo "Update done!";
						header("location:../views/home.php");
				}
				else
				{
			echo "None";
				}
				}
				else
				{
					echo "incorrect password";
				}
			}
	}
	else
	{
		echo "Invalid";
	}


?>