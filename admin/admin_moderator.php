<?php
include('include/header.php');
include('include/sidebar.php');
require_once 'Controller/AdminController.php';
$admins = getAlladmin();
if(isset($_REQUEST["deleteId"])){
  $deleteId= $_REQUEST["deleteId"];
  deleteAdmin($deleteId);
}
?>    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin/Moderator</li>
  </ol>
</nav>
<div class="btn-group me-2">
            <a type="button" class="btn btn-sm btn-success outline-secondary" href="add_admin_moderator.php">Add moderator</a>
          </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Admin/Moderator</h1>
        <div class="btn-toolbar mb-2 mb-md-0">        
        </div>
      </div>
    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>User name</th>     
                    <th>Admin type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
			<?php
				foreach($admins as $admin){
					echo "<tr>";
					echo "<td>".$admin["id"]."</td>";
					echo "<td>".$admin["first_name"]."</td>";
					echo "<td>".$admin["last_name"]."</td>";
          echo "<td>".$admin["admin_email"]."</td>";
          echo "<td>".$admin["admin_username"]."</td>";
          echo "<td>".$admin["admin_type"]."</td>";
          echo '<td><a href="admin_moderator.php?deleteId='.$admin["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "<td></td>";
				//	echo '<td><a href="editgrocery.php?id='.$grocery["id"].'" class="btn btn-success">Edit</a></td>';
			//		echo '<td><a href="allgroceries.php?deleteId='.$grocery["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
        </main>
      </div>
    </div>



<!-- Datatable Plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js
"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js
 "></script>

 <script>
     $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

  

</body>
</html>