<?php
session_start();
$pagetitle = '';
$pageprefix = '';


include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>



 <div id="wrapper">

   <?php include $pageprefix.'include/all/navbar.php'; ?>
     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="index.php#search" class="mb-2 back-header">wróc do prawko plus</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">

               <div class="row text-left">
                 <div class="col-6 offset-1">
                   <h1 class="grey-header " >logowanie</h1>
                   <hr style="border-color:#AEAEAE;margin-top:0;">
                 </div>

               </div>



                 <form class="" action="backend/logowanie.html" method="post">



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


                       <div class="form-group form-check" style="margin-left:3%;">
                           <label class="form-check-label f20">
                               <input class="form-check-input" style="margin-top:0" type="checkbox" required>
                               <span style="padding: 0 10px; display: block;">nie pamiętam hasła</span>
                           </label>


                       </div>
                       <div class="text-center">
                         <button type="submit" class="btn btn-primary btn-submicik">zaloguj</button>
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