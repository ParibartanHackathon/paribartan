<?php
	session_start();
	include_once('config/db_incl.php');
	if(isset($_SESSION['login']) && ($_SESSION['login'] == 'yes')) header("Location: cms_development.php?");
?>

<?php

$username = $_POST['Username'];
$password = $_POST['Password'];	

$q = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysql_query($q);
$num = mysql_num_rows($result);
	
if($num==0)
	{
		header("Location: cms_login.php?error=yes");
	}

else
	{
		$row = mysql_fetch_array($result);
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		$_SESSION['login'] = 'yes';
		
		header("Location: cms_development.php?login=yes");
	}
?>