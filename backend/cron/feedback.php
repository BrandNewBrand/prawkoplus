<?php
    session_start();
    $pagetitle = $row['name'];
    $pageprefix = '../../';
    include $pageprefix.'include/all/head.php';



    $email = $_SESSION['admin_email'];
    $actual_date = date('Y-m-d');


    $header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";

    require_once "../connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie->query('SET NAMES utf8');
    $polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

    $rezultat = $polaczenie->query("SELECT * FROM zapis_na_kurs WHERE data_zapis='$actual_date'");
    $ile = mysqli_num_rows($rezultat);

    for ($i=0; $i < $ile; $i++) { 
        $row=$rezultat->fetch_assoc();
        $id = $row['id'];
        $osk_id = $row['osk_id'];
        $user_id = $row['user_id'];
        $rez2 = $polaczenie->query("SELECT * FROM osk WHERE osk_id='$osk_id'");
        $row2=$rez2->fetch_assoc();
        $osk_name = $row2['name'];
        $rez3 = $polaczenie->query("SELECT * FROM users WHERE id='$user_id'");
        $row3=$rez3->fetch_assoc();
        $to = $row3['email'];
        $subject = 'Prośba o ocenę kursu w OSK: '.$osk_name;
        $message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Oceń swój kurs na prawo jazdy w ośrodku: '.$osk_name.'</h3><p>Wypełnij krótką ankietę, abyśmy mogli stawać się coraz lepsi.</p><br><br><a href="'.$_SESSION['domena'].'/ocena.php?id='.$id.'">WYSTAW OCENĘ</a></div></body></html>';
        if (mail($to, $subject, $message, $header)) {



        } else {

            $subject2 = 'Nie udało się wsyłać wiadomości do '.$to;
            $alert = mail($email, $subject2, $message, $header);

        }
    }

    $polaczenie->close();
    exit();
    
    











if (mail($to, $subject, $message, $header)) {



} else {

    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę zapisu na kurs w późniejszym terminie.';
    header('Location: kurs.php?id='.$row['id']);
}

$polaczenie->close();

?> 
