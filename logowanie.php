<?php
session_start();



if (!isset($_SESSION['error'])) {
  $_SESSION['error'] = '';
}

$pagetitle = '';
$pageprefix = '';


include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
if ($_SESSION['zalogowany'] > 0) {
  header('Location: twoj-profil.php');
  exit();
}
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
                 <div class="col-6 offset-1 ">
                   <h1 class="grey-header " >logowanie</h1>
                   <hr style="border-color:#AEAEAE;margin-top:0;">
                 </div>

               </div>


                  <div class="error-box text-center text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                 <form class="" action="backend/logowanie.php" method="post">



                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">login:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="login"  name="login" class="form-control w-100" id="tel" required>
                     </div>

                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                       <p class="form-label">hasło:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="password" name="haslo" class="form-control w-100" id="haslo" value="" placeholder="" required>
                     </div>

                   </div>



                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">


                       <div class="form-group form-check">
                           <a href="przypomnienie_hasla.php" class="text-black">Nie pamiętam hasła</a>


                       </div>
                       <div class="text-center">
                         <button type="submit" class="btn btn-primary btn-submicik">zaloguj</button>
                       </div>




                     </div>

                   </div>

                 </form>
                 <p class="text-center">Nie masz konta? <a href="rejestracja.php" class="text-black">Zarejestruj się</a></p>

                 </div>

             </div>
         </div>
     </div>
 </div>
 <?php include $pageprefix.'include/all/footer.php'; ?>
