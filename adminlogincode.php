
<?php
//session start()
session_start();

//connection
include('connect.php');
$_SESSION['status']="Active";

//input
$usernamea = mysqli_real_escape_string($con,$_POST['txtid1']);
 $pw = mysqli_real_escape_string($con,$_POST['txtpword1']); 
 
$username = mysqli_real_escape_string($con,$_POST['txtid1']);
$passw= mysqli_real_escape_string($con,$_POST['txtpword1']);

$usernam = mysqli_real_escape_string($con,$_POST['txtid1']);
$pass= mysqli_real_escape_string($con,$_POST['txtpword1']);

 



//Query
$query ="Select * FROM  tbladmin where ausername='$usernamea'   AND password='$pw'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);



$query1 ="Select * FROM  tbltrainer where username='$username'   AND password='$passw' and  status='APPROVE'";
$result1 = mysqli_query($con,$query1);
$num1 = mysqli_num_rows($result1);


$query2 ="Select * FROM  tbltrainee where trainee_uname='$usernam'   AND trainee_passw='$pass'";
$result2 = mysqli_query($con,$query2);
$num2 = mysqli_num_rows($result2);




//correct
	if ($num>0){
			//session variables
			$_SESSION['txtid1']=$usernamea;
			$_SESSION['txtpword1']=$pw;
	   header('location:AdminHomepage.php');
	   
}else if($num1 > 0) {
	session_start();
		$_SESSION['txtid1']=$username;
		$_SESSION['txtpword1']=$passw;
		header("location:trainerhomepage.php");
		
	}else if($num2 > 0) {
	session_start();
		$_SESSION['txtid1']=$usernam;
		$_SESSION['txtpword1']=$pass;
		header("location:traineehomepage.php");
   

}else

  echo '<script type="text/javascript">'; 
echo 'alert("YOUR  ID  OR PASSWORD WRONG OR NOT APPROVE .. ");'; 

$URL="adminlogin.php";
echo "location.href='$URL'";
echo '</script>';

?>



	
	
	










