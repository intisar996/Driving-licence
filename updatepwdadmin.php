<?php
	session_start();
	$usernamea=$_GET["ausername"];
	$npwd = $_POST['npwd'];
	$rnpwd = $_POST['rnpwd'];
	$_SESSION['txtid1'] = $usernamea;

	
	include ("connect.php");	
	$query1 = "update tbladmin set password='$npwd',repassword='$rnpwd'  where ausername ='$usernamea'";
	mysqli_query($con,$query1);
	
	  echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD SUCCESSFULLY CHANGED .. ");'; 

$URL="adminlogin.php";
echo "location.href='$URL'";
echo '</script>';

	
	
		
?>
    