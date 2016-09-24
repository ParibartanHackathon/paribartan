<?php
	//if(!isset($_SESSION['login'])||($_SESSION['login']!='yes')) exit;
	include('config/db_incl.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Development - Pariwartan CMS</title>

	<link rel="stylesheet" type="text/css" href="cms/cms_css.css">
</head>
<body class="cms_main">
	<div class="header">
		<img src="images/logo2.png" alt="Pariwartan - CMS">
	</div>
		
	</header><!-- /header -->"
	<div class="wrapper">
		<div class="sidebar">
			<a href="development.php">
				<div class="development-sidebar">
					Development
				</div>
			</a>
			<a href="complain.php">
				<div class="complain-sidebar">
					Complain
				</div>
			</a>
		</div>
		<div class="content">
			<?php
				$q = "SELECT * FROM post WHERE category = 'development' ORDER BY id DESC ";
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
						<td><a href="post.php"><?php echo $row['date']; ?></a></td>
					</tr>
				</table>
			<?php
					}
				}

			?>
		</div>
	</div> 
</body>
</html>