<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Авторизация</h2>
			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
			<a href="login.php" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</a>
		</form>
	</div>

	<?php
		session_start();
		require 'include/database.php';

		if (isset($_POST['username']) and isset($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "SELECT * FROM login WHERE username='$username' and password='$password'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			$count = mysqli_num_rows($result);

			if ($count ==1 ) {
				$_SESSION['username'] = $username;
			} else {
				$false_message = "Ошибка";
			}

		if ($count) {
			echo "<a href='logout.php' class='btn btn-lg btn-primary' style='width: 1113px; margin-left: 212px; margin-top: 10px;'>
				Перейти на главную
			</a>";
		} else {
			echo "<a href='#' class='btn btn-lg btn-danger' style='width: 1113px; margin-left: 212px; margin-top: 10px;'>
			Ошибка при авторизации
			</a>";
			}
		}

	?>
</body>
</html>
