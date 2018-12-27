<?php 

session_start();

if (isset($_POST['btn2'])) {
	
	include_once 'db.php';

	$fstname = mysqli_real_escape_string($conn, $_POST['fstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$newemail = mysqli_real_escape_string($conn, $_POST['newemail']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $users = mysqli_real_escape_string($conn, $_POST['users']);
		

		if (empty($fstname) || empty($lastname) || empty($newemail) || empty($phone) || empty($users)) {
    		header("Location: phone.php?phonedata=empty&fstname=$fstname&lastname=$lastname&newemail=$newemail&users=$users");
    		exit();
    	} else {
    		if (!filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    			header("Location: phone.php?phonedata=email");
    		    exit();
    		} else {
    			
    			if (!preg_match("/^[a-zA-Z]*$/", $fstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
    				header("Location: phone.php?phonedata=invalid&newemail=$newemail");
    		        exit();
    			} else {
    				

    				$sql = "INSERT INTO phonenum (fname, lname, email, phone, users) VALUES ('$fstname', '$lastname', '$newemail', '$phone', '$users');";
    				mysqli_query($conn, $sql);
    				header("Location: fst.php?phonedata=successfull");
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