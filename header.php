<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">About</a></li>
	      <li><a href="#">Services</a></li>
	    </ul>
      <?php
        if(isset($_SESSION['userId']))
        {
          echo '<form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit"class="btn btn-default btn-danger">Logout</button>
        </form>';
        }
        else
        {
          echo '<ul class="nav navbar-nav navbar-right">
       <li><a href="signup.php">Sign Up</a></li>
      </ul>
          <form class="navbar-form navbar-right" action="includes/login.inc.php" method="post">
          <div class="form-group">
             <input type="text" class="form-control" placeholder="Username" name="mailuid">
            <input type="text" class="form-control" placeholder="Password" name="pwd">
          </div>
         <button type="submit" name="login-submit"class="btn btn-default btn-danger">Login</button>
      </form>';
        }
      ?>
	</nav>

