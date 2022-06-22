


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
      
       <title>Driving License Trainee </title>
<link rel="stylesheet" type="text/css"  href="BOOTSTRAPFILE/css/bootstrap.css"> 
<script type="text/javascript"  src="BOOTSTRAPFILE/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="BOOTSTRAPFILE/js/bootstrap.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    
    
    
    <style type="text/css">
	.auto-style2 {
		background-color: #D7C7C9;
	}
	.auto-style5 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
	}
	.auto-style6 {
		border-style: solid;
		border-width: 1px;
	}
	.auto-style7 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
		background-color: #DDE9F5;
	}
	.auto-style8 {
		border-style: solid;
		border-width: 1px;
		background-color: #DDE9F5;
	}
	.auto-style9 {
	border-style: solid;
	border-width: 1px;
	text-align: left;
}
	.auto-style10 {
		margin-left: 0px;
		font-family: "Felix Titling";
		font-size: x-large;
	}
	.auto-style11 {
		font-family: "Times New Roman", Times, serif;
	}
	.auto-style12 {
		border-style: solid;
		border-width: 1px;
		font-family: "Times New Roman", Times, serif;
	}
	.auto-style13 {
		margin-left: 0px;
		font-family: "Felix Titling";
		font-size: x-large;
		font-weight: 600;
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

	if (document.getElementById("name").value=="")
  {
	  alert("Please input a Your Name .");
	  return false;
  }
  

   var number= /^[9|7|2][0-9]{7}$/;  
if (!(document.getElementById("phone").value.match(number)))  
{  
   alert(' phone number start with 9 or 7  or 2, length only 8"');  
   return false;  
}

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

	if (document.getElementById("comm").value=="")
  {
	  alert("Please input a  Cooment .");
	  return false;
  }
  



 return true;
   
}






</script>
    
    
    
    
    </head>
    

    <body  style="margin:0; padding:0; border:0;  background-color:white   ">  
   
     <?php
    	$timestamp = "Asia/Muscat";
			date_default_timezone_set($timestamp);
			//echo date('d-m-Y', time() );
          $adate=date( 'Y-m-d H:i:s', strtotime( 'now' ) );
           
?>

     
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
     <a class="navbar-brand" href="#">Driving License Trainer </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
             <a class="nav-link" href="index.php">Back
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>

                 </ul>
      </div>
    </div>   
     
  </nav>



 <header class="text-center" style="background-image:url('img/bg1.jpg'); background-repeat:no-repeat; background-size:cover; height: 300px;">
    &nbsp;<br /><br /><br />
	 <img class="img-fluid rounded-circle"  src="img/images.png" alt="" height="147" width="168">
	 <h2>Driving License Trainer</h2>
	 </header>

<br />





    <form id="form2" name="form2" method="post" action="feedbackcode1.php" onsubmit="return validate(this);">

 <table align="center" cellpadding="2" class="table table-striped" style="width:524px; height: 100px;">
			<tr>
				<td class="auto-style7" colspan="2" style="height: 10px">
				<h3 class="auto-style13">FEEDBACK</h3>
				</td>
			</tr>
			<tr class="auto-style11">
				<td class="auto-style6" style="height: 38px; width: 190px;">
				Name:</td>
				<td class="auto-style9" style="height: 38px; ">
				<input class="form-control mb-1" name="name" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" type="text" id="name"></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 10px; width: 190px;">
				Phone Number:</td>
				<td class="auto-style9" style="height: 10px; ">
             <span>
        <span class="text-white-50">
				<input id="phone" name="phone" placeholder="Enter Your Phone Number" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 38px; width: 190px;">
				Email:</td>
				<td class="auto-style5" style="height: 38px; ">
             <span>
        <span class="text-white-50">
				<input id="email" name="email"  placeholder="Enter Your Email" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" /></td>
			</tr>
			
			<tr>
				<td class="auto-style12" style="height: 10px; width: 190px;">
				Comment</td>
				<td class="auto-style9" style="height: 10px; ">
                <textarea id="comm" class="form-control mb-1" name="comm" style="width: 322px; height: 129px"></textarea></td>
			</tr>
			
			<tr>
				<td class="auto-style12" style="height: 10px; width: 190px;">
				Submit Date</td>
				<td class="auto-style9" style="height: 10px; ">
				<input name="datepp" type="text" class="auto-style10" style="width: 97%; height: 36px" id="DATE_OR" value="<?php echo $adate;?>" readonly="readonly" /></td>
			</tr>
			
			<tr>
				<td class="auto-style5" colspan="2" style="height: 9px">
				<input name="submit" id="submit" style="width: 90px; font-weight: bold;" type="submit" value="Submit" class="input btn-outline-info" /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</b>
				<input name="Cancel" style="width: 90px; font-weight: bold;" type="reset" value="Cancel"  class="input btn-outline-info"/></td>
			</tr>
							<tr>
				<td class="auto-style8" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
</form>
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
