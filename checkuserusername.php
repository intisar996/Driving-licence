<?php

include ("connect.php");

//input data 



$usernamea = ($_POST['txtid1']);
 
$username = ($_POST['txtid1']);

$usernam =($_POST['txtid1']);





//serching for details 


$query ="Select * FROM  tbladmin where ausername='$usernamea'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);



$query1 ="Select * FROM  tbltrainer where username='$username'";
$result1 = mysqli_query($con,$query1);
$count1 = mysqli_num_rows($result1);


$query2 ="Select * FROM  tbltrainee where trainee_uname='$usernam'";
$result2 = mysqli_query($con,$query2);
$count2 = mysqli_num_rows($result2);










 while($row = mysqli_fetch_assoc($result)) {
 }


if ($count>0)
{
session_start();
$adddname =$row["ausername"];
$_SESSION['aid'] = $adddname;
header ("location:forgetpasw.php?ausername=$usernamea");
} elseif ($count1>0)
{
session_start();
$adddname =$row["username"];
$_SESSION['trid'] = $adddname;
header ("location:forgetpasw1.php?username=$username");}

 elseif ($count2>0)
{
session_start();
$adddname =$row["trainee_uname"];
$_SESSION['trainee_id'] = $adddname;
header ("location:forgetpasw2.php?trainee_uname=$usernam");}




else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied ID .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';
}

?>