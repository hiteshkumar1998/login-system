<?php
include("header.php");
?>
<div class="container" style="width:40%;">
  <h2 class="text-center text-primary">Signup Form</h2>
  <?php
  if(isset($_GET['error']))
  {
    if($_GET['error']=="emptyfields")
    {
      echo '<p class="text-danger text-center">Fill the all fields</p>';
    }
    else if($_GET['error']=="invalidmailuid")
    {
      echo '<p class="text-danger text-center">Invalid usernamne and email</p>';
    }
    else if($_GET['error']=="invalidmail")
    {
      echo '<p class="text-danger text-center">Invalid Email</p>';
    }
    else if($_GET['error']=="invaliduid")
    {
      echo '<p class="text-danger text-center">Invalid Username</p>';
    }
    else if($_GET['error']=="passwordcheck")
    {
      echo '<p class="text-danger text-center">Password must be equal</p>';
    }
    else if($_GET['error']=="usertaken")
    {
      echo '<p class="text-danger text-center">Username already taken </p>';
    }
  }
  elseif(isset($_GET['signup']))
    {
      if($_GET['signup']=="success")
      {
        echo '<p class="text-success text-center">You are successfully signup</p>';
      }
    }
  ?>
  <form class="form-horizontal" action="includes/signup.inc.php" method="post">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter username" name="uid">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter email" name="mail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <label class="control-label col-sm-2" for="pwd">Repeat Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" placeholder="Repeat password" name="pwd-repeat">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="signup-submit" class="btn btn-success">Signup</button>
      </div>
    </div>
  </form>
  <a href="reset-password.php" style="padding-left: 200px;">Forgot Your Password?</a>
</div>
<?php include("footer.php") ?>