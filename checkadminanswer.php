<?php
	
	$mans=$_POST["answer"];
	$usernamea=$_GET["ausername"];
	
	include ("connect.php");
	$query = "select * from  tbladmin where  ausername='$usernamea'";
	$result = mysqli_query($con,$query);
	 while($row = mysqli_fetch_assoc($result)) {

	$anss=$row["ans"];
	$sq=$row["seq"];
	}
	
	if ($mans==$anss)
		header("Location: newpwdadmin.php?ausername=$usernamea");
		
		else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied Answer .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';

}



?>