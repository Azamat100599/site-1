<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		require 'include/database.php';

		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = "INSERT INTO login(username, email, password) VALUES('$username', '$email', '$password')";
			$result = mysqli_query($link, $query);

			if ($result) {
				$smsg = "Регистрация прошла успешно";
			} else {
				$false_message = "Ошибка";
			}
		}
	?>


	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Регистрация</h2>

			<?php if(isset($smsg)){?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
			<?php if(isset($fsmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $false_message; ?></div><?php }?>


			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="email" name="email" class="form-control" placeholder="Email" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
			<a href="sign-in.php" class="btn btn-lg btn-primary btn-block">Войти</a>
		</form>
	</div>
</body>
</html>
