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
		border-style: solid;
		border-width: 1px;
	}
	.auto-style4 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
	}
	.auto-style5 {
		border-style: solid;
		border-width: 1px;
		background-color: #CCE5FF;
	}
	.auto-style6 {
		border-style: solid;
		border-width: 1px;
		text-align: center;
		background-color: #CCE5FF;
	}
	.auto-style7 {
		font-family: "Bernard MT Condensed";
	}
	</style>

  
     <script type="text/javascript">

function validate()
{


if (document.getElementById("npwd").value.length<8)  
{  
   alert('Please enter a new password, length only 8 and accept number and letters"');  
   return false;  
}

if (document.getElementById("rnpwd").value.length<8)  
{  
   alert('Please re-type your password, length only 8 and accept number and letters"');  
   return false;  
}


var npwd = document.getElementById("npwd").value;
var rnpwd = document.getElementById("rnpwd").value;
if (npwd!=rnpwd)
  {
	  alert("The passwords you have entered do not match!");
	  return false;
  }   


   return true;
   
}


</script>

    
    
    
    
    </head>

    <body  style="margin:0; padding:0; border:0;  background-color:white   ">  
   <?php
	$usernam=$_GET["trainee_uname"];
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
             <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registertrainer.php">Trainer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registerTrainee.php">Trainee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">Contact us </a>
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

<br /><br />
	   <br />
	   <br />
 

    <form   method="post" action="<?php echo "updatepwdatreinee.php?trainee_uname=$usernam";?>" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data" >
	   <br />
		<br />
		<table align="center" cellpadding="2" class="table table-striped" style="width: 45%; height: 211px">
			<tr>
				<td class="auto-style5" colspan="2" style="height: 30px">
				<h2 class="text-center"><span class="auto-style7" lang="en">
				Reset password</span></h2>
				</td>
			</tr>
			<tr>
				<td class="auto-style3" style="height: 38px; width: 134px">
				new password: </td>
				<td class="auto-style3" style="height: 38px; width: 278px">
				<input name="npwd" type="password" class="form-control" style="width: 97%; height: 43px" id="npwd" /></td>
			</tr>
			<tr>
				<td class="auto-style3" style="width: 134px">repate password :</td>
				<td class="auto-style3" style="width: 278px">
				<input name="rnpwd" type="password" class="form-control" style="width: 97%; height: 43px" id="rnpwd" /></td>
			</tr>
			<tr>
				<td class="auto-style4" colspan="2">
				<input name="change" style="width: 74px" type="submit" value="submit" class="input btn-outline-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="Cancel" style="width: 74px" type="reset" value="Cancel" class="input btn-outline-primary" /></td>
			</tr>
			<tr>
				<td class="auto-style6" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
   </form>
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



