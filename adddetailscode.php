
<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:adminlogin.php");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
	

	     
$username= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainer where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['fname'];



$Typ_contre  =$_POST['Typ_contr'];
$Dur_contre  =$_POST['Dur_contr'];
$checkBox = implode(',', $_POST['tra_days']);
$tra_timee  =$_POST['tra_time'];
$pricee  =$_POST['price'];
$num_traineese  =$_POST['num_trainees'];



if(isset($_POST['submit']))
{       
 




$con=mysqli_connect("localhost","root","","dbsdriving"); 

 $xquery = "insert into tbldetailstrainng  (Typ_contr,Dur_contr,tra_days,tra_time,price,num_trainees,username) values('$Typ_contre','$Dur_contre','$checkBox','$tra_timee','$pricee','$num_traineese','$username')";
mysqli_query($con,$xquery);


}

}

echo '<script type="text/javascript">'; 
echo 'alert(" successful ADD Training Details..");'; 

$URL="View_details_training1.php";

echo "location.href='$URL'";
echo '</script>';








?>


</body>

</html>
