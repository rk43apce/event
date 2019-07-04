<?php
session_start();
require_once "../config.php";
require '../functions.php';

 if(!exists('isLoggedIn')){

    redirect('../index.html');
 }   


 getUser(get('id'), $mysqli)

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Event CMS</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        
        <?php include('sidebar.php')?>

        <!-- Page Content Holder -->
        <div id="content">

            <?php include('header.php')?>
            
            
            <div class="container">
                <div class="event-panel">
                <div class="card">
                        <div class="card-body">
                            <h3> Create Event</h3>
                            <div class="line"></div>
                            <form action="./save-event.php" method="post"> 
                                <div class="form-group">
                                  <label for="inputEmail4">Name</label>
                                  <input type="text" class="form-control"  placeholder="Enter event name" name="event_name" required="">
                                </div>
                                <div class="form row">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Location</label>
                                      <input type="text" class="form-control"  placeholder="Enter Location" name="event_location" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Date</label>
                                      <input type="date" class="form-control"  placeholder="Enter event name" name="event_date" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                  <label for="inputEmail4">Description - <i>Optional</i> </label>
                                <textarea class="form-control" name="event_description" rows="3"></textarea>
                                </div>
                          
                             
                                <button type="submit" class="btn btn-primary">Save Event</button>
                            </form>
                        </div>
                </div>    
                </div>         
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



    
</body>



</html>