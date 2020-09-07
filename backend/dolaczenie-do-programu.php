<?php
    session_start();
    $pagetitle = 'Dołączenie do programu Prawko Plus';
    $pageprefix = '../';

    $id_osk = $_GET['id_osk'];
    $user_id = $_GET['user_id'];

    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie->query('SET NAMES utf8');
    $polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');
    $rezultat=$polaczenie->query("SELECT * FROM users WHERE id='$user_id'");
    $row = $rezultat->fetch_assoc();
    
    $rezultat2=$polaczenie->query("SELECT * FROM osk WHERE osk_id='$id_osk'");
    $row2 = $rezultat2->fetch_assoc();

    $polaczenie->close();


    include $pageprefix.'include/all/head.php';
    include $pageprefix.'include/all/navbar.php';

    $osk_id = $id_osk;
    $osk_name = $row2['name'];
    $user_tel = $row['tel'];
    $to = $_SESSION['admin_email'];
    $name = 'Serwis Prawko Plus';
    $email = $row['email'];
    $lokalizacja = $_SESSION['domena'].'/backend/potwierdzenie-dolaczenia-do-programu.php?id_osk='.$osk_id;
    $user_name = $row['imie'];
    $user_nazwisko = $row['nazwisko'];
    $osk_id = $id_osk;
    $osk_name = $row2['name'];
    $user_tel = $row['tel'];

    $subject = 'Prośba o dołączenie do programu partnerskiego Prawko Plus OSK o numerze ID: '.$osk_id;





$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";
    

$message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Użytkownik '.$user_name.' '.$user_nazwisko.', <br>Zgłosił swój Ośrodek Szkolenia Kierowców o numerze ID: '.$osk_id.' oraz nazwie: '.$osk_name.', do programu partnerskiego Prawko Plus.<br><br>Dane kontaktowe:<br><br>numer-telefonu: <a href="tel: '.$user_tel.'">'.$user_tel.'</a></h3><br><a href="'.$lokalizacja.'">Dołącz OSK: '.$osk_name.' do programu</a></div></body></html>';



    // echo $to.'<br>';
    // echo $subject.'<br><br>';
    // echo $message.'<br><br>';
    // echo $header.'<br><br>';
    // echo $_SESSION['email'];

if (mail($to, $subject, $message, $header)) {

    

} else {

    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę rejestracji w późniejszym terminie.';
    header('Location: ../form-weryfikacyjny-OSK.php.php');
    exit();
}


?> 


<div id="wrapper">

   <?php include $pageprefix.'include/all/navbar.php'; ?>
     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="index.php" class="mb-2 back-header">profil-osk.php</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">



                   <div class="row">

                     <div class="col-lg-10 offset-lg-1 text-center mt-3">

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Już prawie...</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-lg-8 offset-lg-2 text-center">
                       <p class="mb-0 small-black-text ">Twoje zgłoszenie zostało wysłane do administratora. Po pozytywnej weryfikacji zostaniesz dołączony do programu Prawko Plus</p>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">

                       <div class="text-center">
                         <a href="../index.php">
                           <button type="submit"  class="btn btn-primary btn-submicik">Wróć na Prawko Plus</button>
                         </a>

                       </div>

                    


                     </div>

                   </div>



                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; ?>