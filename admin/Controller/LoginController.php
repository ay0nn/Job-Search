<?php
	SESSION_START(); 
	require_once 'Model/dbconnect.php';
	$admin_email="";
	$err_name="";
	$admin_pass="";
	$err_username="";
	
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["admin_email"])){
			$err_email = "Email required";
		}
		else
		{
			$admin_email = $_POST["admin_email"];
		}
		if(empty($_POST["admin_pass"])){
			$err_pass = "Email pass";
		}
		else
		{
			$admin_pass = $_POST["admin_pass"];
		}
	}
	
	if(isset($_POST["login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["admin_email"],$_POST["admin_pass"])){
				$_SESSION["admin_username"]= $_POST["admin_username"];
			/*	setcookie('usertype','Type = Customer',time()+15);*/
				header("Location:admin_dashboard.php");
				
			}else{
				echo '<script>alert("Invalid Username & Password")</script>';
			}
		}
	}
	function checkUser($username){
		$query = "SELECT name from users WHERE username = '$username';";
		$user = getArray($query);
		return $user;
	}
	function insertUser($name,$username,$email,$phone,$address,$password){
		$password = md5($password);
		$query = "INSERT INTO users VALUES(Null,'$name','$username','$email','$phone','$address','$password')";
		execute($query);		
	}
	function authenticate($admin_email,$admin_pass){
	//	$password = md5($password);
		$query = "SELECT admin_email from admin_login WHERE admin_email='$admin_email' and admin_pass='$admin_pass'";
		$user=getArray($query);
		return $user;
	}

?>