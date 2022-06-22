<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<?php
 session_start();
	$usernam= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainee where trainee_uname='$usernam' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $trainee_fname=$rows['trainee_fname'];
	$trainee_email=$rows['trainee_email'];
	$trainee_phone=$rows['trainee_phone'];
}
	
	  ?>

<body>
 <?php
 
 
 	$deid= $_GET['deid'];
	include ("connect.php");
	$qryname = "select * from  tbldetailstrainng where deid='$deid' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $num_trainee=$rows['num_trainees'];
	  $username=$rows['username'];

 
 
 
 include("connect.php");





 


$deid=$_GET["deid"]; 


$v=1;

$num=$num_trainee - $v;

$num_trainees=$num;




$sql="select * from tblselecttraineer where trainee_username='$usernam'";

      $res=mysqli_query($con,$sql);

        
        $row = mysqli_fetch_assoc($res);
       		if($usernam==isset($row['trainee_username']))
		{
			echo '<script type="text/javascript">'; 
echo 'alert(" You    already Select  Traineer....");'; 


$URL="traineehomepage.php";
echo "location.href='$URL'";
echo '</script>';
}
		
else{









$con=mysqli_connect("localhost","root","","dbsdriving"); 


$xquery= "insert into  tblselecttraineer (trainee_username,trainee_fname,trainee_email,phone_num,deid,username) values ('$usernam','$trainee_fname','$trainee_fname','$trainee_phone','$deid','$username')";  
mysqli_query($con,$xquery);	

$query1 = "update tbldetailstrainng set num_trainees = $num_trainees where deid = $deid";
	mysqli_query($con,$query1);


	}


if ($num_trainees < $v){
	    echo "<br><br><br><br><br><br><br>";
		echo "<center>sorry there no place <br>";
		echo"<td class='border border-warning'><a href='searchtrainer.php'>OK</a>";

		echo "<br><br><br><br><br><br><br>";
	

	}
	else

	{
	
		header("searchtrainer.php");
	}



}





	echo '<script type="text/javascript">'; 
echo 'alert(" successful Select Traineer  ");'; 

 
$URL="traineehomepage.php";
echo "location.href='$URL'";
echo '</script>';




?>

</body>

</html>


