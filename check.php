<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>


<?php
 
  include('connect.php'); 
 
 
  if(isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $query = "SELECT count(*) as cnt FROM `tbltrainer` WHERE username = '".$user_name."'";
    $result = mysqli_query($con,$query); 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $query1 = "SELECT count(*) as a FROM `tbltrainee` WHERE 	trainee_uname = '".$user_name."'";
    $result1 = mysqli_query($con,$query1); 
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    
    $query2= "SELECT count(*) as b FROM `tbladmin` WHERE ausername = '".$user_name."'";
    $result2 = mysqli_query($con,$query2); 
    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

    
    
    if(($row['cnt']== 0) && ($row1['a']== 0) && ($row2['b']== 0) ){
     r1: echo '<span class="text-success">Username <b>'.$user_name.'</b> is available!</span>';
    } else {
     r2: echo '<span class="text-danger">Username <b>'.$user_name.'</b> is already taken!</span>';
     
    
  }

 
 }
 
 
 
?>










</body>

</html>
