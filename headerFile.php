
<!DOCTYPE html>
<html>
<head>
	<title>WEB</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-left">
<li><a href="scnd.php" style="color: white" type="submit"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">


<?php 

if (isset($_SESSION['u_id'])) {
  echo '<form class="form-inline" action="logout.php" method="POST">
  
  <button style="background-color: black; color: white" type="submit" name="lout" class="btn btn-default">Logout</button>


</form>';
} else {
  echo '<form class="form-inline" action="login.php" method="POST">
  <div class="form-group">
    

    <input type="text" class="form-control" placeholder="Enter First Name / Email" id="email" name="email">
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
  </div>

  <button style="background-color: black; color: white" type="submit" name="submit" class="btn btn-default">Login</button>


</form>' ;
}


 ?>


      



      
    </ul>
