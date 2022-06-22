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
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		text-decoration: underline;
		text-align: center;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style6 {
		font-size: medium;
		text-align: center;
	}
	.auto-style7 {
		border: 1px solid #212529;
		font-size: medium;
		text-align: left;
	}
	.auto-style8 {
		background-color: #CBDAEA;
	}
	.auto-style9 {
		text-align: center;
		background-color: #CBDAEA;
	}
	.auto-style10 {
		border-left: 1px solid #000000;
		text-decoration: underline;
		border-right-style: solid;
		border-right-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style11 {
		border-style: solid;
		border-width: 1px;
		font-size: medium;
	}
	.auto-style12 {
		border: 0px solid #000000;
	}
	.auto-style13 {
		border-right: 1px solid #000000;
		font-size: medium;
		text-align: center;
		border-left-style: solid;
		border-left-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style14 {
	border-style: solid;
	border-width: 1px;
	text-decoration: underline;
	text-align: center;
	background-color: #CBDAEA;
}
	.auto-style15 {
		background-color: #d6d8db;
		text-align: center;
	}
	.auto-style16 {
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		font-size: medium;
		background-color: #D6D8DB;
		text-align: center;
		font-family: "Felix Titling";
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style17 {
		border-left: 1px solid #000000;
		font-size: medium;
		color: #000000;
		border-right-style: solid;
		border-right-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style18 {
		background-color: #ABDDE5;
	}
	.auto-style19 {
		border-style: solid;
		border-width: 1px;
		font-size: medium;
		background-color: #D6D8DB;
		text-align: center;
		font-family: "Felix Titling";
	}
	.auto-style20 {
		border-style: solid;
		border-width: 1px;
	}
	.auto-style21 {
		border-style: solid;
		border-width: 1px;
		background-color: #fff;
	}
	.auto-style25 {
		border-left: 1px solid #000000;
		text-decoration: underline;
		text-align: center;
		background-color: #CBDAEA;
		border-right-style: solid;
		border-right-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style26 {
		border-left: 1px solid #000000;
		font-size: medium;
		border-right-style: solid;
		border-right-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style27 {
		border-right: 1px solid #000000;
		font-size: medium;
		border-left-style: solid;
		border-left-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style28 {
		border-right: 1px solid #000000;
		text-decoration: underline;
		text-align: center;
		background-color: #CBDAEA;
		border-left-style: solid;
		border-left-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style29 {
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		font-size: medium;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style30 {
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		font-size: medium;
		text-align: center;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom-style: solid;
		border-bottom-width: 1px;
	}
	.auto-style31 {
	font-family: "Felix Titling";
}
.auto-style32 {
	font-family: "Felix Titling";
	font-size: medium;
}
.auto-style34 {
	font-size: small;
	font-family: "Times New Roman", Times, serif;
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
             <a class="nav-link" href="AdminHomepage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="admin_view_trainee.php">Back</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>    <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
    Welcome:<?php
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










	$username= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbltrainer where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $username=$rows["username"];
	$fname= $rows["fname"];
	$lname= $rows["lname"];
	$email= $rows["email"];
    $phone= $rows["phone"];
	$gname= $rows["gname"];
	$wname= $rows["wname"];

	
	}


$usernam=$_GET['trainee_username'];
$deid=$_GET['deid'];


	
		include("connect.php");

	$query1="select * from   tblselecttraineer a, tbldetailstrainng b , tbltrainee c , tbltrainer d  where  a.trainee_username=c.trainee_uname  and  a.username=b.username  and a.username=d.username and c.trainee_uname='$usernam'    ";


      $result = mysqli_query($con,$query1);
      while($row = mysqli_fetch_assoc($result)) {
	
	$Typ_contr= $row["Typ_contr"];
    $Dur_contr= $row["Dur_contr"];
	$tra_days= $row["tra_days"];
	$tra_time= $row["tra_time"];
	$price= $row["price"];
    
 $trainee_fname=$row['trainee_fname'];
	  $trainee_lname=$row['trainee_lname'];
	  $trainee_email=$row['trainee_email'];
	  $trainee_phone=$row['trainee_phone'];
       $gnamee=$row['gnamee'];
	  $wnamee=$row['wnamee'];
 $username=$row["username"];
	$fname= $row["fname"];
	$lname= $row["lname"];
	$email= $row["email"];
    $phone= $row["phone"];
	$gname= $row["gname"];
	$wname= $row["wname"];




	
	
	}

?>




<br />
	   <br />


       <br />
<br /><br />


 

 <table align="center" bgcolor="FFFFFF" style="height: 425; width: 584;" class="auto-style12">
        <tr>
          <th colspan="4" scope="row" class="auto-style7"> 
          <h1 class="auto-style9">&nbsp;TRAINEE CONTRACT DETAILS</h1>
<br>
</th>

        </tr>
        <tr>
          <td scope="row" class="auto-style19" colspan="4">
             <strong>TRAINER INFORMATION</strong></td>
        </tr>
        <tr class="auto-style18" >
          <td bgcolor="FFFFFF" scope="row" style="width: 175px" class="auto-style20">
             <strong>&nbsp;UserName:</strong></td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style20">
            <strong>Name:</strong></td>
          <td style="width: 273px" class="auto-style21">
             <strong>Phone Number:</strong></td>
          <td bgcolor="FFFFFF" class="auto-style20">
            <strong>Email</strong></td>
        </tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style25" style="width: 175px">
             <?php echo $username;?> &nbsp;</td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style14">
            <?php echo $fname;?>  <?php echo $lname;?> &nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style14" style="width: 273px">
             <?php echo $phone;?>&nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style28">
            <?php echo $email;?>&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style17" style="width: 175px">
             <strong>G</strong><span><strong>overnorate</strong></td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style11">
            W</td>
          <td bgcolor="FFFFFF" class="auto-style11" style="width: 273px">
             &nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style27">
            &nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style25" style="width: 175px">
             <?php echo $gname;?>&nbsp;</td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style14">
            <?php echo $wname;?>&nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style14" style="width: 273px">
             &nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style28">
            &nbsp;</td>
        </tr>
        <tr>
             <span>
        <span class="text-white-50">
          <td scope="row" class="auto-style16" colspan="4">
             <strong>TRAINEE INFORMATION</strong></td>
        	</span></span>
		</tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style26" style="width: 175px">
             <strong><span class="auto-style6">Trainee Name:
          </span></strong> 
          </td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style11">
            <strong><span class="auto-style6">Trainee Email</span></strong></td>
          <td bgcolor="FFFFFF" class="auto-style11" style="width: 273px">
             <strong><span class="auto-style6">Trainee Phone Number</span></strong></td>
          <td bgcolor="FFFFFF" class="auto-style27">
            <strong><span class="auto-style6">Address</span></strong></td>
        </tr>
        <tr>
          <td scope="row" class="auto-style25" style="width: 175px"> 
			<?php echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$trainee_fname;?>  <?php echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$trainee_lname;?></td>
          <td scope="row" class="auto-style14">  <?php echo $trainee_email;?>             </td>
          <td style="width: 273px" class="auto-style14">   <?php echo $trainee_phone;?>         </td>
          <td class="auto-style28"><?php echo $gnamee;?> ,  <?php echo $wnamee;?>           </td>
        </tr>
        
        </tr>
          <tr>
             <span>
          <td bgcolor="FFFFFF" scope="row" class="auto-style10" style="width: 175px">
             <strong>Type Of Contract </strong> 
          </td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style11">
            <span class="auto-style6"><strong>Duration Of The Contract </strong></span><strong>
			<span class="auto-style6"></span></strong></td>
          <td bgcolor="FFFFFF" class="auto-style13" colspan="2">
             <strong class="auto-style8">&nbsp;</strong><strong>Training Days</strong></td>
        	  </span>
		  </tr>
		  <tr>
             <span>
          <td scope="row" class="auto-style25" style="width: 175px"><?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$Typ_contr;
		 ?></td>
          <td scope="row" class="auto-style14">                <?php 
			echo $Dur_contr; 
		?>
</td>
          <td class="auto-style28" colspan="2">   <?php 
			echo $tra_days; 
		?>
         </td>
        	  </span>
		  </tr>
		  <tr>
             <span>
          <td bgcolor="FFFFFF" scope="row" class="auto-style10" style="width: 175px">
             <strong>Training Times </strong> 
          </td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style11">
            <span class="auto-style6"><strong>Contract Price(OMR) </strong></span><strong>
			<span class="auto-style6"></span></strong></td>
          <td bgcolor="FFFFFF" class="auto-style13" colspan="2">
             <strong>Trainee Username</strong></td>
        	  </span>
		  </tr>
		  <tr>
             <span>
          <td scope="row" class="auto-style25" style="width: 175px"><?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$tra_time;
		 ?></td>
          <td scope="row" class="auto-style14">                <?php 
			echo $price; 
		?>
</td>
          <td class="auto-style28" colspan="2">   <?php 
			echo $usernam; 
		?>
         </td>
        	  </span>
		  </tr>

		  
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style5" colspan="4">&nbsp;</td>
        </tr>
        
        <tr class="text-left">
          <td colspan="4" bgcolor="#FFFFFF" scope="row" style="height: 127px" class="auto-style30">&nbsp;
         
 <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="auto-style32">
            <span class="auto-style31"><strong>Contact</strong></span><strong>&nbsp; 
			Us</strong></h6>
          <p class="auto-style34"><i class="fa fa-home me-3"></i> OMAN, masnaeuh, ST 2</p>
          <p class="auto-style34"><i class="fa fa-envelope me-3"></i>driving.masnaeuh@email.com
          </p>
          <p class="auto-style34"><i class="fa fa-phone me-3"></i> + 968 25987456</p>
          <p class="auto-style34"><i class="fa fa-print me-3"></i> + 6587412222</p>
        </div>
</td>


 </tr>
        
        <tr>
          <td colspan="4" bgcolor="#FFFFFF" scope="row" style="height: 27px" class="auto-style29">
             <span>
        <span class="text-black-50">
  <div class="auto-style15">
    © 2021 Copyright:
    </span>
        <span class="text-black-50">
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Driving License Trainer</a>
  </div>
           
</td>


 </tr>
        </table>



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



