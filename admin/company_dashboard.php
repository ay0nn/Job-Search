<?php

SESSION_START();
include('include/header.php');
include('include/Esidebar.php');
require_once 'Controller/CompanyController.php';



?>    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"><?php
      echo ($_SESSION['user']);?> Dashboard</h1>

      <?php
      echo '<a href="editCompany.php?id='.$_SESSION["user"].'" class="btn btn-info">Edit Profile</a>';
     // echo '<td><a href="editstuff.php?id='.$stuff["id"].'" class="btn btn-success">Edit</a></td>';
      ?>
      </div>
    </main>
  </div>
</div>
</body></html>