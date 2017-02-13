<?php
	session_start();
	if(!(isset($_SESSION['admin_id']) && isset($_SESSION['admin_username']) && isset($_SESSION['admin_email']) && isset(					$_SESSION['admin_names']))){
		session_destroy();
		include('functions.php');
		$alpha=new alpha();
		$alpha->redirect404();
	}
?>