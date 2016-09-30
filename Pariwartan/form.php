<?php
	include("config/db_incl.php");
	/*include('image_functions.php');
	
	if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_POST['image']))
	{
		if(!empty($_POST['name']) && !empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category']) && !empty($_POST['image']))
		{
			$name = $_POST['name'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$title = $_POST['title'];
			$content = $_POST['content'];
			$category = $_POST['category'];
			$image = $_POST['image'];
			$date = date("Y-m-d H:i:s");

			echo $name;

			if(isset($_POST['checkbox'])) $hidden = 'yes';
			else $hidden = 'no';
			if(strlen($content)> 1000){ echo "The length of content has exceeded 1000."; exit;}
			if(count($image) > 5) { echo "The number of images has exceeded 5."; exit;} 
			
			$q = "INSERT INTO `post`(`id`, `name`, `contact`, `email`, `address`, `title`, `content`, `category`, `hidden`, `date`) VALUES (NULL,'$name','$contact','$email','$address','$title','$content','$category','$hidden','$date')";
			if(mysql_query($q))
			{
				echo "Post succeful.";
				header("Location: index.php");
				exit;
			}
			else
			{
				echo "Sorry your post couldnot be submitted! Try again."; 
			}
		}
		else
		{
			echo "Please fill out all the blanks!";
		}
	}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form | Pariwartan</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src = "Bootstrap/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#eeffff">

<div class="container">
		<h1></h1>
		<div class="row">
		<h2>Uploader's info</h2>
			<div class="col-xs-12">
				<div class="form-group">
					<form method="post" action="form_action.php" enctype="multipart/form-data">
						<label>Name:</label><input type="text" name="name" id="name" class="form-control">
						<label>Contact:</label><input type="text" name="contact" id="contact" class="form-control">
						<label>Email:</label><input type="email" name="email" id="email" class="form-control">
						<label>Address:</label><input type="text" name="address" id="address" class="form-control">
				</div>
				<div class="form-group">
					<h2>Task's info</h2>
					<label>Title:</label><input type="text" name="title" id="title" class="form-control">
					<label>Content(<i>max <u>1000</u> characters</i>):</label><br><textarea rows="10" cols="100" name="content" class="form-control"></textarea><br>
					<label>Category:</label><select id="category" name="category" class="form-control">
												<option>Development</option>
												<option>Complaint</option>
											</select>
					<div class="image">
					<label>Images: (max 5 allowed)</label><input type="file" name="file" id="file"> <br>
					</div>
					
					<input type="checkbox" name="checkbox" id="checkbox">Keep me Anonymous.<br><br>
					<i>(This post will only appear if its true and approved by the admin.)</i><br><br>
					<input type="submit" name="submit" id="submit" class="btn btn-success">
					</form>
				</div>
		</div>
</div>
</body>
</html>