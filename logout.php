
<?php 
if (isset($_POST['lout'])) {

	session_start();
	session_unset();
	session_destroy();
	header("Location: fst.php?login=logout");
	exit();

	
}


 ?>