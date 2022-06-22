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
                     <li class="nav-item">
            <a class="nav-link" href="AdminHomepage.php">Back</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout </a>
          </li>
        </ul>
      </div>
    </div>       <div class="icon" style="color: #FFFFFF"><i class="fa  fa-user" style="width:30px; height:50px"></i>
		   Welcome:<?php
	
	 $usernamea= $_SESSION['txtid1'];
	include ("connect.php");
	$qryname = "select * from  tbladmin where ausername='$usernamea' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['aname'];
	
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

	   <div class="text-center">

<br /><br />
<?php
		
		
		
		 if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 06;
    $start_from = ($page-1)*05;

   

		

    include('connect.php');
$q="select * from    tblfeeback    order by dates DESC LIMIT  $start_from,$num_per_page  ";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
$i=0;
if($num==0)
{
 echo "<h3>No FeedBack  </h3>";
}
else
{

echo"<table  class=table table-striped  border=1 width=700 align=center cellspacing=0>";

echo"<th class='border border-info'>  ID";

echo"<th class='border border-info'>  User Name";
echo"<th class='border border-info'> User Phone";
echo"<th class='border border-info'>  User Email";
echo"<th class='border border-info'>  Comment";
echo"<th class='border border-info'>  date of submission";







echo"<th colspan ='1' class='border border-info'> Action";

echo"<tr>";
while($row = mysqli_fetch_assoc($r)) {
$id=$row["id"];
$trainee_uname=$row["Name"];
$trainee_phone=$row["phone"];
$trainee_email=$row["email"];
$comm=$row["comm"];
$dates=$row["dates"];






echo"<tr class='border border-info'>";
echo"<td class='border border-info'>$id";
echo"<td class='border border-info'>$trainee_uname";
echo"<td class='border border-info'>$trainee_phone";
echo"<td class='border border-info'>$trainee_email";
echo"<td class='border border-info'>$comm";
echo"<td class='border border-info'>$dates";


echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='Deletefeedbak.php?id=$id'>DELETE</a>";




                  



echo"</tr>";

$i++;

}}


echo"</table><br>";


?>





 <?php 
 
        
                $pr_query = "select * from tblfeeback   ";
                $pr_result = mysqli_query($con,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='View_FeedBack.php?page=".($page-1)."' class='btn btn-secondary'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='View_FeedBack.php?page=".$i."' class='btn btn-info'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='View_FeedBack.php?page=".($page+1)."' class='btn btn-secondary'>Next</a>";
                }
        
        ?>











 <script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("record deleted")
}
return del;
}
</script>
              
<br />
	   <br />


       <br />
<br /><br />


 










  <br />
    <br />

  <br />

  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Footer -->
	   </div>
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



