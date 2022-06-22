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
	.auto-style6 {
	font-size: large;
	font-family: "Felix Titling";
	text-align: center;
	border-style: solid;
	border-width: 1px;
	background-color: #CBDAEA;
}
.auto-style7 {
	border-style: solid;
	border-width: 1px;
	background-color: #CBDAEA;
}
.auto-style11 {
	border-style: solid;
	border-width: 1px;
}
	.auto-style12 {
	font-family: "Times New Roman", Times, serif;
}
.auto-style13 {
	display: block;
	width: 100%;
	height: calc(1.5em + 0.75rem + 2px);
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #495057;
	background-clip: padding-box;
	transition-property: none;
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #ced4da;
	background-color: #fff;
}
.auto-style15 {
	border-style: solid;
	border-width: 1px;
	font-family: "Times New Roman", Times, serif;
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
           <li class="nav-item">
            <a class="nav-link" href="traineehomepage.php">Back</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>       
        
            <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
		   Welcome:<?php
	
	$usernam= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainee where trainee_uname='$usernam' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['trainee_fname'];
	
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

<br />
		<form action="search_code.php" method="post">
			<br />
			<br />
			<br />
			<table class="table table-striped" style="width: 404px; height: 392px;" align="center">
				<tr>
					<td class="auto-style6" colspan="2" style="height: 31px">
					<strong>SEARCH OF TRAINERS</strong></td>
				</tr>
				<tr>
					<td class="auto-style15" style="width: 251px">Name</td>
					<td class="auto-style11">
					<input name="fname" class="form-control mb-1" style="width: 227px; font-family: 'Times New Roman', Times, serif;" /></td>
				</tr>
				<tr>
					<td class="auto-style15" style="width: 251px">USER&nbsp; 
					USER -NAME</td>
					<td class="auto-style11">
					<input name="username" style="width: 227px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" /></td>
				</tr>
				<tr>
					<td class="auto-style15" style="width: 251px">Gender</td>
					<td class="auto-style11">
					<input name="gender" style="height: 20px" type="radio" value="male" class="auto-style12" /><span class="auto-style12">male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>
					<input name="gender" type="radio" value="female" class="auto-style12" /><span class="auto-style12"> female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					</span> </td>
				</tr>
				<tr>
					<td class="auto-style15" style="width: 251px">Governorates</td>
					<td class="auto-style11">
		
<select class="form-control mb-1" id="gname" name="gname" onChange="showState(this.value);" style="font-family: 'Times New Roman', Times, serif">
<option value="x" >Select governorates</option>
<?php
require_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM governorates");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['gname'];?>"><?php echo $row["gname"];?></option>
<?php


}
?>

</select></td>
				</tr>
				<tr>
					<td class="auto-style15" style="width: 251px">Wilayat </td>
					<td class="auto-style11">
<select class="auto-style13" id="wname" name="wname" onChange="showCity(this.value);">


<option value="y">Select </option>


</select></td>
				</tr>
				<script>
$(document).ready(function() {
$('#gname').on('change', function() {
var country_id = this.value;
$.ajax({
url: "wilayat-by-governorates1.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#wname").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});
});
</script>

				<tr>
					<td class="auto-style15" colspan="2" style="height: 98px">
					<span class="auto-style12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>
					<input class="input btn-outline-info" name="Submit1" type="submit" value="Click Here To Search" style="font-size: large; width: 234px; font-family: 'Times New Roman', Times, serif;" /><span class="auto-style12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<br />
					<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
					</span>
					<input class="input btn-outline-info" name="Reset1" style="width: 187px; font-size: large; font-family: 'Times New Roman', Times, serif;" type="reset" value="cancel" /></td>
				</tr>

				<tr>
					<td class="auto-style7" colspan="2">
					<br></td>
				</tr>
				</table>
			<br />
			<br />
		</form>
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



