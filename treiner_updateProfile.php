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
             <a class="nav-link" href="trainerhomepage.php">Back
              <span class="sr-only">(current)</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>     <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
    Welcome:<?php
	
	$username= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainer where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['fname'];
	
}
	echo $namee. "!";
	?>
	</div>

  </nav>


 <header class="text-center" style="background-image:url('img/bg1.jpg'); background-repeat:no-repeat; background-size:cover; height: 300px;">
    &nbsp;<br /><br /><br />
	 <img class="img-fluid rounded-circle"  src="img/images.png" alt="" height="147" width="168">
	 <h2>Driving License Trainer</h2>
	 </header>

<br /><br />
<br />
	   <br />


       <br />
<br /><br />


 










  <br />
    <br />

  			  <br><br><br>





  

<?php
$query = "Select * from tbltrainer where username='$username'";

$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);

$i = 0;
echo"<table  class=table table-striped  border=1 width=700 align=center cellspacing=0>";

echo"<tr>";
echo"<th class='border border-info'>Email";
echo"<th class='border border-info'>Phone Number";
echo"<th class='border border-info'>Address";
echo"<th class='border border-info'>governorates";
echo"<th class='border border-info'>wilayat";
echo"<th class='border border-info'>Licensing Training";
echo"<th class='border border-info'>ID Card";

echo"<th>Action";

while($row = mysqli_fetch_assoc($result)) {
$vemail =$row['email'];
$vphone =$row['phone'];
$vaddress =$row['address'];
$vgname =$row['gname'];
$vwname =$row['wname'];
$vlicensing = $row['licensing'];
$vIDcard = $row['IDcard'];
echo"<tr>";

echo"<td align ='center' class='border border-info'>$vemail";
echo"<td align ='center' class='border border-info'>$vphone";
echo"<td align ='center' class='border border-info'>$vaddress";
echo"<td align ='center' class='border border-info'>$vgname";
echo"<td align ='center' class='border border-info'>$vwname";
echo"<td valign='top' class='border border-info' align='center' width ='125'><img src ='img/$vlicensing' height =125 width =125>";
echo"<td valign='top' class='border border-info' align='center' width ='125'><img src ='img/$vIDcard' height =125 width =125>";



echo"<td align ='center' class='border border-info'><a href ='treiner_updateProfile1.php?username=$username'>Update</a>";

echo"</tr>";
$i++;
}
echo"</table>";



?>
  <br /><br /><br /><br /><br /><br />

  
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



