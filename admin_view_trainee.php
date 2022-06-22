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
	.auto-style5 {
		text-decoration: underline;
		text-align: center;
	}
	.auto-style6 {
		font-size: medium;
		text-align: center;
	}
	.auto-style7 {
		font-size: medium;
		text-align: left;
	}
	</style>

     <script type="text/javascript">
 
function validate()
{
  
if (document.getElementById("txtid1").value=="")
  {
	  alert("Please input a your User Name.");
	  return false;
  }  
  
   if (document.getElementById("txtpword1").value.length<8)
  {
	  alert("Please input a Password. 8 digits.");
	  return false;
  }


  return true;
   
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
                     <li class="nav-item">
            <a class="nav-link" href="AdminHomepage.php">Back</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>   <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>Welcome:<?php
	
	$usernamea= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbladmin where ausername='$usernamea' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['aname'];
	
}
	echo $namee. "!";
	?></div>

  </nav>


 <header class="text-center" style="background-image:url('img/bg1.jpg'); background-repeat:no-repeat; background-size:cover; height: 300px;">
    &nbsp;<br /><br /><br />
	 <img class="img-fluid rounded-circle"  src="img/images.png" alt="" height="147" width="168">
	 <h2>Driving License Trainer</h2>
	 </header>

<br /><br />
<?php
		







  include('connect.php');
    
    $q="select * from  tbltrainee    ";

    

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
$i=0;

echo"<table  class=table table-striped  border=1 width=700 align=center cellspacing=0>";

echo"<th class='border border-info'>  ID";

echo"<th class='border border-info'>  Treinee Name";
echo"<th class='border border-info'> Trainee Email	";
echo"<th class='border border-info'> Trainee Phone";
echo"<th class='border border-info'> Trainee UserName";
echo"<th class='border border-info'> Trainee gender";

echo"<th class='border border-info'> Governets";




echo"<th colspan ='1' class='border border-info'> Action";

echo"<tr>";
while($row = mysqli_fetch_assoc($r)) {
$trainee_id=$row["trainee_id"];

$trainee_fname=$row["trainee_fname"];
$trainee_email=$row["trainee_email"];
$trainee_phone=$row["trainee_phone"];
$usernam=$row["trainee_uname"];
$trainee_gender=$row["trainee_gender"];
$gnamee=$row["gnamee"];






echo"<tr class='border border-info'>";
echo"<td class='border border-info'>$trainee_id";

echo"<td class='border border-info'>$trainee_fname";
echo"<td class='border border-info'>$trainee_email";
echo"<td class='border border-info'>$trainee_phone";

echo"<td class='border border-info'>$usernam";
echo"<td class='border border-info'>$trainee_gender";
echo"<td class='border border-info'>$gnamee";




echo"<td class='border border-info'><a href='View_Your_Trainer_admin1.php?trainee_uname=$usernam'>MORE DETAILS</a>";







echo"</tr>";

	$i++;
		


}


echo"</table><br>";

?>


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



