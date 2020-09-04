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
            <div class="text-white animate-hr">
                <a href="index.php#search" class="mb-2">wróc do prawko plus</a>
                <hr class="small-hr ml-0 mt-0">
            </div>
        </div>
        <div class="row m-0">
            <div class="col-xl-12 bg-white os-card mt-4 text-center">
                <h1 style="color:#B40524; font-weight: 700;">Wiadomość została pomyślnie wysłana</h1>
            </div>
        </div>
    </div>
</div>

<?php include $pageprefix.'include/all/footer.php'; ?>
