<?php
    session_start();
    $pagetitle = 'Potwierdzenie nuemru ID OSK';
    $pageprefix = '../';

    $id = $_GET['id'];

    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $rezultat=$polaczenie->query("SELECT * FROM users WHERE id='$id'");
    $row = $rezultat->fetch_assoc();
    
    $rezultat2=$polaczenie->query("SELECT * FROM osk_wspolpraca WHERE user_id='$id'");
    $row2 = $rezultat2->fetch_assoc();

    $polaczenie->close();


    include $pageprefix.'include/all/head.php';
    include $pageprefix.'include/all/navbar.php';


    $to = $_SESSION['admin_email'];
    $name = 'Serwis Prawko Plus';
    $email = $row['email'];
    $lokalizacja = $_SESSION['domena'].'/backend/weryfikacja_osk_wiadomosc.php?id='.$id;
    $user_name = $row['imie'];
    $user_nazwisko = $row['nazwisko'];
    $osk_id = $row2['osk_id'];

    $subject = 'Weryfikacja numeru ID OSK użytkownika '.$row['login'];





$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";
    

$message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Użytkownik '.$user_name.' '.$user_nazwisko.', <br>zarejestrował się jako administrator ośrodka szkolenia kierowców o numerze ID: '.$osk_id.'</h3><br><a href="'.$lokalizacja.'">Przyznaj uprawnienia</a></div></body></html>';



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
                 <a href="index.php#search" class="mb-2 back-header">ankieta</a>
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
                       <p class="mb-0 small-black-text ">Twoje zgłoszenie zostało wysłane do administratora. Po pozytywnej weryfikacji zostanie Ci przyznany dostęp do zarządzania wizytówką OSK o numerze ID: <?php echo $osk_id; ?></p>
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