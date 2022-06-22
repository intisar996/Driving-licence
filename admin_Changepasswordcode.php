<?php
	session_start();
	$usernamea = $_SESSION['txtid1'];
	
	include ("connect.php");
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$nrpwd = $_POST['nrpwd'];
	
	$query1 = "select * from   tbladmin where ausername= '$usernamea'";
	$result1 = mysqli_query($con,$query1);
	 while($row = mysqli_fetch_assoc($result1)) {
	$password=$row["password"];
	}
			
	if($password == $opwd){
			
		
		$query1 = "update tbladmin set  password='$npwd',repassword='$nrpwd'   where  ausername='$usernamea'";
		mysqli_query($con,$query1);
		
				
		
		 echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD successfully changed.. ");'; 

$URL="logout.php";
echo "location.href='$URL'";
echo '</script>';
	
		
	}
			
	else
				 echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD Not changed .. Try again ");'; 

$URL="admin_Changepassword.php";
echo "location.href='$URL'";
echo '</script>';
	
	
			
	
		
?>
