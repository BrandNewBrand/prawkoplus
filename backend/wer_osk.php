<?php 
session_start();

$back = 'form-weryfikacyjny-OSK.php';

$user_id = $_SESSION['zalogowany'];

if (isset($_POST['id_osk'])) {

	$id_osk = $_POST['id_osk'];

	// $long = strlen($id_osk);

	// echo $long;

	// exit();

} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../'.$back);

	exit();
}

if (strlen($id_osk) < 5) {
	$_SESSION['error'] = 'Twój identyfikator OSK ma zbyt mało znaków. Wprowadź ponownie ID OSK.';

	header('Location: ../'.$back);
	exit();
} 

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);



if ($polaczenie->query("INSERT INTO osk_wspolpraca VALUES (NULL, '$user_id', '$id_osk', '1')")) {

	header('Location: weryfikacja_osk_email.php?id='.$user_id);

} else {
	$_SESSION['error'] = 'Błąd serwera. Prosimy o próbę rejestrację w późniejszym terminie.';
	header('Location: ../'.$back);
	$polaczenie -> close();
	exit();
}


$polaczenie -> close();
exit();



 ?>