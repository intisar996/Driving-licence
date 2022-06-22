<?php
	session_start();
	$username=$_GET["username"];
	$npwd = $_POST['npwd'];
	$rnpwd = $_POST['rnpwd'];
	$_SESSION['txtid1'] = $username;

	include ("connect.php");	
	$query1 = "update tbltrainer set password='$npwd'  where username ='$username'";
	mysqli_query($con,$query1);
	
	  echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD SUCCESSFULLY CHANGED .. ");'; 

$URL="adminlogin.php";
echo "location.href='$URL'";
echo '</script>';

	
	
		
?>
    