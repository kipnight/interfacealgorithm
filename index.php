<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Login | Interface Algorithms </title>
        <link rel="stylesheet" type="text/css" href="bootsrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">

    </head>

    <body> 
       
        <div id="navigation">
             <nav class="row navbar  navbar-fixed-top login_nav">
            <br>
            <!--<div class="col-md-2 col-md-offset-8 text-right" style="vertical-align:middle">need account?</div> -->
            <div class="col-md-4 col-md-offset-7 text-right">				

                <span> Need Account? <a href="views/signup.php"><button id="i_signup_button"  type="button" class="btn btn-danger">Sign Up</button></a></span>
            </div>
        </nav>

        </div>



        <div class="container" id="main_cont">

            <div class="row">

                <div class="col-md-6 col-md-offset-3" id="logo_column">

                    <img src="assets/img/logo.png" class="img-responsive" alt="interface algorithms">

                </div><!--/logo_column-->
            </div><!--/row logo-->      

            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="login_column">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Interface Algorithms</h3>
                        </div><!--/login panel heading-->
                        <div class="panel-body">
                            <!------------------------------------------------------------------------------->
                            <form role="form">
                                <div class="form-group">
                                    <label for="txtusername">Username</label>
                                    <input type="text" class="form-control" id="txtusername" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="txtpassword">Password</label>
                                    <input type="password" class="form-control" id="txtpassword" placeholder="Enter Password">
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" id="btnLogin" class="btn btn-success">
                                        <span class="glyphicon glyphicon-lock"></span> Login
                                    </button>
                                </div>
                                <div class="" id="response"></div>
                            </form>
                            <!------------------------------------------------------------------------------->
                        </div><!--/login     panel body-->
                        <div class="panel-footer text-center"></div>
                    </div><!--/login panel-->          
                </div><!--/login_column-->
            </div><!--/login row-->


            <?php include('views/footer.php'); ?>
        </div><!--/main_cont-->

        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom/index.js"></script>
    </body>
</html>