<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from users where uname='{$username}' and upassword='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>