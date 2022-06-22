 <?php
$deid=$_GET["deid"];


$Typ_contr=$_POST["Typ_contrer"];
$Dur_contre=$_POST["Dur_contr"];
$tra_dayse = implode(',', $_POST['tra_days']);
$tra_timee=$_POST["tra_time"];
$pricee=$_POST["price"];
$num_traineese=$_POST["num_trainees"];



include("connect.php");

$query= "update  tbldetailstrainng set Typ_contr='$Typ_contr',Dur_contr='$Dur_contre',tra_days='$tra_dayse',tra_time='$tra_timee',price='$pricee',num_trainees='$num_traineese' where deid='$deid';";
mysqli_query($con,$query);
 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update details training.. ");'; 


$URL="View_details_training1.php";
echo "location.href='$URL'";
echo '</script>';


?>
