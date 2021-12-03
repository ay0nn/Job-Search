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
	
	function getCompany($id){
		$query="SELECT * FROM company WHERE cid=$id";
		$companys=getArray($query);
		return $companys[0];
	}

	function deleteComapny($cid){
		$query="DELETE FROM company WHERE cid=".$cid."";
		execute($query);
		header("Location: allCompany.php");
	}

	if(isset($_POST["edit_company"])){
		//update food
		updateCompany($_POST["cid"],$_POST["c_name"],$_POST["info"],$_POST["phn"],$_POST["mail"],$_POST["addr"],$_POST["pass"]);
	}

	function updateCompany($cid,$c_name,$info,$phn,$mail,$addr,$pass){
		$query="UPDATE company SET c_name='$c_name',info='$info',phn ='$phn',mail ='$mail',addr ='addr',pass ='$pass' WHERE cid= $cid";
		execute($query);
		header("Location: Company_dashboard.php");
	}
?>