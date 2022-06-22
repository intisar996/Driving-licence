<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
	<?php
	session_start();
?>

<body>
<?php
	

	     
include('connect.php');
      $gid= $_POST['gid'];
	include ("connect.php");
	$qryname = "select * from  governorates where gid='$gid' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $gname=$rows['gname'];



include('connect.php');
      $wid= $_POST['wid'];
	include ("connect.php");
	$qryname = "select * from  wilayat where wid='$wid' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $wname=$rows['wname'];



$trainee_fnamee  =$_POST['trainee_fname'];
$trainee_lnamee  =$_POST['trainee_lname'];
$trainee_emaile  =$_POST['trainee_email'];
$trainee_phonee  =$_POST['trainee_phone'];
$trainee_unamee  =$_POST['trainee_uname'];
$trainee_gendere  =$_POST['trainee_gender'];
$trainee_brithdatee  =$_POST['trainee_brithdate'];

$seqee  =$_POST['seqe'];
$ansee  =$_POST['anse'];
$trainee_passwe  =$_POST['trainee_passw'];
$trainee_repasswe  =$_POST['trainee_repassw'];





if (isset($_POST['submit'])) {
  	$trainee_unamee = $_POST['trainee_uname'];
  	
  	$sql_u = "SELECT * FROM tbladmin WHERE ausername='$trainee_unamee'";
  	$sql_e = "SELECT * FROM tbltrainer WHERE username='$trainee_unamee'";
  	 $sql_r = "SELECT * FROM tbltrainee WHERE trainee_uname='$trainee_unamee'";


  	$res_u = mysqli_query($con, $sql_u);
  	 $res_e = mysqli_query($con, $sql_e);
  	  $res_r = mysqli_query($con, $sql_r);


  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainee.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	 	elseif (mysqli_num_rows($res_e) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainee.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	
  	 	elseif (mysqli_num_rows($res_r) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainee.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}

  	
  	
  	else{


$servername = "localhost";
$dbname = "dbsdriving";

// Create connection
$con = new mysqli($servername,"root","", $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


 $xquery = "insert into tbltrainee  (trainee_fname,trainee_lname,trainee_email,trainee_phone,gnamee,wnamee,trainee_uname,trainee_gender,trainee_brithdate,seqe,anse,trainee_passw,trainee_repassw) values('$trainee_fnamee','$trainee_lnamee','$trainee_emaile','$trainee_phonee','$gname','$wname','$trainee_unamee','$trainee_gendere','$trainee_brithdatee','$seqee','$ansee','$trainee_passwe','$trainee_repasswe')";
if ($con->query($xquery) === TRUE) {
 echo '<script type="text/javascript">'; 
echo 'alert(" successful Register Account ..");'; 

echo "location.href='$URL'";
echo '</script>';
} else {
  echo "Error: " . $xquery . "<br>" . $con->error;
}
$con->close();
   





}}}}
echo '<script type="text/javascript">'; 
echo 'alert(" successful register..");'; 

$URL="registertrainee.php";
echo "location.href='$URL'";
echo '</script>';







?>


</body>

</html>
