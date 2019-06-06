<?php 
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'misha_ch_15');
	$query2 = mysqli_query($conn, "SELECT * FROM users");
	$loh;
	for ($i=0; $i < $query2->num_rows; $i++) { 
		$res = $query2->fetch_assoc();
		if($_POST['email'] == $res['email']){
			$loh = true;
		}
	};
	if($loh == false){
	$query = mysqli_query($conn, "INSERT INTO users (email, name, nick, password, avatar) VALUES('" . $_POST['email'] . "', '" . $_POST['name'] . "', '" . $_POST['nick'] . "', '" . $_POST['password'] . "', 'images/noprime.jpg')");
	mail($_POST['email'], 'Регистрация на сайте instagram.com', 'Вы успешно зарегистрировались. Ваш логин: ' . $_POST['nick'] . ' пароль: ' . $_POST['password']);
	header("Location: http://instagramdlyalohov/auto.php");
	} else{
		header("Location: http://instagramdlyalohov/index.php?wrong=System_Error");
	}
?>;