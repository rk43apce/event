<?php
  session_start();
 include('functions.php'); 
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
                      <h3>Sign Up</h3>
               
              
                      <p class="text-danger">
                        <?php 

                          if(exists('msg')){
                            
                            echo get('msg');

                            delete('msg');
                          }                        

                        ?>
                       </p>   

                     
                      <form action="./register.php" method="post">
                        <div class="form-group">
                          <label for="email">Full Name:</label>
                          <input type="text" class="form-control form-control-lg"  placeholder="Enter full name" name="fullname" required="">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email" name="username" required="">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control form-control-lg"  placeholder="Enter password" name="password" required="">
                        </div>                       
                         <div class="form-group">                 
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                        </div>
                      </form>
                      <div class="float-right">Already have an account?<a href="./index.php" class="btn btn-link">Log In</a></div>
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

    <script type="text/javascript">
      $(function () {
          $('#email').on('click', function () {
              var Status = $(this).val();
              $.ajax({
                  url: 'Ajax/StatusUpdate.php',
                  data: {
                      text: $("textarea[name=Status]").val(),
                      Status: Status
                  },
                  dataType : 'json'
              });
          });
      });
    </script>

</body>

</html>