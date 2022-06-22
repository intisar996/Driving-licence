<?php
	session_start();
	$usernam=$_GET["trainee_uname"];
	$npwd = $_POST['npwd'];
	$rnpwd = $_POST['rnpwd'];
	$_SESSION['txtid1'] = $usernam;

	include ("connect.php");	
	$query1 = "update tbltrainee set trainee_passw='$npwd',trainee_repassw='$rnpwd'  where trainee_uname ='$usernam'";
	mysqli_query($con,$query1);
	
	  echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD SUCCESSFULLY CHANGED .. ");'; 

$URL="adminlogin.php";
echo "location.href='$URL'";
echo '</script>';

	
	
		
?>
    