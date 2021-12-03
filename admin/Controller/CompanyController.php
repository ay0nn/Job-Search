<?php
	require_once 'Model/dbconnect.php';

	if(isset($_POST["add_company"])){
		insertStudent($_POST["name"],$_POST["uni_name"],$_POST["cgpa"],$_POST["phn"],$_POST["address"],$_POST["user_mail"],$_POST["pass"],$_POST["expertise"]);
	}

	function insertStudent($name,$uni_name,$cgpa,$phn,$address,$pass,$expertise){	
		$query = "INSERT INTO student VALUES(Null,'$name','$uni_name','$cgpa','$phn','$address','$pass','$expertise')";
		execute($query);
		header("Location:admin_moderator.php");
		echo '<script>alert("New Admin/Moderator Added")</script>';
					
	}
	function getAllCompany(){
		$query = "SELECT * FROM company";
		$companys = getArray($query);
		return $companys;
	}
	
?>