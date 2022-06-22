<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlnwilayats="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
require_once "connect.php";
$country_id= $_POST["country_id"];
$result = mysqli_query($con,"SELECT * FROM wilayat where gname = '$country_id'");
?>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["wid"];?>"><?php echo $row["wname"];?></option>
<?php
}
?>
</body>

</html>
