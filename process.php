<?php 

session_start();

if (isset($_POST['btn'])) {
	
	include_once 'db.php';

	$fst = mysqli_real_escape_string($conn, $_POST['fst']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		

		if (empty($fst) || empty($last) || empty($email) || empty($pwd)) {
    		header("Location: scnd.php?signup=empty&fst=$fst&last=$last&email=$email");
    		exit();
    	} else {
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			header("Location: scnd.php?signup=email");
    		    exit();
    		} else {
    			
    			if (!preg_match("/^[a-zA-Z0-9]*$/", $fst) || !preg_match("/^[a-zA-Z0-9]*$/", $last)) {
    				header("Location: scnd.php?signup=invalid&email=$email");
    		        exit();
    			} else {
    				$hashedPass = password_hash($pwd, PASSWORD_DEFAULT);

    				$sql = "INSERT INTO tablez (first, last, email, pass) VALUES ('$fst', '$last', '$email', '$hashedPass');";
    				mysqli_query($conn, $sql);
    				header("Location: fst.php?signup=successfull");
    		        exit();

    			}
    			
    		}
    		
    	}
  


  


  }
  	
    else{
    	header("Location: fst.php");
    	exit();
    }

 ?>