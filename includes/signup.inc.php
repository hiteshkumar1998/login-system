<?php
if(isset($_POST['signup-submit']))
{
	require("db.inc.php");
	$username=$_POST['uid'];
	$email=$_POST['mail'];
	$password=$_POST['pwd'];
	$passwordRepeat=$_POST['pwd-repeat'];

	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
	{
		header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email."");
		exit();

	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
	{
		header("location: ../signup.php?error=invalidmailuid");
		exit();
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username))
	{
		header("location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	elseif($password!==$passwordRepeat)
	{
		header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else
	{
		$sql="select uidusers from users where uidusers='$username'";
		$query=mysqli_query($conn,$sql) or die("check the query");
		if(mysqli_num_rows($query)>0)
		{
			header("location: ../signup.php?error=usertaken&mail=".$email);
			exit();
		}
		else
		{
			$hashPwd=password_hash($password, PASSWORD_DEFAULT);
			$sql="insert into users (uidusers,emailusers,pwdusers) values('$username','$email','$hashPwd')";
			$query=mysqli_query($conn,$sql) or die("check the query");
			header("location:../signup.php?signup=success");
			exit();
		}
	}
	mysqli_close($conn);
}
else
{
	header("location:../signup.php");
	exit();
}
