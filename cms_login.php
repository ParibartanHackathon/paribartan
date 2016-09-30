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
        <form method="post" action="login_action.php">
			<input type="text" class="user" name="Username" placeholder="Enter Username" /><br />
			<input type="password" class="pass" name="Password" placeholder="Enter Password" /><br />
			<input type="submit" class="log" name="log_in" value="Log In" />
		</form>
        <br />
		<?php
			if(isset($_GET['error']) && $_GET['error'] == 'yes')
			{
				?>
				<div style="color:#020202; text-align:left; margin-left:10px;">Username/Password Incorrect</div>
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