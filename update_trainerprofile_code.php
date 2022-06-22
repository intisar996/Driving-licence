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

 
 
$username=$_GET["username"];


$emailr=$_POST["email"];
$phoner=$_POST["phone"];
$addressr=$_POST["address"];
$img=$_POST["pic"];
$imgs=$_POST["pics"];



include("connect.php");

if(($img != "") && ($imgs != ""))
{
$query= "update  tbltrainer set email='$emailr',phone='$phoner',address='$addressr',licensing='$img',IDcard='$imgs',gname='$gname',wname='$wname' where username='$username';";
mysqli_query($con,$query);
}else if ($img != "") 
{

$query1= "update  tbltrainer set email='$emailr',phone='$phoner',address='$addressr',licensing='$img',gname='$gname',wname='$wname' where username='$username'";
mysqli_query($con,$query1);

}else if ($imgs != "") 
{

$query2= "update  tbltrainer set email='$emailr',phone='$phoner',address='$addressr',IDcard='$imgs',gname='$gname',wname='$wname' where username='$username'";
mysqli_query($con,$query2);

}else  
{

$query2= "update  tbltrainer set email='$emailr',phone='$phoner',address='$addressr',gname='$gname',wname='$wname' where username='$username'";
mysqli_query($con,$query2);

}







 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Your Profile.. ");'; 

$URL="treiner_updateProfile.php";

echo "location.href='$URL'";
echo '</script>';

}}
?>
