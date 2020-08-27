<?php 
session_start();


if (isset($_POST['login'])) {
	if (isset($_POST['haslo'])) {
		
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];

		echo $login;
		echo $haslo;

		require_once "connect.php";
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

		$user_test=$polaczenie->query("SELECT id FROM users WHERE login='$login' AND haslo='$haslo'");
		$user_test_numb = mysqli_num_rows($user_test);
		$user_id_tbl=$user_test->fetch_assoc();
		$user_id=$user_id_tbl['id'];

		if ($user_test_numb > 0) {
			$_SESSION['zalogowany'] = 0;
			$weryfikacja_test=$polaczenie->query("SELECT weryfikacja FROM users WHERE id='$user_id'");
			$weryfikacja_tbl = $weryfikacja_test->fetch_assoc();
			$weryfikacja = $weryfikacja_tbl['weryfikacja'];
			if ($weryfikacja>0) {
				$_SESSION['zalogowany'] = 1;
				header('Location: ../moje-konto.php?id=$user_id');
				$polaczenie -> close();
				exit();
			} else {
				header("Location: potwierdzenie_email.php?id=$user_id");
			}

		} else {
			$_SESSION['error'] = 'Nie ma konta o podanym loginie lub haśle';
			// header('Location: ../logowanie.php');
			$polaczenie -> close();
			exit();
		}

	}
} 



 ?>