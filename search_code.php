<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:adminlogin.php");
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
      
       <title>Driving License Trainer </title>
<link rel="stylesheet" type="text/css"  href="BOOTSTRAPFILE/css/bootstrap.css"> 
<script type="text/javascript"  src="BOOTSTRAPFILE/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="BOOTSTRAPFILE/js/bootstrap.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    
    
    
    
    
    <style type="text/css">
	.auto-style2 {
		background-color: #D7C7C9;
	}
	.auto-style3 {
		text-decoration: underline;
	}
	.auto-style4 {
		font-size: medium;
	}
	</style>

         <script language="javascript" type="text/javascript">
function showState(gid)
{
document.frm.submit();
}

function showCity(wid)
{
document.frm.submit();
}







</script>

    
    
    
    
    </head>

    <body  style="margin:0; padding:0; border:0;  background-color:white   ">  
   
   
     
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
     <a class="navbar-brand" href="#">Driving License Trainer </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
             <a class="nav-link" href="searchtrainer.php">Back
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>     <span class="text-black-50">
            <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
             </span>
             <span>
        <span class="text-white-50"><strong><span class="auto-style3">
		   <span class="auto-style4">Welcome:<?php
	
	$usernam= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainee where trainee_uname='$usernam' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['trainee_fname'];
	
}
	echo $namee. "!";
	?></span></span></strong>

  </nav>


 <header class="text-center" style="background-image:url('img/bg1.jpg'); background-repeat:no-repeat; background-size:cover; height: 300px;">
    &nbsp;<br /><br /><br />
	 <img class="img-fluid rounded-circle"  src="img/images.png" alt="" height="147" width="168">
	 <h2>Driving License Trainer</h2>
	 </header>

<br />
	<?php
//connection with the database

$con=mysqli_connect("localhost","root","","dbsdriving")or
      die("Unable to connect to Database");

include("mylib.php");
$errors=[];
// checking that user fill at least 1 filed  



if(empty($_POST['fname'])&& empty($_POST['username']) && !isset($_POST['gender']) && $_POST['gname']=='x' && $_POST['wname']=='y' )
{$errors[]="Please Type data in at least one field";}




// input from the form
$fname=$_POST['fname'];
$username=$_POST['username'];
if(!isset($_POST['gender']))
{$gender=0;}
else
{$gender=$_POST['gender'];}
$gname=$_POST['gname'];
$wname=$_POST['wname'];


if(count($errors)==0)
{
$query="select * from tbltrainer where fname='$fname 'or username='$username'or gender='$gender'or gname='$gname' or wname='$wname'";
$result=mysqli_query($con, $query) or die("Error in qyery:$query".mysqli_error($con));

// get the number of rows
$n=mysqli_num_rows($result);
if($n==0)
{
 echo "<h3>No Result Matching Your Search </h3>";
}
else
{
echo "<h3><center>There are $n Record/s Matching Your Search</center></h3>";

echo"<table  class=table table-striped  border=2 width=500 align=center cellspacing=2>";
echo "<tr>";
echo"<td  bgcolor='#C4D0DC'>Trainer Name</td>";
echo"<td  bgcolor='#C4D0DC'>User Name</td>";
echo"<td bgcolor='#C4D0DC'>Gender</td>";
echo"<td bgcolor='#C4D0DC''>Governorates</td>";
echo"<td bgcolor='#C4D0DC'>Wilayat </td>";
echo"<td  colspan ='2' bgcolor='#C4D0DC'>Action</th>";
echo "</tr>";



while($row=mysqli_fetch_assoc($result))
{
 $fname=$row['fname'];
 $username=$row['username'];
 $gender=$row['gender'];
 $gname=$row['gname'];
 $wname=$row['wname'];
 
 echo "<tr>";
 echo"<td><center>$fname</center></td>";
 echo"<td><center>$username</center></td>";
 echo"<td><center>$gender</center></td>";
 echo"<td><center>$gname</center></td>";
  echo"<td><center>$wname</center></td>";
  echo"<td><a href='view_details_training.php?username=$username'>Details Training</a>";


 echo "</tr>";

}// end of while
echo"</table>";
}// end of else for number of rows
}//if there is no error 
else
{
DisplayErrors();

}

?>
<br />
<p>&nbsp;</p>
<p class="auto-style2"><a href="search.php">Search again </a></p>
	    <p class="auto-style4">&nbsp;</p>
	    <br />
	   <br />
	   <br />


       <br />
<br /><br />


 










  <br />
    <br />

  <br />

  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Footer -->
<footer class="auto-style2">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-dinager" 
       >
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            About Driving Licence
          </h6>
          <p>
            <a href="#!" class="text-reset">Contact US </a>
          </p>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
          <p>
            <a href="#!" class="text-reset">website</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Location
          </h6>
          <p>
            <a href="#!" class="text-reset">masnaeuh</a>
          </p>
          <p>
            <a href="#!" class="text-reset">barka</a>
          </p>
          <p>
            <a href="#!" class="text-reset">sohar</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Muscat</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fa fa-home me-3"></i> OMAN, masnaeuh, ST 2</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            driving.masnaeuh@email.com
          </p>
          <p><i class="fa fa-phone me-3"></i> + 968 25987456</p>
          <p><i class="fa fa-print me-3"></i> + 6587412222</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Driving License Trainer</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 


   
    



</body>

</html>



