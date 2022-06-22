<?php
	session_start();
	$usernam = $_SESSION['txtid1'];
	
	include ("connect.php");
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$nrpwd = $_POST['nrpwd'];
	
	$query1 = "select * from   tbltrainee where trainee_uname= '$usernam'";
	$result1 = mysqli_query($con,$query1);
	 while($row = mysqli_fetch_assoc($result1)) {
	$password=$row["trainee_passw"];
	}
			
	if($password == $opwd){
			
		
		$query1 = "update tbltrainee set  trainee_passw='$npwd',trainee_repassw='$nrpwd'   where  trainee_uname='$usernam'";
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

$URL="treinee_Changepassword.php";
echo "location.href='$URL'";
echo '</script>';
	
	
			
	
		
?>
