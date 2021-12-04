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
	// Admin Login
	if(isset($_POST["login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["admin_email"],$_POST["admin_pass"])){
			
				//$query= "SELECT admin_username from admin_login WHERE admin_email = ".$_POST["admin_email"];
				$query = "SELECT admin_username FROM admin_login WHERE admin_email = ".$_POST['admin_email']."";

				$_SESSION["admin_username"] = getResult($query);

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
		//$password = md5($password);
		$query = "INSERT INTO users VALUES(Null,'$name','$username','$email','$phone','$address','$password')";
		execute($query);		
	}
	function authenticate($admin_email,$admin_pass){
	//	$password = md5($password);
		$query = "SELECT admin_email from admin_login WHERE admin_email='$admin_email' and admin_pass='$admin_pass'";
		$user=getArray($query);
		return $user;
	}


	// Company Login

		if(isset($_POST["Clogin"])){
			
				if(Cauthenticate($_POST["mail"],$_POST["pass"])){
					$_SESSION["user"]= $_POST["mail"];
				/*	setcookie('usertype','Type = Customer',time()+15);*/
					header("Location:company_dashboard.php");
					
				}else{
					echo '<script>alert("Invalid Username & Password")</script>';
				}
		
		}
		function Cauthenticate($mail,$pass){
			//	$password = md5($password);
				$query = "SELECT mail from company WHERE mail='$mail' and pass='$pass'";
				$company=getArray($query);
				return $company;
			}

?>