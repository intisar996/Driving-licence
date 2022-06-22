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
		font-size: large;
		font-family: "Felix Titling";
		text-align: center;
		border-style: solid;
		border-width: 1px;
		background-color: #CBDAEA;
	}
	.auto-style6 {
		border-style: solid;
		border-width: 1px;
		background-color: #CBDAEA;
	}
	.auto-style7 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
	}
	.auto-style8 {
		border-style: solid;
		border-width: 1px;
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
    </div>   <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
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

	   <br>
		<form action="adddetailscode.php" method="post">
			<br />
			<br />
			<br />
			<table class="table table-striped" style="width: 404px; height: 226px;" align="center">
				<tr>
					<td class="auto-style5" colspan="2" style="height: 31px">
					<strong>Training Details</strong></td>
				</tr>
				<tr>
					<td class="auto-style8" style="width: 251px">
					<span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13.12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
					Type Of Contract</span></td>
					<td class="auto-style8">
					<select id="Typ_contr" name="Typ_contr" style="height: 33px" class="form-control mb-1">
					<option value="Select Type of Contract">Select Type of Contract
					</option>
					<option value="daily contract">daily contract</option>
					<option value="temporary contract">temporary contract
					</option>
					</select></td>
				</tr>
				<tr>
					<td class="auto-style8" style="width: 251px; ">
					Duration Of The Contract</td>
					<td class="auto-style8">
					<input name="Dur_contr" type="text" class="form-control mb-1" style="width: 227px; height: 33px;" id="Dur_contr" /></td>
				</tr>
				<tr>
					<td class="auto-style8" style="width: 251px">Training Day</td>
					<td class="auto-style8">
					<input name="tra_days[]" type="checkbox" value="Saturday">Saturday&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="tra_days[]" type="checkbox" value="Wednesday">Wednesday&nbsp;&nbsp;
					<br><input name="tra_days[]" type="checkbox" value="Sunday">Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="tra_days[]" type="checkbox" value="Thursday">Thursday<br>
					<input name="tra_days[]" type="checkbox" value="Monday">Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="tra_days[]" type="checkbox" value="Friday">Friday<br>
					<input name="tra_days[]" type="checkbox" value="Tuesday">Tuesday</td>
				</tr>
				<tr>
					<td class="auto-style8" style="width: 251px">Training Times</td>
					<td class="auto-style8">
		
					<textarea cols="20" name="tra_time" style="height: 117px" class="form-control mb-1"></textarea></td>
				</tr>
				<tr>
					<td class="auto-style8" style="width: 251px">Price </td>
					<td class="auto-style8">
					<input id="price" name="price" type="text" class="form-control mb-1" style="height: 33px"></td>
				</tr>

				<tr>
					<td class="auto-style8" style="width: 251px">&nbsp;Number of 
					Trainees</td>
					<td class="auto-style8">
					<input id="num_trainees" name="num_trainees" type="text" class="form-control mb-1" style="height: 33px"></td>
				</tr>

				<tr>
					<td class="auto-style8" style="width: 251px; height: 30px;">
					Username</td>
					<td class="auto-style8" style="height: 30px">
					<?php echo "$username"; ?></td>
				</tr>

				<tr>
					<td class="auto-style7" colspan="2">
					&nbsp;<input name="submit" style="width: 86px; font-weight: bold; height: 33px;" type="submit" value="ADD" class="input btn-outline-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="Cancel" style="width: 86px; font-weight: bold; height: 33px;" type="reset" value="Cancel"  class="input btn-outline-info"/></td>
				</tr>

				<tr>
					<td class="auto-style6" colspan="2">
					&nbsp;</td>
				</tr>
				</table>
			<br />
			<br />
		</form>

<br /><br />
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
          >
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



