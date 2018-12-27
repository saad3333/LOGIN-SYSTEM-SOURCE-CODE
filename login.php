<?php 

session_start();

if (isset($_POST['submit'])) {
	
	include_once 'db.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($email) || empty($pwd)) {
		header("Location: fst.php?login=empty&email=$email");
		exit();
	} else {
		
		$sql = "SELECT * FROM tablez WHERE first = '$email' OR email = '$email';";

		$result = mysqli_query($conn, $sql);

		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: fst.php?login=invalidUsername");
			exit();
		} else {
			
			if($row = mysqli_fetch_assoc($result)){

				$hashed = password_verify($pwd, $row['pass']);

				if ($hashed == false) {
					header("Location: fst.php?login=invalidPass&email=$email");
					exit();
				} elseif ($hashed == true) {
					
			        
			        $_SESSION['u_id'] = $row['id'];
			        $_SESSION['u_first'] = $row['first'];
			        $_SESSION['u_last'] = $row['last'];
			        $_SESSION['u_email'] = $row['email'];
			        $_SESSION['u_pass'] = $row['pass'];

			        header("Location: fst.php?login=successfull");
			        exit();

				}
				



			}
		}
		
	}
	
	

	
} else {
	header("Location: fst.php");
	exit();
}



 ?>