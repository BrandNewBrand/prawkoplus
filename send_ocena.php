<?php
session_start();


if (isset($_POST['osk_id'])) {
    $zaang_inst = $_POST['zaang_inst'];
    $efekt_szkolenia = $_POST['efekt_szkolenia'];
    $zaang_osk = $_POST['zaang_osk'];
    $prof_inst = $_POST['prof_inst'];
    $samochody = $_POST['samochody'];
    $osk_id = $_POST['osk_id'];
    $user_id = $_POST['user_id'];
    $id_zapis = $_POST['id_zapis'];
} else {
	$_SESSION['error'] = 'Błąd oceny. Spróbuj ponownie.';

	header('Location: ocena.php?id='.$id_zapis);
	exit();
}

require_once "backend/connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

$rezultat = $polaczenie->query("INSERT INTO osk_ratings VALUES (NULL, '$zaang_inst', '$zaang_osk', '$samochody', '$efekt_szkolenia' ,'$prof_inst', '$osk_id', '$user_id', '$id_zapis')");


$rez = $polaczenie->query("SELECT * FROM osk_ratings WHERE osk_id = '$osk_id'");
$liczba_ocen = mysqli_num_rows($rez);



$rating1=0;
$rating2=0;
$rating3=0;
$rating4=0;
$rating5=0;

for ($i=0; $i < $liczba_ocen; $i++) { 
	$row = $rez->fetch_assoc();
	$rating1 = $rating1 + $row['rating1'];
	$rating2 = $rating2 + $row['rating2'];
	$rating3 = $rating3 + $row['rating3'];
	$rating4 = $rating4 + $row['rating4'];
	$rating5 = $rating5 + $row['rating5'];
}

$rating1 = round($rating1/$liczba_ocen);
$rating2 = round($rating2/$liczba_ocen);
$rating3 = round($rating3/$liczba_ocen);
$rating4 = round($rating4/$liczba_ocen);
$rating5 = round($rating5/$liczba_ocen);

$rating = ($rating1+$rating2+$rating3+$rating4+$rating5)/5;

$rating = round($rating);

$rezultat = $polaczenie->query("UPDATE osk SET rating1 = '$rating1' WHERE osk_id='$osk_id'");
$rezultat = $polaczenie->query("UPDATE osk SET rating2 = '$rating2' WHERE osk_id='$osk_id'");
$rezultat = $polaczenie->query("UPDATE osk SET rating3 = '$rating3' WHERE osk_id='$osk_id'");
$rezultat = $polaczenie->query("UPDATE osk SET rating4 = '$rating4' WHERE osk_id='$osk_id'");
$rezultat = $polaczenie->query("UPDATE osk SET rating5 = '$rating5' WHERE osk_id='$osk_id'");
$rezultat = $polaczenie->query("UPDATE osk SET rating = '$rating' WHERE osk_id='$osk_id'");


header('Location: po-ankiecie.php');
$polaczenie->close();
exit();

?> 
