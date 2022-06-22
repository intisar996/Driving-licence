<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:adminlogin.php");
}

?>
        
		<?php

	$id=$_GET['id'];

	include ("connect.php");

	$query = "delete from  tblfeeback where id =$id";
	$result1 = mysqli_query($con,$query);
	          
 echo '<script type="text/javascript">'; 
echo 'alert("Feed Back has been deleted. .. ");'; 

$URL="View_FeedBack.php";
echo "location.href='$URL'";
echo '</script>';

	
	
	
	
?>


		
		
		
		
		
