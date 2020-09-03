<?php 
    session_start();
    $pagetitle = 'Zmiana hasła';
    $pageprefix = '../';
    if (!isset($_SESSION['error'])) {
      $_SESSION['error'] = '';
    }

    include $pageprefix.'include/all/head.php';
    include $pageprefix.'include/all/navbar.php';

if (!isset($_GET['id'])) {
  header('Location: ../logowanie.php');
  exit();
}


$id=$_GET['id'];

if (isset($_POST['nowe_haslo'])) {

  if ($_POST['nowe_haslo'] == $_POST['nowe_haslo2']) {
      $nowe_haslo=$_POST['nowe_haslo'];
  } else {
    $_SESSION['error'] = 'Wpisz dwukrotnie to samo hasło';
  }

}

if (isset($nowe_haslo)) {
  
  require_once "connect.php";

  $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

  if ($rezultat=$polaczenie->query("UPDATE users SET haslo = '$nowe_haslo' WHERE id='$id'")) {
    $error = 0;
  }
  header('Location: log_out.php');
  exit();
  $polaczenie->close();
}



?>

<div id="wrapper">

   <?php include $pageprefix.'include/all/navbar.php'; ?>
     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="../index.php" class="mb-2 back-header">Wróć na Prawko Plus</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">



                   <div class="row">

                     <div class="col-lg-10 offset-lg-1 text-center mt-3">

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Nowe hasło</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-lg-8 offset-lg-2 text-center">
                       <form action="reset-hasla-mail.php?id=<?php echo $id; ?>" method="POST">
                         <input type="password" class="form-control mw-50-input" name="nowe_haslo" placeholder="nowe hasło"><br>
                         <input type="password" class="form-control mw-50-input"  name="nowe_haslo2" placeholder="powtórz nowe hasło"><br>
                         <input type="submit" value="Zmień hasło" class="mw-50-input btn btn-primary btn-submicik">
                       </form>
                       <div class="error-box text-center text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                      </div>
                     </div>
                   </div>



                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; ?>