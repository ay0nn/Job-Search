<?php
require_once 'Controller/LoginController.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">

    <!-- <script src="js/admin_login.js"></script> -->

  </head>
  <body class="text-center">
    
  <main class="form-signin" id="admin_login">
  <form method="POST" action="" name="">
    <h1 class="h3 mb-3 fw-normal">Admin Log in</h1>

    <div class="form-floating">
      <input type="email" name="admin_email" class="form-control" id="admin_email" placeholder="Email address">
      <label for="floatingEmail">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="admin_pass" class="form-control" id="admin_pass" placeholder="Password" >
      <label for="floatingPassword">Password</label>
    </div>

    <input class="w-100 btn btn-lg btn-primary" name="login" id="submit" type="submit" placeholder="">
    <a href="emp_login.php">Log in as employer!</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


    
  </body>
</html>


