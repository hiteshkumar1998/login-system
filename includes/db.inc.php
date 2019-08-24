<?php
$conn=mysqli_connect('localhost','root','','loginsystem');
if(!$conn)
{
	echo "Connection Failed.".mysqli_connect_error();
}