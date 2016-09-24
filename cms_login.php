<?php
	session_start();
	include_once('config/db_incl.php');
	if(isset($_SESSION['login']) && ($_SESSION['login'] == 'yes')) header("Location: development.php?");
?>

<?php

$username = $_POST['Username'];
$password = $_POST['Password'];	
var_dump($_SESSION);

$q = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysql_query($q);
$num = mysql_num_rows($result);
/*
if(isset($_SESSION['login_attempts']) && $_SESSION['login_attempts']>4)
{
	if(!isset($_SESSION['block']))
	{
		$_SESSION['block'] = strtotime(date("Y-m-d H:i:s")) + 300;
	}
	
	if(strtotime(date("Y-m-d H:i:s")) > $_SESSION['block'])
	{
		unset($_SESSION['login_attempts']);
		unset($_SESSION['block']);
	}
	else
	{
		header("Location: cms_login.php?error=block");
		exit;
	}
}
*/
$row = mysql_fetch_array($result);
	
if($row['username']==$username && $row['password']==$password)
{
	if($num==0)
	{
		die('No DB.');
	}

	else
	{
		//unset($_SESSION['login_attempts']);
		//unset($_SESSION['block']);
		$_SESSION['login'] = 'yes';
		$_SESSION['username'] = $username;
		
		header("Location: development.php?login=yes");
	}
}

else 
{
	/*if(!isset($_SESSION['login_attempts']))
		$_SESSION['login_attempts']=1;
	else
		$_SESSION['login_attempts']++;*/
		
	header("Location: cms_login.php?error=yes");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel - Login</title>

	<link rel="stylesheet" type="text/css" href="cms/cms_css.css" />
	
</head>

<body>
<div class="header">
	<div class="login">
		<img src="images/logo2.png"/>
        <form method="post" action="cms_login.php">
			<input type="text" class="user" name="Username" placeholder="Enter Username" /><br />
			<input type="password" class="pass" name="Password" placeholder="Enter Password" /><br />
			<input type="submit" class="log" name="log_in" value="Log In" />
		</form>
        <br />
		<?php
			if(isset($_GET['error']) && $_GET['error'] == 'yes')
			{
				?>
				<div style="color:#FFF; text-align:left; margin-left:10px;">Username/Password Incorrect</div>
				<?php
			}
		?>
            
		<?php
			/*if(isset($_GET['error']) && $_GET['error'] == 'block')
			{
				$remaining = $_SESSION['block'] - strtotime(date("Y-m-d H:i:s"));
				if($remaining>0)
				{
					?>
					<div style="color:#FFF; text-align:left; margin-left:5px;">You're blocked. Please try again <?php echo $remaining; ?> seconds.</div>
					<?php
				}
			}*/
		?>
            
	</div>
</div>	
</body>

</html>