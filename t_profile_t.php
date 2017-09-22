<html>
<head>
	<link type="text/css" rel="stylesheet" href="t_profile_t.css"/>
</head>
<a href="menu2_t.html">BACK</a>
<body>
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
			<th>DESIGNAMTION</th>
			<th>ROOM NUMBER</th>
			
			
		</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['name']."</td>
	<td>".$row['ID']."</td>
	<td>".$row['designation']."</td>
	<td>".$row['room_number']."</td>";

}

mysqli_close($con);
	
	
?>

</table>


</body>

</html>
