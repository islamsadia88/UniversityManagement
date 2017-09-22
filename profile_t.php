<html>
<head>
<link type="text/css" rel="stylesheet" href="profile_t_z1.css"/>
</head>

<body>
<a href="menu2.html">BACK</a>

<p id="he">TEACHERS PROFILE</P>
  
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 
 
$que1 = "select * from teacher";

$run = mysqli_query($con,$que1);

?>

<table id="aa" width="1100" border="5" align="center">

<tr>
			<th>Name</th>
			<th>ID</th>
			<th>SALARY</th>
			<th>DESIGNAMTION</th>
			<th>ROOM NUMBER</th>
			<th>JOB EXPERIENCE</th>
			<th>PERSONAL DATA</th>
			
			
		</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['name']."</td>
	<td>".$row['ID']."</td>
	<td>".$row['salary']."</td>
	<td>".$row['designation']."</td>
	<td>".$row['room_number']."</td>
	<td align='center'>
	<a href = 'job_ex.php?ex=".$row['ID']."'>job experience</a> </td>
	
	<td align='center'>
	<a href = 't_personal_data.php?pd=".$row['ID']."'>personal info</a> </td>
	</tr>";

}

mysqli_close($con);
	
	
?>

</table>


</body>

</html>
