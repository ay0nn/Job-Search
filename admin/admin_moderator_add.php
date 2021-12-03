<?php
echo $email=$_POST['email'];


$query= mysqli_query($conn,"insert into admin_login (admin_email,admin_username,admin_pass,first_name,last_name,admin_type) 
values('$admin_email','$admin_username,'$admin_pass','$first_name','$last_name','$admin_type')");

if(query){
    echo"Data inserted";
}else{
    echo"Some data inserted";
}

?>