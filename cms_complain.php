<?php
	//if(!isset($_SESSION['login'])||($_SESSION['login']!='yes')) exit;

	include("config/db_incl.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Complain - Pariwartan CMS</title>
	<link rel="stylesheet" type="text/css" href="cms/cms_css.css">
</head>
<body>
	<div class="header2">
		<img src="images/logo2.png" alt="Pariwartan - CMS">
	</div>
	<div class="wrapper">
		<div class="sidebar">
			<a href="cms_development.php">
				<div class="development-sidebar">
					Development
				</div>
			</a>
			<a href="cms_complain.php">
				<div class="complain-sidebar">
					Complain
				</div>
			</a>
			<a href="log_out.php">
				<div class="logout-sidebar">
					Logout
				</div>
			</a>
		</div>
		<div class="content">
			<?php
				$q = "SELECT * FROM post where category = 'complain' ORDER BY id DESC ";
				$r =mysql_query($q);
				$num = mysql_num_rows($r);
				if($num == 0){
					echo "No post available.";
					exit;
				}
				else{
					for($i = 1; $i<=$num; $i++)
					{
						$row = mysql_fetch_array($r);
						$id = $row['id'];
			?>
				<table>
					<tr>
						<td>Title:</td>
						<td><a href="post.php?id=<?php echo $id;?>"><?php echo $row['title']; ?></a></td>
					</tr>
					<tr>
						<td>Date:</td>
						<td><?php echo $row['date']; ?></td>
					</tr>
					<br>
				</table>
			<?php
					}
				}

			?>
		</div>
	</div> 
</body>
</html>