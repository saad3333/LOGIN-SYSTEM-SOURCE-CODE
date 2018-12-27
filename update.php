<?php 

session_start();

if (isset($_POST['updateBtn'])) {
	
	include_once 'db.php';

    $id = mysqli_real_escape_string($conn, $_POST['i_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['i_fname']);
    $sname = mysqli_real_escape_string($conn, $_POST['i_sname']);
    $email = mysqli_real_escape_string($conn, $_POST['i_email']);
    $phone = mysqli_real_escape_string($conn, $_POST['i_phone']);
    $users = mysqli_real_escape_string($conn, $_POST['i_users']);
    
        if (!preg_match("/^[a-zA-Z0-9]*$/", $fname) || !preg_match("/^[a-zA-Z0-9]*$/", $sname) || !preg_match("/^[a-zA-Z0-9]*$/", $users)) {
                    header("Location: fst.php?updateMsg=invalid");
                    exit();
                }else{

                    $sql = "SELECT * FROM phonenum WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                            $sql2 = "UPDATE phonenum SET fname='$fname', lname='$sname', email='$email', phone='$phone', users='$users' WHERE id='$id';";
                            $result2 = mysqli_query($conn, $sql2);
                            header("Location: fst.php?updateMsg=successfullyUpdate");
                            exit();
                    }else{
                        header("Location: fst.php?updateMsg=noDataFound");
                            exit();
                    }
                    
                }
   
}
 ?>   
