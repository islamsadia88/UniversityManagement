<html>
<head>
</head>
<body>

<table width="800" border="5" align="center">

<tr>
			<th>ID</th>
			<th>Student Name</th>
			<th>Result</th>
</tr>


<?php
	if(isset($run)){
	$row=mysqli_fetch_assoc($run);
	
	 echo "<tr>
		 <td>".$row['ID']."</td>
		 <td>".$row['name']."</td>
		 <td>".$row['cgpa']."</td>
		 </tr>";

	}
	
 ?>
</table>
</body>

</html>