<html>

<head>
	<link type="text/css" rel="stylesheet" href="search.css"/>
</head>

<body>


<center>
		<form action="t_search_s.php" method="post">
		  
			<input type="search" name="search" placeholder="Search Here">
			<input type="submit" name="search_btn" value=">>" >
		 
		</form>	
	 	</center>

<?php
 
  if(isset($_REQUEST['search'])){
	   	$server="localhost";
		$user="root";
		$pass = "";
		$db ="university_management";
		$con = mysqli_connect($server,$user,$pass,$db);
	   
		 $search=$_REQUEST['search'];
		  //echo $search;
		  //echo "search";
		  $que = "SELECT * FROM student WHERE ID='$search'" ;
		  //echo $que;
		  $run=mysqli_query($con,$que) ;

			if($run==null)
			{
				echo "no result found";
			}
			else
			{
				include "ss.php";
			}
  }	


?>

</table>
</body>

</html>