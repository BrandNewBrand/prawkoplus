<?php 
session_start();

$back = 'przypomnienie_hasla.php';


if (isset($_POST['email'])) {

	$email = $_POST['email'];

	// $long = strlen($id_osk);

	// echo $long;

	// exit();

} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../'.$back);

	exit();
}



require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

$email_test=$polaczenie->query("SELECT id FROM users WHERE email='$email'");
		$email_test_numb = mysqli_num_rows($email_test);
		$user_id_tbl=$email_test->fetch_assoc();
		$user_id=$user_id_tbl['id'];

if ($email_test_numb > 0) {
	$to = $email;
    $name = 'Serwis Prawko Plus - resetowanie hasła';
    $email = $_SESSION['admin_email'];
    $lokalizacja = $_SESSION['domena'].'/backend/reset-hasla-mail.php?id='.$user_id;
    $subject = 'Resetowanie hasła';

	$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";

    $message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Zresetuj swoje hasło klikając w poniższy link</h3><a href="'.$lokalizacja.'">Zresetuj hasło</a></div></body></html>';

    if (mail($to, $subject, $message, $header)) {

    

	} else {

	    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę zmiany hasła w późniejszym terminie.';
	    header('Location: ../'.$back);
	    exit();
	}

	header('Location: ../logowanie.php');

} else {
	$_SESSION['error'] = 'Nie ma konta o podanym adresie e-mail.';
	header('Location: ../'.$back);
	exit();
}




$polaczenie -> close();
exit();



 ?>