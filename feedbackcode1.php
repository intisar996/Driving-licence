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
		

          
	    	$timestamp = "Asia/Muscat";
			date_default_timezone_set($timestamp);
			//echo date('d-m-Y', time() ); 
	
      $adate=date( 'Y-m-d H:i:s', strtotime( 'now' ) );

include('connect.php');
$name=$_POST['name'];

$phonee=$_POST['phone'];
$emaile  =$_POST['email'];
$comme  =$_POST['comm'];
 
  

$servername = "localhost";
$dbname = "dbsdriving";

// Create connection
$con = new mysqli($servername,"root","", $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

 $xquery = "insert into tblfeeback(Name,phone,email,comm,dates) values('$name','$phonee','$emaile','$comme','$adate')";
mysqli_query($con,$xquery);


   


echo '<script type="text/javascript">'; 
echo 'alert("Thank you for Submission Feedback we will contack with you as soon as possible.. ..");'; 
$URL="index.php";

echo "location.href='$URL'";
echo '</script>';






?>




</body>

</html>
