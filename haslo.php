<?php
session_start();
$pagetitle = '';
$pageprefix = '';


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
                   <h1 class="grey-header " >twój profil</h1>
                   <hr style="border-color:#AEAEAE;margin-top:0;">
                 </div>

               </div>



                 <form class="" action="index.html" method="post">





                   <div class="row pt-3">
                     <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-2" >
                       <p class="form-label">hasło:</p>
                     </div>
                     <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                       <input type="password" name="haslo" class="form-control w-100 text-center" id="haslo" value="" placeholder="podaj stare hasło" required>
                     </div>
                   </div>


                   <div class="row pt-3">

                      <div class="col-lg-4   form-group offset-lg-4 offset-1 col-10">
                       <input type="password" name="haslo2" class="form-control w-100 text-center" id="haslo2" value="" placeholder="podaj nowe hasło" required>
                     </div>
                   </div>


                   <div class="row pt-3">

                      <div class="col-lg-4   form-group offset-lg-4 offset-1 col-10">
                       <input type="password" name="haslo3" class="form-control w-100 text-center" id="haslo2" value="" placeholder="powtórz nowe hasło" required>
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

                 </div>

             </div>
         </div>
     </div>
 </div>
 <?php include $pageprefix.'include/all/footer.php'; ?>
