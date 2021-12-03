<?php 
    SESSION_START();
	require_once 'Controller/CompanyController.php';
	$cid = $_REQUEST["cid"];
	$company = getCompany($cid);
	
?>
<!--edit category starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="cid" value="<?php echo $company["cid"];?>">
			<input type="text" name="c_name" value="<?php echo $company["c_name"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Info</h4> 
			<input type="text" name="info" value="<?php echo $company["info"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Phone</h4> 
			<input type="text" name="phn" value="<?php echo $company["phn"];?>" class="form-control">
		</div>
        <div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="mail" value="<?php echo $company["mail"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Address</h4> 
			<input type="text" name="addr" value="<?php echo $company["addr"];?>" class="form-control">
		</div>
        <div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="text" name="pass" value="<?php echo $company["pass"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_company" class="btn btn-success" value="Edit Company" class="form-control">
		</div>
	</form>
</div