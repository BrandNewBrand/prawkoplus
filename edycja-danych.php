<?php
session_start();
$pagetitle = '';
$pageprefix = '';

if (!isset($_SESSION['error'])) {
  $_SESSION['error'] = '';
}

$user_id = $_GET['id'];

if ($_SESSION['zalogowany'] == 0) {
  header('Location: '.$pageprefix.'logowanie.php');
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
}

include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>



 <div id="wrapper">


     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="index.php" class="mb-2 back-header">wróc do prawko plus</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">

               <div class="row text-left">
                  <div class=" col-md-7 offset-md-1">
                   <h1 class="grey-header " >edycja danych</h1>
                   <hr style="border-color:#AEAEAE;margin-top:0;">
                 </div>

               </div>



                 <form class="" action="backend/edycja_konta.php?id=<?php echo $user_id; ?>" method="post">



                  <input type="texk" name="id" hidden value="<?php echo $user_id; ?>">

                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">imię:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="text" name="imie" class="form-control w-100 text-center" id="" value="<?php echo $imie; ?>" required>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">nazwisko:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="text" name="nazwisko" class="form-control w-100 text-center" id="" value="<?php echo $nazwisko; ?>" required>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">Adres e-mail:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="email" name="email" class="form-control w-100 text-center" id="" value="<?php echo $email; ?>" required>
                     </div>
                   </div>


                   <div class="row pt-3">
                      <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">Numer telefonu:</p>
                     </div>
                      <div class="col-lg-4   form-group offset-lg-0 offset-1 col-10">
                       <input type="tel" name="tel" class="form-control w-100 text-center" id="" value="<?php echo $tel; ?>" required>
                     </div>
                   </div>

                   <div class="row pt-3">
                      <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">Login:</p>
                     </div>
                      <div class="col-lg-4   form-group offset-lg-0 offset-1 col-10">
                       <input type="tel" name="login" class="form-control w-100 text-center" id="" value="<?php echo $login; ?>" required>
                     </div>
                   </div>





                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">



                       <div class="text-center">
                         <button type="submit" class="btn btn-primary btn-submicik">zapisz</button>
                       </div>



                     </div>

                   </div>

                 </form>
                 <div class="error-box text-center text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>

                 </div>

             </div>
         </div>
     </div>
 </div>

<?php include $pageprefix.'include/all/footer.php'; ?>
