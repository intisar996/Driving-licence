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

$anamee=$_POST['aname'];
$usernamea=$_POST['ausername'];
$emaile  =$_POST['email'];
$phonee  =$_POST['phone'];
$addresse  =$_POST['address'];
$seqe  =$_POST['seq'];
$anse  =$_POST['ans'];
$passworde =$_POST['password'];
$repassworde=$_POST['repassword'];





 
 
 
 if (isset($_POST['submit'])) {
  	$usernamea = $_POST['ausername'];
  	
  	$sql_u = "SELECT * FROM tbladmin WHERE ausername='$usernamea'";
  	$sql_e = "SELECT * FROM tbltrainer WHERE username='$usernamea'";
  	 $sql_r = "SELECT * FROM tbltrainee WHERE trainee_uname='$usernamea'";


  	$res_u = mysqli_query($con, $sql_u);
  	 $res_e = mysqli_query($con, $sql_e);
  	  $res_r = mysqli_query($con, $sql_r);


  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="AdminHomepage.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	 	elseif (mysqli_num_rows($res_e) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="AdminHomepage.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	
  	 	elseif (mysqli_num_rows($res_r) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="AdminHomepage.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}

  	
  	
  	else{
 
 
 
 
 
   




$con=mysqli_connect("localhost","root","","dbsdriving"); 

 $xquery = "insert into tbladmin(aname,ausername,email,phone,address,seq,ans,password,repassword) values('$anamee','$usernamea','$emaile','$phonee','$addresse','$seqe','$anse','$passworde','$repassworde')";
mysqli_query($con,$xquery);


   

}}

echo '<script type="text/javascript">'; 
echo 'alert(" successful register... ..");'; 

$URL="AdminHomepage.php";

echo "location.href='$URL'";
echo '</script>';







?>


</body>

</html>
