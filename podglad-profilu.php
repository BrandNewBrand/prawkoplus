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
      <div class="col-7">
        <div class="animate-hr">
          <a href="index.php#search" class="mb-2 back-header">Wróć do strony głównej</a>
          <hr class="small-hr ml-0 mt-0">
        </div>
      </div>
    </div>

    <!-- <div class="container-fluid">
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
            <div class="col-lg-4 offset-lg-1 offset-1 pt-3 " >
              <p class=" form-label">imie:</p>
            </div>
            <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10  ">
              <p class="dane"><?php echo $imie; ?></p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
              <p class="form-label">nazwisko:</p>
            </div>
            <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
              <p class="dane"><?php echo $nazwisko; ?></p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3 pr-0" >
              <p class="form-label">Adres e-mail:</p>
            </div>
            <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
              <p class="dane"><?php echo $email; ?></p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3 pr-0" >
              <p class="form-label">Numer telefonu:</p>
            </div>
            <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
              <p class="dane"><?php echo $tel; ?></p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
              <p class="form-label">login:</p>
            </div>
            <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
              <p class="dane"><?php echo $login; ?></p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-4 offset-lg-1 offset-1 pt-lg-3" >
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
                <a href="edycja-danych.php?id=<?php echo $user_id; ?>"> <button type="submit" class="btn btn-primary btn-submicik">edytuj</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6   mt-4 ">
          <div class="row text-left mt-5">
            <div class=" col-md-7 offset-md-1 d-flex flex-column align-items-center">
              <p class="grey-header " >Korzyścią korzystania z aplikacji jest szybki i sprawny sposób na wymianę informacji, zadawanie pytań oraz uzyskanie odpowiedzi na pytania związane z kursem na prawo jazdy. Wszystko w zasięgu jednego programu. </p>
              <a href="#"><button class="btn-secondary-bnb text-center text-white">Pobierz Aplikację</button></a>
            </div>
            <div class=" col-md-7 offset-md-1 d-flex flex-column align-items-center mt-5">
              <p class="grey-header " >Prowadzisz własny ośrodek szkolenia kierowców? Dołącz do bazy ośrodków PrawkoPlus, lub zaktualizuj swoją wizytówkę.</p>
              <a href="form-weryfikacyjny-OSK.php"><button class="btn-thirdary-bnb text-center text-white">Jestem OSK</button></a>
            </div>
          </div>

        </div>
      </div>
      <div class="col-6">
      </div>
    </div> -->

    <div class="row m-0 os-card mt-4">


      <div class="col-12 ">
        <h1 class="grey-header " >profil OSK</h1>
        <hr style="border-color:#AEAEAE;margin-top:0; width:60%; margin-left:0;">

      </div>


        <div class="col-lg-4 order-lg-2" >
          <img src="img/kolo.png" alt="">

          <form class="" action="index.html" method="post">
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-submicik">dodaj zdjęcie</button>
            </div>
          </form>

        </div>

        <div class="col-lg-8 order-lg-1" >

          <form class="" action="backend/rejestracja.php" method="POST">

            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class=" form-label">imie:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="imie" class="form-control w-100  text-center" id="name" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['imie'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">nazwisko:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="nazwisko" class="form-control w-100  text-center" id="forname" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['nazwisko'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 pr-0" >
                <p class="form-label">nazwa ośrodka:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="osk" class="form-control w-100  text-center" id="name-osk" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['email'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 pr-0" >
                <p class="form-label">lokalizacja:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="miasto" class="form-control w-100  text-center  " id="miasto" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['tel'].'"';} ?>>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">dokładny adres:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="adres" class="form-control w-100  text-center" id="add" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['login'].'"';} ?>>
              </div>

              <div class="col-lg-2 col-10 offset-1 offset-lg-0 ">
                <input type="number" class="form-control w-100  text-center" name="nr-domu" placeholder="nr domu" value="">

              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">kontakt:</p>
              </div>
              <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                <input type="email" name="haslo" class="form-control w-100  text-center" id="email" value="" placeholder="email" required>
              </div>

            </div>

            <div class="row pt-3">
              <!-- <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                <p class="form-label">Powtórz hasło:</p>
              </div> -->
              <div class="col-lg-4   form-group offset-lg-5 offset-1 col-10">
                  <input type="number" name="haslo2" class="form-control w-100  text-center" id="haslo2" value="" placeholder="telefon" required>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4 offset-lg-4 offset-1 col-10">







              </div>

            </div>

          </form>

        </div>


        <div class="col  order-3" >
          <form class="" action="index.html" method="post">

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



            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-submicik">zapisz się</button>
            </div>


          </form>
        </div>





    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
