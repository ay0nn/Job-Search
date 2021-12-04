<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "project");
$sql = "SELECT * FROM company WHERE c_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
        <td>".$row['cid']."</td>
		          <td>".$row['c_name']."</td>
		          <td>".$row['info']."</td>
		          <td>".$row['phn']."</td>
		          <td>".$row['mail']."</td>
                  <td>".$row['addr']."</td>
                </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>