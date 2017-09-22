<?php
session_start();
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="login.css"/>
<title>Login</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost", "root", "","login");

	if(isset($_POST['login'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "select * from user where userName = '$username' and userPass = '$password'";
		
		$query = mysqli_query($con,$sql);
		
		$countUser = mysqli_num_rows($query);
		
		if($countUser == 1){
			$array = mysqli_fetch_array($query);
			$_SESSION['userID'] = $array['userID'];
			$_SESSION['userFullName'] = $array['userFullName'];
			$_SESSION['userName'] = $array['userName'];
			$_SESSION['userPass'] = $array['userPass'];
		}else{
			echo "Sorry! wrong username/password<br>";	
		}
	}
	
if(isset($_SESSION['userID'])){
?>
    <a href="logout.php">Log out</a>
    <br />

<?php
	//echo "Welcome to ". $_SESSION['userFullName']." you have successfully logged in.....";
	include "menu2.html";

}
else{
?>
<a href="_index.php">Log in</a>
<div id=box3>
<div id=box2>
 
<div id="box">
 
<img id="im" src="9.png" height="100" width="120">
<br /><br />
<form action="_index.php" method="post"><p id="a">
User Name: <br><input   type="text" name="username" /><br>
Password:<br> <input type="password" name="password" />
<input type="submit" value="Login" name="login" /></p>
</form></div>
</div>
</div>
<?php	
}
?>
</body>
</html>