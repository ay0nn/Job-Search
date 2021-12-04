<?php
SESSION_START();
include('include/header.php');
include('include/sidebar.php');
require_once 'Model/dbconnect.php';
?>    
    <main class="col-md-5 ms-sm-auto col-lg-10 px-md-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-100">
              <div class="row">
                <div class="col-80">
                  <div class="numbers">
                  <div class="color font-bold">Total Admins: </div>
                                <div >
                                <?php
                                $query = "SELECT id FROM admin_login ORDER by id";
                                $num = getRow($query);

                                echo '<h2>'.$num.'</h2>';
                                ?> 
                  <div>Total Companies: </div>
                                <div >
                                <?php
                                $query = "SELECT cid FROM company ORDER by cid";
                                $num = getRow($query);

                                echo '<h2>'.$num.'</h2>';
                                ?> 
                                
                  <div>Job Seekers: </div>
                                <div>
                                <?php
                                $query = "SELECT sid FROM student ORDER by sid";
                                $num = getRow($query);
                                echo '<h2>'.$num.'</h2>';
                                ?>  
                  </div>
                  </div>
                </div>
                
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       
    </main>
  </div>
</div>

</body></html>