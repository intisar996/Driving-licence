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

 
 
$usernam=$_GET["trainee_uname"];


$trainee_emailr=$_POST["trainee_email"];
$trainee_phoner=$_POST["trainee_phone"];






include("connect.php");


$query1= "update  tbltrainee set trainee_email='$trainee_emailr',trainee_phone='$trainee_phoner',gnamee='$gname',wnamee='$wname' where trainee_uname='$usernam';";
mysqli_query($con,$query1);

 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Your Profile.. ");'; 

$URL="treinee_UpdateProfile.php";

echo "location.href='$URL'";
echo '</script>';
}}

?>
