<?php
include("header.php");
?>
<main>
	<?php 
		if(isset($_SESSION['userId']))
		{
			echo "<h2 class='text-center text-success'>You are logged in</h2>";
		}
		else
		{
			echo "<h2 class='text-center text-danger'>You are logged out</h2>";
		}

	?>
</main>
<?php include("footer.php") ?>