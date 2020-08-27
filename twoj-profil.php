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
            <div class=" animate-hr">
                <a href="index.php#search" class="mb-2 back-header">wróc do prawko plus</a>
                <hr class="small-hr ml-0 mt-0">
            </div>
        </div>
        <div class="row m-0 os-card">




            <div class="col-6   mt-4 ">

              <div class="row text-left">
                <div class=" col-md-7 offset-md-1">
                  <h1 class="grey-header " >twój profil</h1>
                  <hr style="border-color:#AEAEAE;margin-top:0;">
                </div>

              </div>





                  <div class="row pt-3 ">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-3 " >
                      <p class=" form-label">imie:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10  ">
                      <p class="dane">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">nazwisko:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <p class="dane">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3 pr-0" >
                      <p class="form-label">kontakt:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                    <p class="dane">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="offset-5" >

                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <p class="dane">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">login:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <p class="dane">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">hasło:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submicik">zmień hasło</button>
                      </div>

                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="offset-5" >

                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submicik">edytuj</button>
                      </div>
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
