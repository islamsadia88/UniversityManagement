<html>
<head>
<link type="text/css" rel="stylesheet" href="courses.css"/>
</head>
<a href="menu2_t.html">BACK</a>
<body>
<p id="he">COURSES</P>
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 
 
$que1 = "select * from courses natural join t_courses";

$run = mysqli_query($con,$que1);

?>

<table id="aa"width="1000" border="5" align="center">

<tr>
			<th>COURSE ID</th>
			<th>TITLE</th>
			<th>CREDIT</th>
			<th>TEACHER_ID</th>
		</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['course_id']."</td>
	<td>".$row['title']."</td>
	<td>".$row['credit']."</td>
	<td>".$row['t_id']."</td>
	</tr>";

}

mysqli_close($con);
	
	
?>

</table>


</body>

</html>
