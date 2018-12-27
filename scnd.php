<?php 

session_start();

include_once 'headerFile.php';

 ?>

 <ul class="nav navbar-nav">
      <li ><a href="fst.php" style="color: white">Home Page</a></li>
      <li ><a href="phone.php" style="color: white">Phone Data</a></li>
      
    </ul>

 </div>
</nav>
<center><h1 style="font-size: 40px ; padding-top: 100px">SIGN UP PAGE</h1></center>
<?php 

$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullURL, "signup=empty")) {
	
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Please Fill Complete Form</p></center>";
}
elseif (strpos($fullURL, "signup=invalid")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Invalid Characters</p></center>";
}
elseif (strpos($fullURL, "signup=email")) {
	echo "<center><p class = 'text-danger' style='font-size: 15px'>Invalid Email</p></center>";
}


 ?>
<div class="container" style="padding-top: 100px">
	
<form class="form-horizontal" method="POST" action="process.php">
	<div class="form-group">
    <label class="control-label col-sm-2" for="fst">First Name:</label>
    <div class="col-sm-8">
	
    	<?php 
    		if (isset($_GET['fst'])) {
    			$newfst = $_GET['fst'];
    			echo '
    
    			<input type="text" class="form-control" id="fst" name="fst" placeholder="Enter First Name" value="'.$newfst.'">
 
    			';

    		}


    		else{
    			echo '

    			<input type="text" class="form-control" id="fst" name="fst" placeholder="Enter First Name">

    			';
    		}

    		
    	 ?>
      </div>
  </div>
   
  <div class="form-group">
    <label class="control-label col-sm-2" for="last">Last Name:</label>
    <div class="col-sm-8">
    	<?php 

    		if (isset($_GET['last'])) {
    			$newlast = $_GET['last'];
    			echo '<input type="text" class="form-control" id="last" name="last" placeholder="Enter Last Name" value="'.$newlast.'">';
    		}else{
    			echo '<input type="text" class="form-control" id="last" name="last" placeholder="Enter Last Name">';
    		}
    	 ?>
      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">

    	<?php 

				if (isset($_GET['email'])) {
    			$newemail = $_GET['email'];
    			echo '<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="'.$newemail.'">';
    		}else{
    			echo '<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">';
    		}
    	 ?>

      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success" name="btn">Submit</button>
    </div>
  </div>
</form>

</div>


<?php 

include_once 'footer.php';
 ?>