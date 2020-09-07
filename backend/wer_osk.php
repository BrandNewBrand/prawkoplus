<?php 
session_start();

$back = 'form-weryfikacyjny-OSK.php';

$user_id = $_SESSION['zalogowany'];

if (isset($_POST['id_osk'])) {

	$id_osk = $_POST['id_osk'];



} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../'.$back);

	exit();
}

if (strlen($id_osk) <= 7) {
	$_SESSION['error'] = 'Twój identyfikator OSK ma zbyt mało znaków. Wprowadź ponownie ID OSK.';

	header('Location: ../'.$back);
	exit();
}

if (strlen($id_osk) >= 9) {
	$_SESSION['error'] = 'Twój identyfikator OSK ma zbyt dużo znaków. Wprowadź ponownie ID OSK.';

	header('Location: ../'.$back);
	exit();
}

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');



if ($polaczenie->query("INSERT INTO osk_wspolpraca VALUES (NULL, '$user_id', '$id_osk', '0')")) {
	$rez2=$polaczenie->query("UPDATE users SET osk_owner = '1' WHERE id='$user_id'");
	header('Location: weryfikacja_osk_email.php?id='.$user_id);

} else {
	$_SESSION['error'] = 'Błąd serwera. Prosimy o próbę rejestrację w późniejszym terminie.';
	header('Location: ../'.$back);
	$polaczenie -> close();
	exit();
}


$polaczenie -> close();
$polaczenie -> close();
exit();



 ?>