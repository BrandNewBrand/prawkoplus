<?php 
session_start();



if (isset($_POST['login'])) {
	if (isset($_POST['haslo'])) {
		
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];

		require_once "connect.php";
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
		$polaczenie->query('SET NAMES utf8');
		$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

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
				$_SESSION['zalogowany'] = $user_id;
				if (isset($_SESSION['expres_location'])) {
					header('Location: ../'.$_SESSION['expres_location']);
					$polaczenie -> close();
					exit();
				}
				header('Location: ../twoj-profil.php?id='.$user_id);
				$polaczenie -> close();
				exit();
			} else {
				header('Location: potwierdzenie_email.php?id='.$user_id);
			}

		} else {
			$_SESSION['error'] = 'Nie ma konta o podanym loginie lub haśle';
			header('Location: ../logowanie.php');
			$polaczenie -> close();
			exit();
		}

	} else {
		header('Location: ../logowanie.php');
	}
} else {
	header('Location: ../logowanie.php');
}



 ?>