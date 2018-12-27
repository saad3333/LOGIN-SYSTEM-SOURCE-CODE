<?php 
session_start();
include_once 'headerFile.php';
include_once 'db.php';

 ?>

    <ul class="nav navbar-nav">
      <li class="active" ><a href="fst.php" style="color: white">Home Page</a></li>
      <li ><a href="phone.php" style="color: white">Phone Data</a></li>
      
    </ul>

</div>
</nav>

<center><h1 style="font-size: 40px ; padding-top: 100px">HOME PAGE</h1></center>
<?php 

$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullURL, "login=empty")) {
	
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Please Fill Both Fields</p></center>";
}
elseif (strpos($fullURL, "login=invalidUsername")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Incorrect First Name / Email</p></center>";
}
elseif (strpos($fullURL, "login=invalidPass")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Incorrect Password</p></center>";
}

elseif (strpos($fullURL, "updateMsg=invalid")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Invalid Characters</p></center>";
}

elseif (strpos($fullURL, "updateMsg=noDataFound")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>No Data Found Against This ID</p></center>";
}

elseif (strpos($fullURL, "updateMsg=successfullyUpdate")) {
	echo "<script type='text/javascript'>
	alert('Data Successfully Updated');
</script>";
	
}

elseif (strpos($fullURL, "delMsg=successfullyDelete")) {
	echo "<script type='text/javascript'>
	alert('Data Successfully Deleted');
</script>";
	
}
elseif (strpos($fullURL, "signup=successfull")) {
	echo "<script type='text/javascript'>
	alert('SignUp Successfully Completed, Login to Continue');
</script>";
	
}
elseif (strpos($fullURL, "login=successfull")) {
	
	
	echo "<script type='text/javascript'>
	alert('Login Successfully Completed');
</script>";
}

elseif (strpos($fullURL, "login=logout")) {
	
	echo "<script type='text/javascript'>
	alert('You are Going to Logout');
	</script>";
	
	}
		

	



 ?>
<?php 
if (isset($_SESSION['u_id'])) {
$selecterEmail = $_SESSION['u_email'];
$selecterName = $_SESSION['u_first'];
$sql = "SELECT * FROM phonenum WHERE email = '$selecterEmail' OR users = '$selecterName'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="container">
              
  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Phone Number</th>
        <th>Users ID</th>
      </tr>
    </thead>
    <tbody>';
    while($row = mysqli_fetch_assoc($result)) {
        
	
    
      echo "<tr>
        <td>";
        echo $row["id"];
        echo "</td>";
        echo "<td>";
        echo $row["fname"];
        echo "</td>";

        echo "<td>";
        echo $row["lname"];
        echo "</td>";

        echo "<td>";
        echo $row["email"];
        echo "</td>";

        echo "<td>";
        echo $row["phone"];
        echo "</td>";

        echo "<td>";
        echo $row["users"];
        echo "</td>";

        
        
        echo "</tr>";
      
      
    



	
}

echo '</tbody>
  </table>
</div>';

//Update 
echo '<div class="container">
  <h2 class="text text-primary">UPDATE DATA:</h2>
  <form class="form-inline" action="update.php" method="POST">
   
    <div class="form-group">
      <label for="i_id">ID: </label>
      <input class="form-control" id="i_id" name = "i_id" type="number" required>
    </div>
   
     <div class="form-group">
      <label for="i_fname">First Name: </label>
      <input class="form-control" id="i_fname" name="i_fname" type="text" required>
    </div>

          <div class="form-group">
      <label for="i_sname">Last Name: </label>
      <input class="form-control" id="i_sname" name="i_sname" type="text" required>
    </div>



    <div class="form-group">
      <label for="i_email">E-mail: </label>
      <input class="form-control" id="i_email" name="i_email" type="email" required>
    </div>



    <div class="form-group" style="margin-top: 20px">
      <label for="i_phone">Phone Number: </label>
      <input class="form-control" id="i_phone" name="i_phone" type="number" required>
    </div>

    <div class="form-group" style="margin-top: 20px">
      <label for="i_users">User ID: </label>
      <input class="form-control" id="i_users" name="i_users" type="text" required>
    </div>

    	<button style="margin-top: 20px" type="submit" name="updateBtn" id="updateBtn"  class="btn btn-primary btn-block">UPDATE</button>

  </form>
</div>

<div class="container" style="margin-top: 30px">
  <h2 class="text text-danger">DELETE DATA:</h2>
  <form class="form-inline" action="del.php" method="POST">
   
    <div class="form-group">
      <label for="new_id">ID: </label>
      <input class="form-control" id="new_id" name="new_id" type="number">
    </div>
   
     

    	<button style="margin-top: 20px; margin-bottom: 40px" type="submit" name="delBtn" class="btn btn-danger btn-block">DELETE</button>

  </form>
</div>
';


}
else{
	echo '<center><p style="color: red; font-size: 50px; margin-top: 100px">Table is Empty...!!</p></center>';
}


}
else{
	echo '<center><p style="color: blue; font-size: 50px; margin-top: 100px">LOGIN To View Data...!!</p></center>';
}
 ?>

 



  <?php 

include_once 'footer.php';

   ?>

