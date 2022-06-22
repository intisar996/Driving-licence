<?php
	$mans=$_POST["answer"];
	$usernam=$_GET["trainee_uname"];
	
	include ("connect.php");
	$query = "select * from  tbltrainee where  trainee_uname='$usernam'";
	$result = mysqli_query($con,$query);
	 while($row = mysqli_fetch_assoc($result)) {

	$anss=$row["anse"];
	$sq=$row["seqe"];
	}
	
	if ($mans==$anss)
		header("Location: newpwdatreinee.php?trainee_uname=$usernam");
		
		else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied Answer .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';

}



?>