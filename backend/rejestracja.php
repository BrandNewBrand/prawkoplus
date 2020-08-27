<?php 
session_start();


if (isset($_POST['imie'])) {

	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	$haslo2 = $_POST['haslo2'];

} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../rejestracja.php');

	exit();
}

if ($haslo != $haslo2) {
	$_SESSION['error'] = 'Wpisz dwukrotnie takie samo hasło';

	$_SESSION['dane_log'] = 1;
	$_SESSION['imie'] = $imie;
	$_SESSION['nazwisko'] = $nazwisko;
	$_SESSION['email'] = $email;
	$_SESSION['tel'] = $tel;
	$_SESSION['login'] = $login;
	$_SESSION['haslo'] = $haslo;
	$_SESSION['haslo2'] = $haslo2;

	header('Location: ../rejestracja.php');
	exit();
} 

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

$login_test=$polaczenie->query("SELECT id FROM users WHERE login='$login'");
$login_test_numb = mysqli_num_rows($login_test);

if ($login_test_numb > 0) {
	$_SESSION['error'] = 'Istnieje już użytkownik o podanym loginie';
	header('Location: ../rejestracja.php');
	$polaczenie -> close();
	exit();
}



$email_test=$polaczenie->query("SELECT id FROM users WHERE email='$email'");
$email_test_numb = mysqli_num_rows($email_test);

if ($email_test_numb > 0) {
	$_SESSION['error'] = 'Istnieje już użytkownik o podanym adresie e-mail';
	header('Location: ../rejestracja.php');
	$polaczenie -> close();
	exit();
}

if ($polaczenie->query("INSERT INTO users VALUES (NULL, '$imie', '$nazwisko', '$email', '$tel', '$login', '$haslo', '0')")) {
	$rez=$polaczenie->query("SELECT id FROM users ORDER BY id DESC LIMIT 1");
	$row = $rez->fetch_assoc();
	$user_id = $row['id'];

	header("Location: potwierdzenie_email.php?id=$user_id");

} else {
	$_SESSION['error'] = 'Błąd serwera. Prosimy o próbę rejestracji w późniejszym terminie.';
	header('Location: ../rejestracja.php');
	$polaczenie -> close();
	exit();
}


$polaczenie -> close();
exit();



 ?>