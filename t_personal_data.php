<html>
<head>
	<link type="text/css" rel="stylesheet" href="t_personal_data_t.css"/>
</head>
<a href="profile_t.php">BACK</a>
<body>
<p id="he">PROFILE</P>
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 if(isset($_REQUEST['pd']))
	 
	 {
		 $id = $_REQUEST['pd'];
		 $que1 = "select * from t_profile where t_id='$id'";

		$run = mysqli_query($con,$que1);
		$row=mysqli_fetch_assoc($run);
	 }
 

?>

<table  id="aa" width="800" height="400"  border="3"  >

<tr>
	<th> NAME: </th>  
	<?php echo "<td>".$row['name']."</td>"; ?> 
</tr>

<tr>
	<th>TEACHER_ID:</th>
	<?php echo "<td>".$row['t_id']."</td>"; ?> 
</tr>


<tr>
	<th>RESULT:</th>
</tr>

<tr>
		<th>SSC</th>
		<th>HSC</th>
		<th>BSC</th>
		<th>MSC</th>
</tr>
		<?php echo 
"<tr>
	<td ><center>".$row['b_ssc']."</center></td>
	<td><center>".$row['b_hsc']."</center></td>
	<td><center>".$row['b_bsc']."</center></td>
	<td><center>".$row['b_msc']."</center></td>
</tr>";  ?>

	

	




<tr><th>ADDRESS:</th><?php echo "<td>".$row['address']."</td>" 	; mysqli_close($con);?> </tr>	



</table>


</body>

</html>
