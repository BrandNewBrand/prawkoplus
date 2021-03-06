<?php
session_start();
$pagetitle = 'Moje konto';
$pageprefix = '';
$user_id = $_SESSION['zalogowany'];
if ($_SESSION['zalogowany'] == 0) {
header('Location: '.$pageprefix.'logowanie.php');
exit();
} else {

require_once "backend/connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');
$user_data_rez=$polaczenie->query("SELECT * FROM users WHERE id='$user_id'");
$user_data_tbl=$user_data_rez->fetch_assoc();
$imie=$user_data_tbl['imie'];
$nazwisko=$user_data_tbl['nazwisko'];
$email=$user_data_tbl['email'];
$tel=$user_data_tbl['tel'];
$login=$user_data_tbl['login'];
$haslo=$user_data_tbl['haslo'];
$osk_owner = $user_data_tbl['osk_owner'];

$rez2=$polaczenie->query("SELECT * FROM osk_wspolpraca WHERE user_id='$user_id'");
$rez2_numb = mysqli_num_rows($rez2);
if ($rez2_numb == 1) {
  $row2=$rez2->fetch_assoc();
  $id_osk = $row2['osk_id'];
  $_SESSION['osk_owner_status'] = $id_osk;
  $osk_owner_permition = 1;
  $osk_weryfikacja = $row2['weryfikacja'];
}



$polaczenie->close();
}
include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>
<div id="wrapper">
  <div class="container-fluid">
    <div class="row pt-5 mx-0 pl-2">
      <div class=" animate-hr">
        <a href="index.php" class="mb-2 back-header">wróc do prawko plus</a>
        <hr class="small-hr ml-0 mt-0">
      </div>
    </div>
    <div class="row m-0 os-card">
      <div class="col-lg-6   ">
        <div class="row text-left">
          <div class=" col-md-7 offset-md-1">
            <h1 class="grey-header " >twój profil</h1>
            <hr style="border-color:#AEAEAE;margin-top:0;">
          </div>
        </div>
        <div class="row pt-3 ">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-3 " >
            <p class=" form-label">imie:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10  ">
            <p class="dane"><?php echo $imie; ?></p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
            <p class="form-label">nazwisko:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <p class="dane"><?php echo $nazwisko; ?></p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3 pr-0" >
            <p class="form-label">Adres e-mail:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <p class="dane"><?php echo $email; ?></p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3 pr-0" >
            <p class="form-label">Numer telefonu:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <p class="dane"><?php echo $tel; ?></p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
            <p class="form-label">login:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <p class="dane"><?php echo $login; ?></p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
            <p class="form-label">hasło:</p>
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <div class="text-center">
              <a href="backend/zmiana_hasla.php"><button type="submit" class="btn btn-primary btn-submicik">zmień hasło</button></a>
            </div>
          </div>
        </div>
        <div class="row pt-3">
          <div class="offset-5" >
          </div>
          <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
            <div class="text-center">
              <a href="edycja-danych.php?id=<?php echo $user_id; ?>"> <button type="submit" class="btn btn-primary btn-submicik">edytuj</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6   mt-4 ">
        <div class="row text-left mt-5">
          <div class=" col-lg-8 offset-lg-2 d-flex flex-column align-items-center">
            <p class=" " >Korzyścią korzystania z aplikacji jest szybki i sprawny sposób na wymianę informacji, zadawanie pytań oraz uzyskanie odpowiedzi na pytania związane z kursem na prawo jazdy. Wszystko w zasięgu jednego programu. </p>
            <a href="#"><button class="btn-secondary-bnb text-center text-white">Pobierz Aplikację</button></a>
          </div>
          <div class=" col-lg-8 offset-lg-2 d-flex flex-column align-items-center mt-5">

            <?php
            if ($rez2_numb == 1) {
              if ($osk_weryfikacja == 1) {
                echo '<a href="profil-osk.php?id_osk='.$id_osk.'"><button class="btn-thirdary-bnb text-center text-white">Przejdź do profilu OSK</button></a>';
              } else {
                echo '<p class=" " >Oczekujesz na weryfikację.</p>';
              }
              
            } else {
              echo '<p class=" " >Prowadzisz własny ośrodek szkolenia kierowców? Dołącz do bazy ośrodków PrawkoPlus, lub zaktualizuj swoją wizytówkę.</p>
            <a href="form-weryfikacyjny-OSK.php"><button class="btn-thirdary-bnb text-center text-white">Jestem OSK</button></a>';
            }
            ?>
          </div>
        </div>

      </div>
    </div>
    <div class="col-6">
    </div>
  </div>
</div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
