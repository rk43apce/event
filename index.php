<?php
session_start();
require './functions.php';

 if(exists('isLoggedIn')){

    redirect('./admin/');
 }   

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Event</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    
    <div class="container">
        <div class="login-panel">
            <div class="card">
                <div class="card-body">
                      <h3>Welcome back!</h3>
                      <p>Sign in with your email id to countinue</p>
                      <p class="text-danger">
                        <?php 

                          if(exists('msg')){
                            
                            echo get('msg');

                            delete('msg');
                          }                        

                        ?>
                       </p>  
                      <form action="./verify-user.php" method="post">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email" name="username"  autofocus="" required="">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Enter password" name="password" required="">
                        </div>      
                        <div class="form-group">                 
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                        </div>
                      </form>

                      <div class="float-right">Don't have an account?<a href="./sign-up.php" class="btn btn-link"> Get started</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" ></script>

</body>

</html>