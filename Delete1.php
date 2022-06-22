<?php
	
	

	$username = $_GET["username"];
	
	include("connect.php");
	
	$query = "delete from  tbltrainer where username='$username'";
	$query1 = "delete from  tbldetailstrainng where username='$username'";
	$query2 = "delete from  tblselecttraineer where username='$username'";


	mysqli_query($con,$query) && mysqli_query($con,$query1)&&mysqli_query($con,$query2)or die(mysqli_error());
	
	echo '<script type = "text/javascript">';
	echo 'alert("TrainerDELETED");';
	echo 'window.location="admin_View_Aprove_Trainer.php"</script>';
	
		
          
?>


