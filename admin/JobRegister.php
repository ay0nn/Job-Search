<?php
require_once 'Controller/CompanyController.php';
?>    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Register your Company here!</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
          <div style= "width:60%; margin-left:20%;  background-color: #F2F4F4;">
            
            <form action="" method="POST" name="">
            <div id="msg"> </div>
              <div class="form-group">
                <label for="Name">Enter Name</label>
                <input type="text" name="c_name" id="c_name" class="form-control" placeholder= "Company Name">
              </div>

              <div class="form-group">
                <label for="User Name">Information</label>
                <input type="text" name="info" id="admin_username" class="form-control" placeholder= "Tell us abour your company">
              </div>
              <div class="form-group">
                <label for="Password">Phone no</label>
                <input type="phone" name="phn" id=""class="form-control" placeholder= "Enter Phone no">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="mail" id="" class="form-control" placeholder= "Enter Email">
              </div>

              <div class="form-group">
                <label for="Last Name">Address</label>
                <input type="name" name="addr" id="addr"class="form-control" placeholder= "Enter Address">
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="pass" id="pass"class="form-control" placeholder= "Enter Password">
              </div>
              <div class="form-group text-center">
				
				<input type="submit" name="add_com" class="btn btn-success" value="Register" class="form-control">
</div>
     
          </div>
        </main>  

</body>
</html>