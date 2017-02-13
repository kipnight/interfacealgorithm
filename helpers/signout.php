<?php
	session_start();
	if(!isset($_SESSION['admin_id'])){
		?>
    <script type="text/javascript" language="javascript">
		location.replace("../");
	</script>
    <?php
}	
	unset($_SESSION['admin_id']);
	session_destroy();
	?>
    <script type="text/javascript" language="javascript">
		location.replace("../");
	</script>
    <?php
?>