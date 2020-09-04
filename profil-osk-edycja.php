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
      <div class="col">
        <div class="animate-hr">
          <a href="index.php#search" class="mb-2 back-header">wróć do strony głównej</a>
          <hr class="small-hr ml-0 mt-0">
        </div>
      </div>
    </div>


    <div class="row m-0 os-card mt-4">


      <div class="col-12 ">
        <h1 class="grey-header " >profil OSK</h1>
        <hr style="border-color:#AEAEAE;margin-top:0; width:60%; margin-left:0;">

      </div>


        <div class="col-lg-4 order-lg-2 d-flex flex-column" >

          <div class="osk-photo">
            <img src="img/kolo.png" alt="">
          </div>


          <form class="" action="index.html" method="post">
            <div class="text-center osk-btn">
              <label for="bb">  <div style="background-color:#6D0B44"  type="submit" class="btn btn-primary btn-submicik">dodaj zdjęcie</div>
                <input type="file" id="bb" name="" value="" style="visibility:hidden">
              </label>
            </div>


        </div>

        <div class="col-lg-8 order-lg-1 osk-form-lebel" >


            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class=" form-label">imie:</p>
              </div>
              <div class="col-lg-7     form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="imie" class="form-control w-100  text-center" id="name" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['imie'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">nazwisko:</p>
              </div>
              <div class="col-lg-7     form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="nazwisko" class="form-control w-100  text-center" id="forname" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['nazwisko'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class="form-label">nazwa ośrodka:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="osk" class="form-control w-100  text-center" id="name-osk" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['email'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class="form-label">miasto:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="miasto" class="form-control w-100  text-center  " id="miasto" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['tel'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">ulica:</p>
              </div>
              <div class="col-lg-7   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="adres" class="form-control w-100  text-center" placeholder="" id="add" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['login'].'"';} ?>>
              </div>



            </div>
            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">kod pocztowy:</p>
              </div>
              <div class="col-lg-7   form-group offset-1 offset-lg-0 col-10">
                <input type="number"  name="poczta" class="form-control w-100  text-center" placeholder="" id="add" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['login'].'"';} ?>>
              </div>



            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">email:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="email" name="haslo" class="form-control w-100  text-center" id="email" value="" placeholder="" required>
              </div>

            </div>


            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">telefon:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="number" name="nr" class="form-control w-100  text-center" id="nr" value="" placeholder="" required>
              </div>

            </div>



            <div class="row pt-3">
              <div class="col-lg-4 offset-lg-4 offset-1 col-10">







              </div>

            </div>


        </div>


        <div class="col  order-3 osk-form-lebel" >

            <div class="row pt-3 ">
              <div class="col-lg-2  offset-1 pt-3 " >
                <p class=" form-label">opis:</p>
              </div>
              <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                <!-- <input type="textarea" style="min-height:300px"  name="opis" class="form-control w-100  text-center" id="name" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['imie'].'"';} ?>> -->
                <textarea class="form-control w-100" name="name" rows="8" cols="80"></textarea>
              </div>

            </div>

            <div class="col-lg-6 offset-lg-3 offset-1">
              <label for="">
                <input type="checkbox" name="" value="">
                <span>A1</span>
              </label>
              <label for="">
                <input type="checkbox" name="" value="">
                <span>A1</span>
              </label>
              <label for="">
                <input type="checkbox" name="" value="">
                <span>A1</span>
              </label>
            </div>



            <div class="text-center  osk-btn mt-2">
              <a href="profil-osk.php" class="osk-btn">
                <button type="submit" class="btn btn-primary btn-submicik">zapisz</button>
                </a>
            </div>


          </form>
        </div>





    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
