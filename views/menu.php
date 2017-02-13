<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard.php">Interface Algorithms</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

            <li  id="messages" class="active"><a href="#">Messages</a></li>
            <li id="contacts"><a href="#">Contacts</a></li>
  
            <li id="tasks"><a  href="#">Task</a></li>
 

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Reports <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Sent SMS</a></li>
                    <li><a href="#">SMS Balance</a></li>
                </ul>
            </li>
            
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span id="user-name"><?php echo 'Welcome ' . $_SESSION['admin_names']; ?></span> 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Add User</a></li>
                    <li class="divider"></li>
                    <li><a href="../helpers/signout.php"><span class="glyphicon glyphicon-log-out"></span>   Logout</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
 

