<?php
	include('config/db_incl.php');

	$id = $_GET['id'];
	$q = "SELECT * FROM post where id = '$id' ";
	$r = mysql_query($q);
	$row = mysql_fetch_array($r);				
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row['id']; ?></title>
</head>
<body>
	<div class="wrapper">
		<table>
			<tr>
				<td>Name: </td>
				<td><?php echo $row['name'];  ?></td>
			</tr>	
			<tr>
				<td>Contact: </td>
				<td><?php echo $row['contact'];  ?></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><?php echo $row['email'];  ?></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><?php echo $row['address'];  ?></td>
			</tr>
			<tr>
				<td>Title: </td>
				<td><?php echo $row['title'];  ?></td>
			</tr>
			<tr>
				<td>Content: </td>
				<td><?php echo $row['content'];  ?></td>
			</tr>
			<tr>
				<td>Images: </td>
				<td><?php
						$i_q = "SELECT * FROM image where post_id = '$id'";
						$i_r = mysql_query($i_q);
						$i_num = mysql_num_rows($i_r);
						for($i=1; $i<=$i_num; $i++)
						{
							echo "Image<br />";
						}
				  ?></td>
			</tr>
			<tr>
				<td>Hidden: </td>
				<td><?php if($row['hidden']=='yes')echo "Yes"; else echo "No";  ?></td>
			</tr>
		</table>
		<form action="post.php" method="POST">
			<input type="submit" name="approve" value="Approve" />
			<input type="submit" name="reject" value="Reject" />
		</form>
	</div> 
</body>
</html>