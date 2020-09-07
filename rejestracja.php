<?php
session_start();
$pagetitle = '';
$pageprefix = '';

if (!isset($_SESSION['error'])) {
  $_SESSION['error'] = '';
}

include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>



 <div id="wrapper">

    <div class="container-fluid">
        <div class="row pt-5 mx-0 pl-2">
            <div class=" animate-hr">
                <a href="index.php" class="mb-2 back-header">wróc do prawko plus</a>
                <hr class="small-hr ml-0 mt-0">
            </div>
        </div>
        <div class="row m-0">
            <div class="col-12  os-card mt-4 ">

              <div class="row text-left">
                <div class=" col-md-7 offset-md-1">
                  <h1 class="grey-header " >rejestracja</h1>
                  <hr style="border-color:#AEAEAE;margin-top:0;">
                </div>

              </div>



                <form class="" action="backend/rejestracja.php" method="POST">

                  <div class="row pt-3 ">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-3 " >
                      <p class=" form-label">imie:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="text"  name="imie" class="form-control w-100  text-center" id="name" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['imie'].'"';} ?>>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">nazwisko:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="text"  name="nazwisko" class="form-control w-100  text-center" id="forname" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['nazwisko'].'"';} ?>>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3 pr-0" >
                      <p class="form-label">E-mail:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="email"  name="email" class="form-control w-100  text-center" id="poczta" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['email'].'"';} ?>>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3 pr-0" >
                      <p class="form-label">Numer telefonu:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="tel"  name="tel" class="form-control w-100  text-center  " id="tel" placeholder="" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['tel'].'"';} ?>>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">login:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="login"  name="login" class="form-control w-100  text-center" id="login" required <?php if (isset($_SESSION['dane_log'])) { echo 'value="'.$_SESSION['login'].'"';} ?>>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">hasło:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                      <input type="password" name="haslo" class="form-control w-100  text-center" id="haslo" value="" placeholder="" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-2 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">Powtórz hasło:</p>
                    </div>
                    <div class="col-lg-4   form-group offset-1 offset-lg-0 col-10">
                        <input type="password" name="haslo2" class="form-control w-100  text-center" id="haslo2" value="" placeholder="" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-4 offset-lg-4 offset-1 col-10">


                      <div class="form-group form-check" style="margin-left:3%;">
                          <label class="form-check-label f20 ">
                              <input class="form-check-input" style="margin-top:0" type="checkbox" required>
                              <span style="padding: 0 10px; display: block;">Akceptuje <a href="regulamin.pdf" target="_blank" style="color: blue;">regulamin</a></span>
                          </label>

                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submicik">zarejestruj się</button>
                      </div>



                    </div>

                  </div>

                </form>
                <div class="error-box text-center text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
