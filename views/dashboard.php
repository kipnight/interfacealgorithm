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
                
            </div>
            <hr>

            <div class="row" id="content">
                <!---------------------------------------------------------------------------------------------------------------------------->

                <div id="menu_div" class="col-sm-2 sidebar" >
                    <ul class="nav nav-sidebar" id="side_menu">
                        <li  id="page1-link" class="active"><a id="messages" href="#page1"> Messages</a></li>
                        <li id="page2-ink"><a id="contacts"href="#page2">Contacts</a></li>
                        <li id="page3-link"><a id="reports" href="#page3">Reports</a></li>
                        <li id="page4-link"><a id="tasks" href="#page4">Task</a></li>
                        <li id="page5-link"><a id="others" href="#page5">Others</a></li>
                    </ul>
                </div>





                <div class="col-sm-8 main" >
                    <div  id="dashboard_messages" class="hidden alert alert-danger">
                        Some test
                    </div>

                    <div  id="main_content">



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


    </body>
</html>