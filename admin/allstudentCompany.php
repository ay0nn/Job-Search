<?php
include('include/header.php');
include('include/Esidebar.php');
require_once 'Controller/StudentController.php';
$students = getAllStudent();

?>    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">All Job Seekers</li>
  </ol>
</nav>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Fresh Graduate Info</h1>
        <div class="btn-toolbar mb-1 mb-md-0"> 
        </div>
      </div>
    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>University Name</th>
                    <th>Cgpa&Passing year</th>
                    <th>Phone</th>     
                    <th>Address</th>
                    <th>Email</th>
                    <th>Expertise</th>
                </tr>
            </thead>
            <tbody>
			<?php
				foreach($students as $student){
					echo "<tr>";
					echo "<td>".$student["sid"]."</td>";
					echo "<td>".$student["name"]."</td>";
					echo "<td>".$student["uni_name"]."</td>";
          echo "<td>".$student["cgpa"]."</td>";
          echo "<td>".$student["phn"]."</td>";
          echo "<td>".$student["address"]."</td>";
          echo "<td>".$student["user_mail"]."</td>";
          echo "<td>".$student["expertise"]."</td>";
         // echo '<td><a href="allStudent.php?deleteId='.$student["sid"].'" class="btn btn-danger">Delete</a></td>';
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