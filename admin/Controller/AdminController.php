<?php
	require_once 'Model/dbconnect.php';

	if(isset($_POST["add_admin"])){
		insertadmin_login($_POST["admin_email"],$_POST["admin_pass"],$_POST["admin_username"],$_POST["first_name"],$_POST["last_name"],$_POST["admin_type"]);
	}

	function insertadmin_login($admin_email,$admin_pass,$admin_username,$first_name,$last_name,$admin_type){	
		$query = "INSERT INTO admin_login VALUES(Null,'$admin_email','$admin_pass','$admin_username','$first_name','$last_name','$admin_type')";
		execute($query);
		header("Location:admin_moderator.php");
		echo '<script>alert("New Admin/Moderator Added")</script>';
					
	}
	function getAlladmin(){
		$query = "SELECT * FROM admin_login";
		$admins = getArray($query);
		return $admins;
	}
	function deleteAdmin($id){
		$query="DELETE FROM admin_login WHERE id=".$id."";
		execute($query);
		header("Location: admin_moderator.php");
	}
	
?>