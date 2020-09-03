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

              <button style="background-color:#6D0B44" type="submit" class="btn btn-primary btn-submicik">edytuj zdjęcie</button>
            </div>
          </form>

        </div>

        <div class="col-lg-8 order-lg-1" >

          <form class="" action="backend/rejestracja.php" method="POST">

            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class=" form-label">imie:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">Jan</p>
                </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">nazwisko:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">Kowal</p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">nazwa ośrodka:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">KowaL</p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">miasto:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">Kraków</p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">ulica:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">Kozia 3</p>
              </div>



            </div>
            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">kod pocztowy:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">33-432</p>
              </div>



            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">email:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">kowal@gmail.com</p>
              </div>

            </div>
            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">telefon:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">997 997 551</p>
              </div>

            </div>
            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">numer ID:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane">1432513</p>
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
                <p class="dane text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                   standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ</p>

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



            <div class="text-center osk-btn ">

              <a href="profil-osk-edycja.php"><button type="submit" class="btn btn-primary btn-submicik">edycja</button></a>

            </div>




          </form>
        </div>

        <div class="col-12 order-4 section-grey-pp  " >

          <hr style="border:#C8C8C8 1px solid; width:80%;">

          <div class="pt-3">
            <p class="text-center">Nowe możliwości komunikowania się z kursantami pozwolą na dokładniejsze dotarcie do kursanta.
              W jednej aplikacji możesz porozmawiać i jednocześnie dodać wszystkich swoich instruktorów. </p>
            <form class="" action="index.html" method="post">
              <div class="text-center osk-btn-2 ">
                <button type="submit" class="btn btn-primary btn-submicik">dołacz do prawka plus</button>
              </div>
            </form>
          </div>







        </div>





    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
