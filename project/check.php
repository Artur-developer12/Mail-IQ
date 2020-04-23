<?php 
	require 'add_db.php';

	$name       = $_POST['name'];
	$email      = $_POST['email'];
	$AskClothes = $_POST['AskClothes'];
	$AskAge     = $_POST['AskAge'];
	$AskTrends  = $_POST['AskTrends'];
	$error      = false;


	if ($AskAge != 'Чистый классический стиль') {
		$error = true;
	}
	if ($AskClothes != 'Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям') {
		$error = true;
	}
	if ($AskTrends != 'Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными') {
		$error = true;
	}


	if ($error == true) {
		echo 0;
		$result = 'ошибка';
	}
	else{
		echo 1;
		$result = 'успешно';
	}



	$sql =" INSERT INTO users(name, email) VALUES(:name, :email);";
	$query = $pdo->prepare($sql);
	$query->execute(['name'=>$name, 'email'=>$email]);
	$last_id_users = $pdo->lastInsertId();

	$sql =" INSERT INTO polls(id_users, result, answer1, answer2, answer3) VALUES(:id_users, :result, :answer1, :answer2, :answer3);";
	$query = $pdo->prepare($sql);
	$query->execute(['id_users'=>$last_id_users, 'result'=>$result, 'answer1'=>$AskAge, 'answer2'=>$AskClothes, 'answer3'=>$AskTrends]);




 ?>