<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		body{
			background: #d6cece;
		}
	</style>
</head>
<body>
	<div class="card mx-auto text-center col-3 mt-5 pb-3">
	<form action="auto-check.php" method="POST" class="">
		<input type="text" name="email" placeholder="email" class="w-100 form-control mb-2 mt-3">
		<input type="text" name="password" placeholder="password" class="w-100 form-control mb-2">
		<div><button type="submit" class="btn bg-primary text-white w-100 mb-1">Войти</button></div>
	</form>
	<?php echo $_GET['wrong'] ?>
	</div>
	<div class="card col-3 mx-auto border mt-2 text-center">
		<div class="row mx-auto">
		<p class="">Нет аккаунта?</p>
		<a href="index.php" class="text-primary">
		Зарегистрируйтесь
		</a>
		</div>
	</div>
</body>
</html>