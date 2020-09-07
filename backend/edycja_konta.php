<?php 
session_start();

$edit = 0;

if (isset($_POST['imie'])) {

	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$login = $_POST['login'];
	$user_id = $_POST['id'];

} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../edycja-danych.php?id='.$user_id);

	exit();
}

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

$login_test=$polaczenie->query("SELECT id FROM users WHERE login='$login' AND id <> '$user_id'");
$login_test_numb = mysqli_num_rows($login_test);

if ($login_test_numb < 1) {
	$email_test=$polaczenie->query("SELECT id FROM users WHERE email='$email' AND id <> '$user_id'");
	$email_test_numb = mysqli_num_rows($email_test);
	
	if ($email_test_numb < 1) {
		$edit = 1;
	} else {
		$_SESSION['error'] = 'Istnieje już konto o takim adresie e-mail.';
		header('Location: ../edycja-danych.php?id='.$user_id);
		$polaczenie->close();
		exit();

	}
} else {
	$_SESSION['error'] = 'Istnieje już konto o takim loginie.';
	header('Location: ../edycja-danych.php?id='.$user_id);
	$polaczenie->close();
	exit();

}
 
if ($edit == 1) {
	

	$rezultat2=$polaczenie->query("UPDATE users SET imie = '$imie' WHERE id='$user_id'");
	$rezultat2=$polaczenie->query("UPDATE users SET nazwisko = '$nazwisko' WHERE id='$user_id'");
	$rezultat2=$polaczenie->query("UPDATE users SET email = '$email' WHERE id='$user_id'");
	$rezultat2=$polaczenie->query("UPDATE users SET tel = '$tel' WHERE id='$user_id'");
	$rezultat2=$polaczenie->query("UPDATE users SET login = '$login' WHERE id='$user_id'");
	header('Location: ../twoj-profil.php?id='.$user_id);
	$polaczenie -> close();
	exit();
}


$polaczenie -> close();
exit();


 ?>