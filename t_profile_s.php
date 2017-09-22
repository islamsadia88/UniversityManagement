<html>
<head>
</head>

<body>
<a href="menu2_t.html">BACK</a>
  
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 include "t_search_s.php";
 
 
$que1 = "select * from student";

$run = mysqli_query($con,$que1);

?>

<table width="1100" border="5" align="center">

<tr>
			<th>Name</th>
			<th>ID</th>
			<th>CGPA</th>
			<th>DEPARTMENT</th>
			
			
</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['name']."</td>
	<td>".$row['ID']."</td>
	<td>".$row['cgpa']."</td>
	<td>".$row['dept_name']."</td>";

}

mysqli_close($con);
	
	
?>

</table>


</body>

</html>
