<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db("login", $con);

	if(isset($_POST['login'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "select * from user where userName = '$username' and userPass = '$password'";
		
		$query = mysql_query($sql, $con);
		
		$countUser = mysql_num_rows($query);
		
		if($countUser == 1){
			$array = mysql_fetch_array($query);
			$_SESSION['userID'] = $array['userID'];
			$_SESSION['userFullName'] = $array['userFullName'];
			$_SESSION['userName'] = $array['userName'];
			$_SESSION['userPass'] = $array['userPass'];
		}else{
			echo "Sorry! wrang username/password<br>";	
		}
	}
	
if(isset($_SESSION['userID'])){
?>
    <a href="logout.php">Log out</a>
    <br />

<?php
	echo "Welcome to ". $_SESSION['userFullName']." you have successfully logged in.....";

}else{
?>
<a href="_index.php">Log in</a>
<br /><br />
<form action="_index.php" method="post">
User Name: <input type="text" name="username" />
Password: <input type="password" name="password" />
<input type="submit" value="Login" name="login" />
</form>
<?php	
}
?>
</body>
</html>