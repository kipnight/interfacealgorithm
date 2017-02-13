<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Login | Interface Algorithms</title>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
 

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container-fluid">
            <header class="row">
                <!--<div class="col-md-2 col-md-offset-8 text-right" style="vertical-align:middle">need account?</div> -->
                <div class="col-md-4 col-md-offset-7 text-right">				
                    <span> Already have an account? <a href="../index.php"><button type="button" class="btn btn-danger">Sign In</button> </a></span>
                </div>
            </header>			
            <div id="content" class="row">
                <div id="json_test"></div>
                <!-- ==========================================================================================-->
                <div id="content_left" class="col-md-5 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../assets/img/logo IA.png" class="img-responsive" alt="logo">
                        </div>
                    </div>
                    <div class="row ">
                    </div> <!--footer -->
                </div><!-- /content_left-->
                <!-- ==========================================================================================-->
                <div id="content_right" class="col-md-5">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">	
                            <!-- ___________________________________________________________________________-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Sign Up</h3>
                                </div>
                                <form role="form" method="POST"  id="sign_up" class="form-horizontal">
                                    <div id="form_panel" class="panel-body">
                                        <div id="signup_error" align="center" class="col-lg-10 col-lg-offset-1 alert-danger hidden"></div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label" for="f_name">First Name:</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" id="f_name" name="f_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label" for="l_name">Last Name:</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="l_name" id="l_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="username">Username:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="username" id="username">
                                                <span id="checking-username" class="hidden"> </span>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="email">Email:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="email" id="email">
                                                <span id="checking-email" class="hidden"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="password">Password:</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control" name="password" id="password">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="r_password">Re-type Password:</label>
                                            <div class="col-sm-7">
                                                <input type="password" class="form-control" name="r_password" id="r_password">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <div class="col-sm-7 col-sm-offset-4">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="acceptTerms" data-bv-field="acceptTerms">
                                                    <i class="form-control-feedback" data-bv-field="acceptTerms"></i>
                                                    Accept the <a href="terms-conditions">terms and policies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-right">
                                        <button type="submit"  class="btn btn-primary custom-btn-submit" id="i_signup_button">Submit</button>				
                                        <a href="../index.php" class="btn btn-success custom-btn-submit hidden" id="logon">Login</a>
                                    </div>
                                </form>
                            </div>			
                            <!-- ___________________________________________________________________________-->	
                        </div>					
                    </div>
                    <!--======== include social -->

                    <!-- end Social -->
                </div><!--=========== content_right-->
                <!-- ==========================================================================================-->

            </div> <!--/content-->

            <!-- footer========================== -->
            <div class="navbar-fixed-bottom">

            </div>
            <!-- end footer========================= -->
        </div> <!-- container-fluid -->

        <!--footer-->
        <footer>
            <div class="navbar-fixed-bottom">

            </div>
        </footer>
        <!--end footer-->


        <script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/sign_up.js"></script>

    </body>
</html>