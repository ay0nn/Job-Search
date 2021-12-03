<?php
	require_once 'Model/dbconnect.php';

	if(isset($_POST["add_student"])){
		insertStudent($_POST["name"],$_POST["uni_name"],$_POST["cgpa"],$_POST["phn"],$_POST["address"],$_POST["user_mail"],$_POST["pass"],$_POST["expertise"]);
	}

	function insertStudent($name,$uni_name,$cgpa,$phn,$address,$pass,$expertise){	
		$query = "INSERT INTO student VALUES(Null,'$name','$uni_name','$cgpa','$phn','$address','$pass','$expertise')";
		execute($query);
		header("Location:admin_moderator.php");
		echo '<script>alert("New Admin/Moderator Added")</script>';
					
	}
	function getAllStudent(){
		$query = "SELECT * FROM student";
		$students = getArray($query);
		return $students;
	}
    function deleteStudent($sid){
		$query="DELETE FROM student WHERE sid=".$sid."";
		execute($query);
		header("Location: allStudent.php");
	}
	
?>