<html>
<head>
		<link type="text/css" rel="stylesheet" href="job_ex_t.css"/>
</head>

<body>
<a href="profile_t.php">BACK</a>
<p id="he">JOB EXPERIENCE</P>
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
   if(isset($_REQUEST['ex']))
{
	$id = $_REQUEST['ex'];
 
$que1 = "select * from t_job_experience where t_id='$id'";

$run = mysqli_query($con,$que1);
}

?>

<table id="aa" width="1000" height="200" border="5" align="center">

			<tr><th>JOB EXPERIENCE</th>
		</tr>

 <?php
 if($run!=null)
 {
	 $row=mysqli_fetch_assoc($run);
	 echo "<p id='tid'>TEARCHE ID:".$row['t_id']."</p>";
	 
	 // $row=mysqli_fetch_assoc($run);
	// echo "<tr>
	//<td>".$row['t_id']."</td></tr>"; 
while($row!=null){

echo "<tr>
	<td>".$row['job_experience']."</td>
	</tr>";
	$row=mysqli_fetch_assoc($run);

		}
 }
mysqli_close($con);
	
	
?>

</table>


</body>

</html>
