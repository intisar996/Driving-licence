<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<?php
	session_start();
?>

<body>
<?php
	$usernam= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainee where trainee_uname='$usernam' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['trainee_fname'];
	

          
	    	$timestamp = "Asia/Muscat";
			date_default_timezone_set($timestamp);
			//echo date('d-m-Y', time() ); 
	
      $adate=date( 'Y-m-d H:i:s', strtotime( 'now' ) );

include('connect.php');

$trainee_phonee=$_POST['phone'];
$trainee_emaile  =$_POST['email'];
$comme  =$_POST['comm'];
 
  

$con=mysqli_connect("localhost","root","","dbsdriving"); 

 $xquery = "insert into tblfeeback(Name,phone,email,comm,dates) values('$usernam','$trainee_phonee','$trainee_emaile','$comme','$adate')";
mysqli_query($con,$xquery);


   


echo '<script type="text/javascript">'; 
echo 'alert(" successful Submit Feedback... ..");'; 
$URL="traineehomepage.php";

echo "location.href='$URL'";
echo '</script>';


}




?>




</body>

</html>
