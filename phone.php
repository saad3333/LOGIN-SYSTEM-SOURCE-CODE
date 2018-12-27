<?php 
session_start();
include_once 'headerFile.php';

 ?>

    <ul class="nav navbar-nav">

      <li ><a href="fst.php" style="color: white">Home Page</a></li>
      <li class="active"><a href="phone.php" style="color: white">Phone Data</a></li>
      
    </ul>

</div>
</nav>

<center><h1 style="font-size: 40px ; padding-top: 100px">Phone PAGE</h1></center>

<?php 

$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullURL, "phonedata=empty")) {
  
  echo "<center><p class = 'text-danger' style='font-size: 15px'>Please Fill Complete Form</p></center>";
}
elseif (strpos($fullURL, "phonedata=invalid")) {
  echo "<center><p class = 'text-danger' style='font-size: 15px'>Invalid Characters</p></center>";
}
elseif (strpos($fullURL, "phonedata=email")) {
  echo "<center><p class = 'text-danger' style='font-size: 15px'>Invalid Email</p></center>";
}

 ?>
<div class="container" style="padding-top: 100px">
  
<form class="form-horizontal" method="POST" action="phoneProcess.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="fstname">First Name:</label>
    <div class="col-sm-8">
  
      <?php 
        if (isset($_GET['fstname'])) {
          $newfstname = $_GET['fstname'];
          echo '
    
          <input type="text" class="form-control" id="fstname" name="fstname" placeholder="Enter First Name" value="'.$newfstname.'">
 
          ';

        }


        else{
          echo '

          <input type="text" class="form-control" id="fstname" name="fstname" placeholder="Enter First Name">

          ';
        }

        
       ?>
      </div>
  </div>
   
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-8">
      <?php 

        if (isset($_GET['lastname'])) {
          $newlastname = $_GET['lastname'];
          echo '<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" value="'.$newlastname.'">';
        }else{
          echo '<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">';
        }
       ?>
      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="newemail">Email:</label>
    <div class="col-sm-8">

      <?php 

        if (isset($_GET['newemail'])) {
          $newemailphone = $_GET['newemail'];
          echo '<input type="email" class="form-control" id="newemail" name="newemail" placeholder="Enter Email" value="'.$newemailphone.'">';
        }else{
          echo '<input type="email" class="form-control" id="newemail" name="newemail" placeholder="Enter Email">';
        }
       ?>

      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone Num:</label>
    <div class="col-sm-8"> 
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="users">User's ID:</label>
    <div class="col-sm-8">
      <?php 

        if (isset($_GET['users'])) {
          $users = $_GET['users'];
          echo '<input type="text" class="form-control" id="users" name="users" placeholder="Enter User ID" value="'.$users.'">';
        }else{
          echo '<input type="text" class="form-control" id="users" name="users" placeholder="Enter User ID">';
        }
       ?>
      
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success" name="btn2">Submit</button>
    </div>
  </div>
</form>

</div>

  <?php 

include_once 'footer.php';

   ?>