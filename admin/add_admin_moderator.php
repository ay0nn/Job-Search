<?php
include('include/header.php');
include('include/sidebar.php');
require_once 'Controller/AdminController.php';
?>    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="admin_moderator.php">Admin/Moderator</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Admin/Moderator</li>
  </ol>
</nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Admin/Moderator</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
          <div style= "width:60%; margin-left:20%;  background-color: #F2F4F4;">
            
            <form action="" method="POST" name="">
            <div id="msg"> </div>
              <div class="form-group">
                <label for="Email">Enter Email</label>
                <input type="email" name="admin_email" id="admin_email"class="form-control" placeholder= "Enter email">
              </div>

              <div class="form-group">
                <label for="User Name">User Name</label>
                <input type="name" name="admin_username" id="admin_username" class="form-control" placeholder= "Enter User Name">
              </div>
              <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="pass" name="admin_pass" id="admin_pass"class="form-control" placeholder= "Enter Password">
              </div>
              <div class="form-group">
                <label for="First Name">First Name</label>
                <input type="name" name="first_name" id="first_name" class="form-control" placeholder= "Enter first Name">
              </div>

              <div class="form-group">
                <label for="Last Name">Last Name</label>
                <input type="name" name="last_name" id="last_username"class="form-control" placeholder= "Enter Last Name">
              </div>

              <div class="form-group">
                <label for="Admin type">Admin type</label>
                <select name="admin_type" class="form-control" id="admin_type">
                  <option value="Admin">Admin</option>
                  <option value="Moderator">Moderator</option>
                </select>
              
              </div>
              <div class="form-group text-center">
				
				<input type="submit" name="add_admin" class="btn btn-success" value="Add Admin " class="form-control">
			</div

          
          </div>
        </main>  

</body>
</html>