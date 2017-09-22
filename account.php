<html>
<head>
	<link type="text/css" rel="stylesheet" href="account_z1.css"/>
</head>
<a href="profile_s.php">BACK</a>
<body>
<p id="he">STUDENT ACCOUNT</P>





<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 
if(isset($_REQUEST['acc']))
{
	$id = $_REQUEST['acc'];
 
$que1 = "select * from student where ID='$id'";

$run = mysqli_query($con,$que1);
}

?>

<table id="aa" width="1000" border="5" align="center" >

<tr id="aa">
			<th id="aa">PAYABLE</th>
			<th id="aa" >PAID</th>
			<th id="aa">DUE</th>
		</tr>

 <?php
$row=mysqli_fetch_assoc($run);

echo "<tr >
	<td >".$row['acc_tot_payaable']."</td>
	<td >".$row['acc_paid']."</td>
	<td >".$row['acc_due']."</td>
	</tr>";


mysqli_close($con);
	
	
?>

</table>


</body>

</html>
