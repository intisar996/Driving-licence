


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

	if (document.getElementById("fname").value=="")
  {
	  alert("Please input a  Your First Name .");
	  return false;
  }
    var letters = /^[A-Za-z\s]+$/;  
if (!(document.getElementById("fname").value.match(letters)))  
{  
   alert('Input letters only in the First Name');  
   return false;  
}

 	if (document.getElementById("lname").value=="")
  {
	  alert("Please input a  Your Last Name .");
	  return false;
  }
          var letters = /^[A-Za-z\s]+$/;  
if (!(document.getElementById("lname").value.match(letters)))  
{  
   alert('Input letters only in the Last Name');  
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

	if (document.getElementById("brithdate").value=="")
  {
	  alert("Please input a  Your Brithdate .");
	  return false;
  }

	 if(form2.gender[0].checked==false && form2.gender[1].checked==false)
{
	alert('Please select  Gender.');  
	return false;
}


 if (document.getElementById("pic").value=="")
  {
	  alert("Please upload your licensing training.");
	  return false;
  }

 if (document.getElementById("pics").value=="")
  {
	  alert("Please upload your  ID Card .");
	  return false;
  }
  
  if ( document.getElementsByName('seq')[0].value == 'Select Security Question' ){
    alert('Please Select Security Question !');
	
	return false;	
		
	}
	if (document.getElementById("answer").value=="")
  {
	  alert("Please input a  Your Answer .");
	  return false;
  }




	if (document.getElementById("username").value=="")
  {
	  alert("Please input a  Your username .");
	  return false;
  }
    

if (document.getElementById("password").value.length<8)  
{  
   alert('Please enter  password, length only 8 and accept  number and letters"');  
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
            <li class="nav-item active">
             <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
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





    <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  action="register_trainercode.php">

 <table align="center" cellpadding="2" class="table table-striped" style="width:594px; height: 19px">
			<tr>
				<td class="auto-style7" colspan="2" style="height: 10px">
				<h3><strong><em>Trainer Register</em></strong></h3>
				</td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 27px; width: 3550px;">
				<input name="fname" type="text"  placeholder="Enter Your First Name" class="form-control mb-1" style="width: 99%; height: 33px;" id="fname" /></td>
				<td class="auto-style6" style="height: 27px; ">
				licensing training:<input id="pic" name="pic" style="width: 281px" type="file" placeholder="upload your licensing training" class="form-control mb-1" /></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 27px; width: 3550px;">
				<input name="lname" type="text"  placeholder="Enter Your Last Name" class="form-control mb-1" id="lname" style="width: 99%; height: 33px" /></td>
				<td class="auto-style6" style="height: 27px; ">
				ID CARD:<input id="pics" name="pics" type="file" placeholder="upload your ID Card" class="form-control mb-1"/></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 3550px;">
				<input id="email" name="email" style="width: 99%; height: 33px" type="text" placeholder="Enter Your Email" class="form-control mb-1"  /></td>
				<td class="auto-style6" style="height: 38px; ">
				<select name="seq" style="width: 211px"  class="form-control mb-1">
				<option value="Select Security Question">Select Security Question</option>
				<option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?
				</option>
				<option value="What is your grandmother's first name?">What is your grandmother's first name?
				</option>
				<option value="What was your dream job as a child?">What was your dream job as a child?
				</option>
				</select></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 3550px;">
				<input id="phone" name="phone" style="width: 99%; height: 33px" type="text" placeholder="Enter Your phone Number" class="form-control mb-1"  /></td>
				<td class="auto-style6" style="height: 38px; ">
				<input name="answer" type="text"   placeholder="Enter Your Answer" class="form-control mb-1" id="answer" style="width: 99%; height: 33px"/></td>
			</tr>
			<tr>
				<td class="auto-style6" style="width: 3550px;">
				<input id="address" name="address" style="width: 99%; height: 33px" type="text" placeholder="Enter Your Address" class="form-control mb-1" /></td>
				<td class="auto-style9">

<input type="text" name="username" class="form-control mb-1" autocomplete="off" placeholder="Enter Username"  id="username" style="width: 99%; height: 33px" />
<div id="result"></div>
				
				</td>
			</tr>
			<tr>
				<td class="auto-style6" style="width: 3550px;">
				Brith date<input id="brithdate" name="brithdate" style="width: 99%; height: 33px" type="date"  max="1999-02-20" class="form-control mb-1" /></td>
				<td class="auto-style9">
				<input name="password" type="password"   placeholder="Enter Your Password" class="form-control mb-1" id="password" style="width: 99%; height: 33px"/></td>
			</tr>
						<tr>
				<td class="auto-style9" style="height: 38px; width: 3550px;">
				<input name="gender" type="radio" value="Male" id="gender">Male&nbsp;&nbsp;&nbsp;
				<input name="gender" type="radio" value="Female" id="gender0">Female</td>
				<td class="auto-style6" style="height: 38px; ">
		
<select class="form-control" id="gid" name="gid" onChange="showState(this.value);" style="width: 99%; height: 33px">
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
				<td class="auto-style9" style="height: 38px; width: 3550px;">
				&nbsp;</td>
				<td class="auto-style6" style="height: 38px; ">
<select class="form-control" id="wid" name="wid" onChange="showCity(this.value);" style="width: 99%; height: 33px">


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
				<td class="auto-style5" colspan="2" style="height: 9px">
				<input name="submit" id="submit" style="width: 90px; font-weight: bold;" type="submit" value="REGISTER" class="input btn-outline-info"  /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</b>
				<input name="Cancel" style="width: 74px; font-weight: bold;" type="reset" value="Cancel"  class="input btn-outline-info"/><b><br />
				</b></td>
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
 


   
    




<script>
  $(document).ready(function () {
    $('#username').on('blur', function () {
      var user_name = $(this).val().trim();
      if (user_name != '') {
        $.ajax({
          url: 'check.php',
          type: 'post',
          data: { user_name: user_name },
          success: function (cnt) {
            $('#result').html(cnt);
          }
        });
      }     });
  });
</script>




</body>

</html>
