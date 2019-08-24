<?php
if(isset($_POST['login-submit']))
{
	require("db.inc.php");
	$username=$_POST['mailuid'];
	$password=$_POST['pwd'];
	if(empty($username) || empty($password))
	{
		header("location:../index.php?error=emptyfields");
		exit();
	}
	else
	{
		$sql="select * from users where uidusers='$username' OR emailusers='$username'";
		$query=mysqli_query($conn,$sql) or die("check the query");
		if(mysqli_num_rows($query)>0)
		{
			
			if($result=mysqli_fetch_array($query))
			{
				$pwdCheck=password_verify($password,$result['pwdusers']);
				if($pwdCheck==false)
				{
					header("location:../index.php?error=wrongpassword");
					exit();
				}
				else
				{
					session_start();
					$_SESSION['userId']=$result['idusers'];
					$_SESSION['userUid']=$result['uidusers'];
					header("location:../index.php?login=success");
					exit();
				}
			}
		}
		else
		{
			header("location:../index.php?error=wronguser");
			exit();
		}
	}
}
else
{
	header("location:../index.php");
	exit();
}