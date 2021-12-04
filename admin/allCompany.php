<?php
include('include/header.php');
include('include/sidebar.php');
require_once 'Controller/CompanyController.php';
$companys = getAllCompany();
if(isset($_REQUEST["deleteId"])){
  $deleteId= $_REQUEST["deleteId"];
  deleteComapny($deleteId);
}
?>    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <li class="breadcrumb-item active" aria-current="page">Company List</li>
  </ol>
</nav>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Company Info</h1>
        <div class="btn-toolbar mb-2 mb-md-0"> 
        </div>
      </div>
     
    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Company Name</th>
                    <th>About</th>
                    <th>Phone</th>
                    <th>Email</th>     
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="output">
			<?php
				foreach($companys as $company){
					echo "<tr>";
					echo "<td>".$company["cid"]."</td>";
					echo "<td>".$company["c_name"]."</td>";
					echo "<td>".$company["info"]."</td>";
          echo "<td>".$company["phn"]."</td>";
          echo "<td>".$company["mail"]."</td>";
          echo "<td>".$company["addr"]."</td>";	
				echo '<td><a href="allCompany.php?deleteId='.$company["cid"].'" class="btn btn-danger">Delete</a></td>';
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