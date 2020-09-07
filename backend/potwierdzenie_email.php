<?php
    session_start();
    $pagetitle = 'Potwierdzenie adresu email';
    $pageprefix = '../';

    $id = $_GET['id'];

    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie->query('SET NAMES utf8');
    $polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');
    $rezultat=$polaczenie->query("SELECT * FROM users WHERE id='$id'");
    $row = $rezultat->fetch_assoc();

    $polaczenie->close();


    include $pageprefix.'include/all/head.php';
    include $pageprefix.'include/all/navbar.php';


    $to = $row['email'];
    $name = 'Serwis Prawko Plus';
    $email = $_SESSION['admin_email'];
    $lokalizacja = $_SESSION['domena'].'/backend/potwierdzenie_adresu_email.php?id='.$id;
    $user_name = $row['imie'];
    $subject = 'Weryfikacja adresu e-mail użytkownika '.$row['login'];





$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";
    

$message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Cześć '.$user_name.', <br>potwierdź swój adres e-mail klikając w poniższy link</h3><a href="'.$lokalizacja.'">Potwierdź Adres E-mail</a></div></body></html>';



    // echo $to.'<br>';
    // echo $subject.'<br><br>';
    // echo $message.'<br><br>';
    // echo $header.'<br><br>';
    // echo $_SESSION['email'];

if (mail($to, $subject, $message, $header)) {

    

} else {

    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę rejestracji w późniejszym terminie.';
    header('Location: ../rejestracja.php');
    exit();
}


?> 


<div id="wrapper">

   <?php include $pageprefix.'include/all/navbar.php'; ?>
     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="index.php" class="mb-2 back-header">ankieta</a>
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
                       <p class="mb-0 small-black-text ">Wysłaliśmy do Ciebie wiadomość na adres e-mail: <?php echo $_SESSION['email']; ?>. Przejdź do swojej skrzynki aby aktywować konto.</p>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">

                       <div class="text-center">
                         <a href="potwierdzenie_email.php?id=<?php echo $id; ?>">
                           <button type="submit"  class="btn btn-primary btn-submicik">Wyślij wiadomość ponownie</button>
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