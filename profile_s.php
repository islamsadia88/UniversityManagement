<html>
<head>
	<link type="text/css" rel="stylesheet" href="profile_s.css"/>
</head>
<a href="menu2.html">BACK</a>
<body>
<p id="he">STUDENTS PROFILE</P>
  
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 
 
$que1 = "select * from student";

$run = mysqli_query($con,$que1);

?>

<table id="aa" width="1100" border="5" align="center">

<tr>
			<th>Name</th>
			<th>ID</th>
			<th>CGPA</th>
			<th>DEPARTMENT</th>
			<th>ADDRESS</th>
			<th>ACCOUNTS</th>
			
			
</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['name']."</td>
	<td>".$row['ID']."</td>
	<td>".$row['cgpa']."</td>
	<td>".$row['dept_name']."</td>
	<td>".$row['address']."</td>
	<td align='center'>
	<a href = 'account.php?acc=".$row['ID']."'>account</a> </td>";

}

mysqli_close($con);
	
	
?>

</table>


</body>

</html>
