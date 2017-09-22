<html>

<head>
	<link type="text/css" rel="stylesheet" href="delete.css"/>
</head>

<body>
</body>
</html>
<?php
$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
//require_once "insert.php";
 
  if(isset($_REQUEST['del']))
{
	$id = $_REQUEST['del'];
	
	$que = "DELETE FROM student WHERE ID='$id'";
	$res = mysqli_query($con,$que);
	echo"<p id='d'>DATA DELETED SUCCESSFULLY..! <a href='insert.php'>BACK</p></a>";
	
}

else
{
	echo "nottt";
	//echo $_POST['del'];
}

 mysqli_close($con); 
?>	
