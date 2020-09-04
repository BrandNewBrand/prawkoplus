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
                 <a href="index.php#search" class="mb-2 back-header">wróc do prawko plus</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">



                   <div class="row">

                     <div class="col-lg-10 offset-lg-1 text-center mt-3">

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Gotowe!</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-md-6 offset-md-3 text-center">
                       <p class="mb-0 small-black-text ">Witamy w aplikacji Prawko Plus, ciesz się łatwym sposobem komunikowania.</p>
                     </div>
                   </div>




                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; ?>
