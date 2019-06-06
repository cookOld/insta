<?php
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'misha_ch_15');
	$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
	$res = $query->fetch_assoc();
	if($query->num_rows == 1){
		header("Location: http://instagramdlyalohov/login.php?id=" . $res['id'] . "");
	} else{
		header("Location: http://instagramdlyalohov/auto.php?wrong=Ошибка");
	}
?>