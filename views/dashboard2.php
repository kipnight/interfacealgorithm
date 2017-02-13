<?php include('../helpers/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Dashboard | Template </title>
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/header.css">
    </head>

    <body>

        <div class="container" id="main_cont">



            <div id="menu">
                <?php include('../views/menu.php'); ?>
            </div>
            <div id="header">
                <?php include('../views/header.php'); ?>

            </div>
            <hr>
                  <!---------------------------------------------------------------------------------------------------------------------------->

                
                
            <div class="container-fluid" id="cont">
                <div class="col-sm-2 col-md-2 sidebar" >
                    <ul class="nav nav-sidebar">
                        <li  id="messages" class="active"><a href="#">Messages</a></li>
                        <li id="contacts"><a href="#">Contacts</a></li>
                        <li id="reports"><a  href="#">Reports</a></li>
                        <li id="tasks"><a  href="#">Task</a></li>
                    </ul>
                </div>
                <div class="row line clearfix" >

                </div>


                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 main" >
                    <div  id="dashboard_messages" class="hidden alert alert-danger">
                        Some test
                    </div>

                    <div  id="main_content">


                    </div>

                </div>




            </div>
            

                <!---------------------------------------------------------------------------------------------------------------------------->     
            </div><!--/content-->
            <hr>
            <hr>
            mwisho

            <br>



            <br>
            <br>
            <br>

            <?php include('../views/footer.php'); ?>
        </div><!--/main_cont-->

        <script src="../assets/js/jquery-3.1.1.min.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/custom/dashboard.js"></script>
        <script src="../assets/js/custom/db.js"></script>
        
    </body>
</html>