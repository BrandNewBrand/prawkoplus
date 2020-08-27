<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prawko Plus</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="kurs-style.css" rel="stylesheet">
</head>
<body>



<div id="wrapper">

  <div id="first-icon" class="profile-icon container-fluid d-flex justify-content-end">

    <a href="#"><img src="img/img2/arrowsDown/profileIcon.svg" alt=""></a>

  </div>
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
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10 text-center">
                      <p style="border-bottom:2px solid grey;">Izabela</p>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">nazwisko:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <input type="text"  name="surname" class="form-control w-100  text-center" id="forname" placeholder="" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3 pr-0" >
                      <p class="form-label">kontakt:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <input type="email"  name="email" class="form-control w-100  text-center" id="poczta" placeholder="twój email" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="offset-5" >

                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <input type="tel"  name="tel" class="form-control w-100  text-center  " id="tel" placeholder="numer telefonu">
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">login:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <input type="login"  name="login" class="form-control w-100  text-center" id="login" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-3 offset-lg-2 offset-1 pt-lg-3" >
                      <p class="form-label">hasło:</p>
                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                      <input type="password" name="haslo" class="form-control w-100  text-center" id="haslo" value="" placeholder="" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="offset-5" >

                    </div>
                    <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                        <input type="password" name="haslo2" class="form-control w-100  text-center" id="haslo2" value="" placeholder="potwierdz hasło" required>
                    </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-6 offset-lg-4 offset-1 col-10">


                      <div class="form-group form-check" style="margin-left:3%;">
                          <label class="form-check-label f20 ">
                              <input class="form-check-input" style="margin-top:0" type="checkbox" required>
                              <span style="padding: 0 10px; display: block;">Akceptuje <a href="regulamin.pdf" target="_blank" style="color: blue;">regulamin</a></span>
                          </label>

                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submicik">zapisz się</button>
                      </div>



                    </div>

                  </div>


                </div>

            </div>
        </div>

    </div>
</div>
<footer class="container-fluid position-relative text-white pt-0">
    <div class="row">
        <div class="col-md-2 d-flex flex-column justify-content-center align-items-center py-3 py-xl-1 ml-0 ml-xl-5">
            <div class="ml-0 pl-0 ml-xl-5 pl-xl-5">
                <img class="d-none d-xl-block " src="img/logo.svg">
                <img class="d-block d-xl-none" src="img/logo-mobile.svg">
                <h4 class="text-center">Prawko Plus</h4>
            </div>

        </div>
        <div class="col-md-6 offset-md-2 d-flex justify-content-center flex-column">
            <div class="heading">
                <p>Dołączyli do nas</p>
            </div>
            <hr class="w-100  text-center">
            <div class="row">
                <div class="col-4 col-xl-4">
                    <p class="f24">
                        Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do
                    </p>
                </div>
                <div class="col-4 col-xl-4">
                    <p class="f24">
                        Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do
                    </p>
                </div>
                <div class="col-4 col-xl-4">
                    <p class="f24">
                        Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/kurs.js"></script>
</body>

</html>
