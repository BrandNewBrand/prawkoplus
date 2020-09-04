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
                 <a href="index.php#search" class="mb-2 back-header">ankieta</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">



                   <div class="row">

                     <div class="col-lg-10 offset-lg-1 text-center mt-3">

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Zrobione!</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-lg-8 offset-lg-2 text-center">
                       <p class="mb-0 small-black-text ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                         diam nonumy eirmod tempor invidunt ut
                          labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                          justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                          sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor i
                          nvidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                          justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">

                       <div class="text-center">
                         <a href="index.php">
                           <button type="submit"  class="btn btn-primary btn-submicik">Przejdź do prawko plus</button>
                         </a>

                       </div>



                       <!-- <div class="text-center">
                         <a href="index.php" class="btn btn-primary btn-submicik  py-auto">Przejdź do prawko plus</a>
                       </div> -->

                     </div>

                   </div>



                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; ?>
