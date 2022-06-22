<?php
	
	

	$username = $_GET["username"];
	
	include("connect.php");
	
	$query = "delete from  tbltrainer where username='$username'";
	


	mysqli_query($con,$query) or die(mysqli_error());
	
	echo '<script type = "text/javascript">';
	echo 'alert("TrainerDELETED");';
	echo 'window.location="admin_View_disAprove_Trainer.php"</script>';
	
		
          
?>


