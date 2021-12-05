<?php
	require_once 'Model/dbconnect.php';

	if(isset($_POST["add_com"])){
		insertCompany($_POST["c_name"],$_POST["info"],$_POST["phn"],$_POST["mail"],$_POST["addr"],$_POST["pass"]);
	}

	function insertCompany($c_name,$info,$phn,$mail,$addr,$pass){	
		$query = "INSERT INTO company VALUES(Null,'$c_name','$info','$phn','$mail','$addr','$pass')";
		execute($query);
		header("Location:emp_login.php");
		echo '<script>alert("Successfully Added")</script>';
					
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

	if(isset($_POST["id"])){
		//update food
		updateCompany($_POST["cid"],$_POST["c_name"],$_POST["info"],$_POST["phn"],$_POST["mail"],$_POST["addr"],$_POST["pass"]);
	}

	function updateCompany($cid,$c_name,$info,$phn,$mail,$addr,$pass){
		$query="UPDATE company SET c_name='$c_name',info='$info',phn ='$phn',mail ='$mail',addr ='addr',pass ='$pass' WHERE cid= $cid";
		execute($query);
		header("Location: Company_dashboard.php");
	}
?>