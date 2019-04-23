<?php 
	$link = new mysqli('localhost', 'root', '', 'my_blog');
	$link -> set_charset("utf8");

	if (mysqli_connect_errno()) {
		echo 'Ошибка к подключению базы данных('.mysql_connect_errno().'): '.mysqli_connect_error();
		exit();
	}
?>