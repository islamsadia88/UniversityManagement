<html>
<head>
</head>

<body>


<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
 
 
  if(isset($_POST['submit'])){
	   
	   
	    if($_POST['s_name']==NULL || $_POST['_id']==NULL || $_POST['_dept']==NULL || $_POST['_add']==NULL || $_POST['_ssc']==NULL|| $_POST['_hsc']==NULL){
			echo"FILL THE FULL FORM";
		}
		else{
	     $name_ = $_POST['s_name'];
	     $ID_ = $_POST['_id'];
	     $dept_ = $_POST['_dept'];
		 $ssc_ = $_POST['_ssc'] ;
	     $hsc_ = $_POST['_hsc'] ;
	     $add_ = $_POST['_add'] ;
		// echo $_add;
		 $que = "insert into student (name,ID,dept_name) values ('".$name_."','".$ID_."','".$dept_."') ";
		 mysqli_query($con,$que) ; 
		 $que2 = "insert into s_profile (name,ID,result_ssc,result_hsc,address,picture) values ('".$name_."','".$ID_."','".$ssc_."','".$hsc_."','".$add_."','sadia')";
		 mysqli_query($con,$que2) ; 
		}
		    
  }
   mysqli_close($con);
?>
  
<?php

$server="localhost";
$user="root";
$pass = "";
$db ="university_management";
$con = mysqli_connect($server,$user,$pass,$db);
include 'student_.php';
 
 
 
$que1 = "select * from student";

$run = mysqli_query($con,$que1);

?>

<table width="800" border="5" align="center">

<tr>
			<th>ID</th>
			<th>Student Name</th>
			<th>DEPARTMENT</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>

 <?php
while($row=mysqli_fetch_assoc($run)){

echo "<tr>
	<td>".$row['ID']."</td>
	<td>".$row['name']."</td>
	<td>".$row['dept_name']."</td>
	<td align='center'>
	<a href = 'delete.php?del=".$row['ID']."'>delete</a>

</td>

	<td>Edit</td>
	</tr>";

}

mysqli_close($con);
	
	
?>


</table>


</body>

</html>
