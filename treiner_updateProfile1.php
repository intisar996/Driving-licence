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
		border-style: solid;
		border-width: 1px;
		background-color: #fff;
		font-family: "Times New Roman", Times, serif;
		font-size: medium;
	}
	.auto-style4 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
	}
	.auto-style5 {
		border-style: solid;
		border-width: 1px;
	}
	.auto-style6 {
		text-align: center;
		font-family: "Felix Titling";
		font-size: x-large;
		border-style: solid;
		border-width: 1px;
		background-color: #B5D2F3;
	}
	.auto-style7 {
		border-style: solid;
		border-width: 1px;
		background-color: #B5D2F3;
	}
	.auto-style8 {
		font-family: "Times New Roman", Times, serif;
		font-weight: bold;
		font-size: medium;
	}
	.auto-style9 {
		display: block;
		width: 100%;
		height: calc(1.5em + 0.75rem + 2px);
		font-size: medium;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		background-clip: padding-box;
		transition-property: none;
		font-family: "Times New Roman", Times, serif;
		border: 1px solid #ced4da;
		background-color: #fff;
	}
	.auto-style10 {
		font-family: "Times New Roman", Times, serif;
		border-style: solid;
		border-width: 1px;
	}
	.auto-style11 {
		font-family: "Times New Roman", Times, serif;
	}
	.auto-style12 {
		font-family: "Times New Roman", Times, serif;
		font-size: medium;
		border-style: solid;
		border-width: 1px;
	}
	.auto-style13 {
		font-size: medium;
	}
	.auto-style14 {
		font-size: medium;
		border-style: solid;
		border-width: 1px;
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

function validate()
{

 if (document.getElementById("email").value=="")
  {
	  alert("Please input a Your email.");
	  return false;
  }

  var x = document.getElementById("email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("This is not a valid e-mail address.");
  return false;
  }

   
   var number= /^[9|7|2][0-9]{7}$/;  
if (!(document.getElementById("phone").value.match(number)))  
{  
   alert(' phone number start with 9 or 7  or 2, length only 8"');  
   return false;  
}

 	if (document.getElementById("address").value=="")
  {
	  alert("Please input a  Your address .");
	  return false;
  }

 if ( document.getElementsByName('gid')[0].value == 'Select governorates' ){
    alert('Please Select governorates !');
	
	return false;	
		
	}

if ( document.getElementsByName('wid')[0].value == 'Select wilayat' ){
    alert('Please Select wilayat !');
	
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
            <a class="nav-link" href="treiner_updateProfile.php">Back</a>
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
	{ $name=$rows['fname'];
	
}
	echo $name. "!";
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
	  
<?php
include("connect.php");

$query = "select * from  tbltrainer where username='$username'";
$result= mysqli_query($con,$query);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$emailr=$row["email"];
$phoner=$row["phone"];
$addressr=$row["address"];
$img=$row["licensing"];
$imgs=$row["IDcard"];
$gid=$row["gname"];
$wid=$row["wname"];


}

?>

 







  <br />
    <br />

  			 

    <form id="form2" name="form2" method="post" action="<?php echo"update_trainerprofile_code.php?username=$username" ;?>" onsubmit="return validate(this);">

 <table align="center" cellpadding="2" class="table table-striped" style="width:594px; height: 19px">
			<tr>
				<td class="auto-style6" colspan="2" style="height: 10px">
				<h3><strong>UPDATE YOUR PROFILE</strong></h3>
				</td>
			</tr>
			<tr class="auto-style11">
				<td class="auto-style14" style="height: 27px; width: 3550px;">
				Fname</td>
				<td class="auto-style14" style="height: 27px; ">
				<?php echo "$name"; ?>&nbsp;</td>
			</tr>
			<tr class="auto-style11">
				<td class="auto-style14" style="height: 27px; width: 3550px;">
				Username</td>
				<td class="auto-style5" style="height: 27px; ">
				&nbsp;<span class="auto-style13"><?php echo "$username"; ?></span></td>
			</tr>
			<tr>
				<td class="auto-style3" style="height: 38px; width: 3550px;">
				Email</td>
				<td class="auto-style5" style="height: 38px; ">
             <span>
        <span class="text-white-50">
				<input id="email" name="email" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif; font-size: medium;" placeholder="Enter Your Email" class="form-control mb-1" value="<?php echo "$emailr"; ?>"  /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 38px; width: 3550px;">
				Phone Number</td>
				<td class="auto-style5" style="height: 38px; ">
             <span>
        <span class="text-white-50">
				<input id="phone" name="phone" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif; font-size: medium;" placeholder="Enter Your phone Number" class="form-control mb-1" value="<?php echo "$phoner"; ?>"  /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="width: 3550px;">
				Address</td>
				<td class="auto-style5">

&nbsp;<span><span class="text-Black-50"><input id="address" name="address" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif; font-size: medium;" placeholder="Enter Your Address" class="form-control mb-1" value="<?php echo "$addressr"; ?>" /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="width: 3550px;">             
        		licensing training:</td>
				<td class="auto-style5">
        <span class="text-Black-50"></span>
				<input id="pic" name="pic" style="width: 281px; font-family: 'Times New Roman', Times, serif; font-size: medium;" type="file" placeholder="upload your licensing training" class="form-control mb-1" /><?php echo "$img"; ?></td>
			</tr>
			<tr>
				<td class="auto-style12" style="width: 3550px;">
				ID Card:</td>
				<td class="auto-style5">
             <span>
        <span class="text-Black-50">
				<input id="pics" name="pics" type="file" placeholder="upload your ID Card" class="form-control mb-1" style="font-family: 'Times New Roman', Times, serif; font-size: medium"/><?php echo "$imgs"; ?></td>
			</tr>
						<tr>
				<td class="auto-style10" style="height: 38px; width: 3550px;">
				<span class="auto-style13">governorates:</span><br class="auto-style13"></td>
				<td class="auto-style5" style="height: 38px; ">
		
<select class="auto-style9" id="gid" name="gid" onChange="showState(this.value);" style="width: 99%; height: 33px">
<option value="Select governorates" >Select governorates</option>
<?php
require_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM governorates");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['gid'];?>"><?php echo $row["gname"];?></option>
<?php


}
?>

</select></td>
			</tr>
						<tr>
				<td class="auto-style12" style="height: 38px; width: 3550px;">
				wilayat:</td>
				<td class="auto-style5" style="height: 38px; ">
<select class="auto-style9" id="wid" name="wid" onChange="showCity(this.value);" style="width: 99%; height: 33px">


<option value="Select wilayat">Select wilayat</option>


</select></td>
			</tr>
	<script>
$(document).ready(function() {
$('#gid').on('change', function() {
var country_id = this.value;
$.ajax({
url: "wilayat-by-governorates.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#wid").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});
});
</script>
			
			<tr>
				<td class="auto-style4" colspan="2" style="height: 9px">
				<input name="submit" id="submit" style="width: 90px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: medium;" type="submit" value="Update" class="input btn-outline-info"  /><span class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				<input name="Cancel" style="width: 74px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: medium;" type="reset" value="Cancel"  class="input btn-outline-info"/><br class="auto-style8" />
				</td>
			</tr>
							<tr>
				<td class="auto-style7" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
</form>
	   		 <br><br><br><br><br><br><br>

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



