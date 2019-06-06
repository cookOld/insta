<?php
	$id = $_GET['id'];
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'misha_ch_15');
	$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
	$res = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="display: flex;"><img src="<?php echo $res['avatar']?>" style="border-radius: 100px; width: 64px; height: 64px;">
	<h2><?php echo $res['email']?></h2>
	<p><?php echo $res['name'];?></p></div>
	<div>
		<strong>Опубликовать новый пост:</strong>
		<div>
			<form method="POST" action="insertpost.php" enctype="multipart/form-data">
				<input type="file" name="img">
				<input type="text" name="text">
				<input type="hidden" name="userid" value="<?php echo $res['id'];?>">
				<button type="submit">Добавить</button>
			</form>
		</div>
	</div>

	<?php
		$query2 = mysqli_query($conn, "SELECT * FROM post INNER JOIN users ON post.userid = users.id ORDER BY id312 DESC");
	?>
	<?php for ($i=0; $i < $query2->num_rows; $i++) { 
		$res2 = $query2->fetch_assoc();
	?>
	<div style="width: 300px; border: 1px solid black; margin-top: 50px;" class="mx-auto">
		<div style="display: flex;">
			<img src="<?php echo $res2['avatar']?>" style="border-radius: 100px; width: 64px; height: 64px;">
			<strong><?php echo $res2['nick'];?></strong>
		</div>
		<?php
			if($res2['img'] == 'images/'){
					
			} else{
				echo '<img src="' . $res2['img'] . '" style="width:100%;">';
			};
		?>
		<div style="display: flex;">
			<strong style="margin-top: 16px;"><?php echo $res2['nick'];?></strong>
			<p><?php echo $res2['text'];?></p>
		</div>
	</div>
	<?php }?>
	</body>
</html>