<?php
SESSION_START();
include('include/header.php');
include('include/sidebar.php');
?>    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <div class="user-name"> <h1 class="h2"><?php echo($_SESSION['username']); ?>
</h1></div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2"><?php echo ($_SESSION["username"]); ?>
                  </div>
      </div>
    </main>
  </div>
</div>
</body></html>