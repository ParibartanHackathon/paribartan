<?php

	include("config/db_incl.php");
	//include('image_functions.php');
	
	if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_FILES['file']))
	{
		if(!empty($_POST['name']) && !empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category']) && !empty($_FILES['file']))
		{
			$name = $_POST['name'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$title = $_POST['title'];
			$content = $_POST['content'];
			$category = $_POST['category'];
			$image = $_FILES['file']['tmp_name'];
			$date = date("Y-m-d H:i:s");

			if(isset($_POST['checkbox'])) $hidden = 'yes';
			else $hidden = 'no';
			if(strlen($content)> 1000){ echo "The length of content has exceeded 1000."; exit;}

			//if(count($image) > 5) { echo "The number of images has exceeded 5."; exit;} 
			
			$q = "INSERT INTO `post`(`id`, `name`, `contact`, `email`, `address`, `title`, `content`, `category`, `hidden`, `date`) VALUES (NULL,'$name','$contact','$email','$address','$title','$content','$category','$hidden','$date')";
			if(mysql_query($q))
			{
				$id = mysql_insert_id();
				$image_name = rand(100,10000).$id.'.jpg';
				if(move_uploaded_file($image, 'photos/'.$image_name))
				{				
					$p = "INSERT INTO `image`(`id`, `post_id`, `photo`) VALUES (NULL,'$id','$image_name')";
					mysql_query($p);
					header("Location: index.php");
				}
				
				echo "Post succeful.";
				header("Location: index.php");
				
			}
			else
			{
				echo "Sorry your post couldnot be submitted! Try again.";
				header("Location: form.php");
			}
		}
		else
		{
			echo "Please fill out all the blanks!";
			header("Location: form.php");
		}
	}
?>