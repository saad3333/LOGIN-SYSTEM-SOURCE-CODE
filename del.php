<?php 

session_start();

if (isset($_POST['delBtn'])) {
	
	include_once 'db.php';

    $new_id = mysqli_real_escape_string($conn, $_POST['new_id']);
    
    
         $sql = "SELECT * FROM phonenum WHERE id = '$new_id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                            $sql2 = "DELETE FROM phonenum WHERE id='$new_id';";
                            $result2 = mysqli_query($conn, $sql2);
                            header("Location: fst.php?delMsg=successfullyDelete");
                            exit();
                    }else{
                        header("Location: fst.php?updateMsg=noDataFound");
                            exit();
                    }
   
}
 ?>   
