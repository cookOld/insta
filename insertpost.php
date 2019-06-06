<?php
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'misha_ch_15');
	$query = mysqli_query($conn, "INSERT INTO post (userid, img, text) VALUES('" . $_POST['userid'] . "', 'images/" . $_FILES['img']['name'] . "', '" . $_POST['text'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
	header("Location: http://instagramdlyalohov/login.php?id=" . $_POST['userid'] . "");
?>