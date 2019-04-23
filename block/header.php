<?php 
	require_once 'include/database.php';
	require_once 'include/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySite</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
		<div id="logo">
			<a href="/site-1/">Новости</a>
		</div>

		<div id="MenuHead">
			<a href="#">
				<div>Музыка</div>
			</a>
			<a href="#">
				<div>Кино и фильмы</div>
			</a>
			<a href="#">
				<div>IT news</div>
			</a>
		</div>

		<div id="RegAuth">
			<a href="login.php" style="margin-right: 10px;">
				Регистрация 
			</a>

			<a href="sign-in.php" style="margin-right: 10px;">
				 Авторизация
			</a>
		</div>

</header>