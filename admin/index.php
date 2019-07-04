<?php
session_start();
require_once "../config.php";
require '../functions.php';

 if(!exists('isLoggedIn')){

    redirect('../index.html');
 }   


 getUser(get('id'), $mysqli);



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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">   


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        
        <?php include('sidebar.php')?>

        <!-- Page Content Holder -->
        <div id="content">

            <?php include('header.php')?>
            
            
            <div class="container">

                <div class="card">

                    <div class="card-body">
                        <h3> Event List </h3>
                        <div class="line"></div>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Event name</th>
                                    <th>Event Location</th>
                                    <th>Event Date</th>
                                    <th>Event Description</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php


                                $id = get('id');

                                $sql = "
                                SELECT *
                                FROM events 
                                WHERE user_id =  '$id'"; 

                                if($result = $mysqli->query($sql)){
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_array()){
                                            ?>

                                                <tr>
                                                    <td><?php echo $row['event_name']?></td>
                                                    <td><?php echo $row['event_location']?></td>
                                                    <td><?php echo $row['event_date']?></td>
                                                    <td><?php echo $row['event_description']?></td>
                                              
                                                </tr>

                                            <?php
                                        }
                                    }
                                }

                                ?>
                               
                                </div>

                            </tbody>
                        </table>
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

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>


</body>



</html>