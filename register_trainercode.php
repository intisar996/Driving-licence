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



$fnamee  =$_POST['fname'];
$lnamee  =$_POST['lname'];
$emaile  =$_POST['email'];
$phonee  =$_POST['phone'];
$addresse  =$_POST['address'];
$brithdate  =$_POST['brithdate'];
$gender  =$_POST['gender'];
$imgs=$_FILES['pic']['name'];
$imge=$_FILES['pics']['name'];
$seq  =$_POST['seq'];
$answer  =$_POST['answer'];
$username  =$_POST['username'];
$password  =$_POST['password'];

$status="NEW";



 
 
 
 
 
 
 if (isset($_POST['submit'])) {
  	$username = $_POST['username'];
  	
  	$sql_u = "SELECT * FROM tbladmin WHERE ausername='$username'";
  	$sql_e = "SELECT * FROM tbltrainer WHERE username='$username'";
  	 $sql_r = "SELECT * FROM tbltrainee WHERE trainee_uname='$username'";


  	$res_u = mysqli_query($con, $sql_u);
  	 $res_e = mysqli_query($con, $sql_e);
  	  $res_r = mysqli_query($con, $sql_r);


  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainer.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	 	elseif (mysqli_num_rows($res_e) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainer.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	
  	 	elseif (mysqli_num_rows($res_r) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registertrainer.php";

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
  	

 
 $xquery = "insert into tbltrainer  (fname,lname,email,phone,address,brithdate,gender,licensing,IDcard,seq,answer,username,password,status,gname,wname) values('$fnamee','$lnamee','$emaile','$phonee','$addresse','$brithdate','$gender','$imgs','$imge','$seq','$answer','$username','$password','$status','$gname','$wname')";

move_uploaded_file($_FILES["pic"]["tmp_name"],"img/".$_FILES["pic"]["name"]);
move_uploaded_file($_FILES["pics"]["tmp_name"],"img/".$_FILES["pics"]["name"]);

if ($con->query($xquery) === TRUE) {
 echo '<script type="text/javascript">'; 
echo 'alert(" successful Submit ..Wait Until Admin Approve Your Account ..");'; 

echo "location.href='$URL'";
echo '</script>';
} else {
  echo "Error: " . $xquery . "<br>" . $con->error;
}
$con->close();
   

}}}}

echo '<script type="text/javascript">'; 
echo 'alert(" successful register... wait Until Approve Your Account..");'; 

$URL="registertrainer.php";

echo "location.href='$URL'";
echo '</script>';







?>


</body>

</html>
