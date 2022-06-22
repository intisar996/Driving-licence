 <?php
 
 include('connect.php');
      
 
 
$usernamea=$_GET["ausername"];


$emaile=$_POST["email"];
$phonee=$_POST["phone"];
$addresse=$_POST["address"];







include("connect.php");


$query1= "update  tbladmin set email='$emaile',phone='$phonee',address='$addresse' where ausername='$usernamea';";
mysqli_query($con,$query1);

 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Your Profile.. ");'; 

$URL="admin_UpdateProfile.php";

echo "location.href='$URL'";
echo '</script>';

?>
