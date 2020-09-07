<?php
    session_start();
    $to = $_SESSION['admin_email'];
    $osk = $_POST['osk'];
    $name = $_POST['name'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['poczta'];
    $tel = $_POST['tel'];
    $osk_id = $_POST['osk_id'];
    $user_id = $_SESSION['zalogowany'];
    $data_zapis = date('Y-m-d');
    $data_ocena = date( 'Y-m-d', strtotime( $data_zapis .' +14 day' ));

    echo $data_zapis.'<br>'.$data_ocena;
    echo '<br>'.$osk;
    require_once "backend/connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie->query('SET NAMES utf8');
    $polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

    $rezultat = $polaczenie->query("SELECT * FROM osk WHERE osk_id='$osk_id'");
    $row=$rezultat->fetch_assoc();

    $subject = 'OSK: '.$row['name'].' - Nowy kursant '.$name.' '.$nazwisko;


$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";


$message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Nowy kursant ze strony Prawko Plus</h3><p>Dane kursanta:<br><br> Imię: '.$name.'<br>Nazwisko:'.$nazwisko.'<br>Adres e-mail: '.$email.'<br>Numer telefonu: '.$tel.'</p></div></body></html>';

if (mail($to, $subject, $message, $header)) {

    if (mail($osk, $subject, $message, $header)) {
        $rezultat2 = $polaczenie->query("INSERT INTO zapis_na_kurs VALUES (NULL, '$user_id', '$osk_id', '$data_zapis', '$data_ocena')");
        $_SESSION['error'] = 'Udało się. Oczekuj na kontakt z OSK '.$row['name'];
        header('Location: kurs.php?id='.$row['id']);
    }

} else {

    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę zapisu na kurs w późniejszym terminie.';
    header('Location: kurs.php?id='.$row['id']);
}

$polaczenie->close();

?> 
