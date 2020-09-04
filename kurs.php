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
                    <?php
                    if (isset($_SESSION['active'])) {
                        echo '<input type="button" value="Wróć do wyboru kursów" onClick="history.back();" style="background: none; border: none; color: #fff; padding: 0;"/>';
                    } else {
                        echo '<a href="index.php#search" class="mb-2">wróc do wyboru kursów</a>';
                    }
                    ?>

                    <hr class="small-hr ml-0 mt-0">
                </div>
            </div>
            <div class="row m-0 justify-content-between">

                <div class="col-xl-7 text-center  os-card mt-4">
                    <div id="os-card-header" class="os-card-header kurs-card-header">

                      <div class="img ">

                        <img src="img/kolo.png" style="" alt="">

                        <!-- <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div> -->
                      </div>

                      <div class="descript mt-2">
                        <h4>Ośrodek Laydes</h4>
                        <p>kategoria kursu B2</p>

                        <label style="font-size: 18px; width: 100%;">
                            <p  class="mb-1 mt-2">Ocena: 5</p>
                            <fieldset class="rating">
                                <input type="radio" id="star10" name="efekt_szkolenia" value="5" /><label for="star10" title="Extra!">5 stars</label>
                                <input type="radio" id="star9" name="efekt_szkolenia" value="4" /><label for="star9" title="Dobrze">4 stars</label>
                                <input type="radio" id="star8" name="efekt_szkolenia" value="3" /><label for="star8" title="Poprawnie">3 stars</label>
                                <input type="radio" id="star7" name="efekt_szkolenia" value="2" /><label for="star7" title="Słabo">2 stars</label>
                                <input type="radio" id="star6" name="efekt_szkolenia" value="1" /><label for="star6" title="Fatalnie">1 star</label>
                            </fieldset>
                        </label>
                      </div>


                    </div>

                    <div id="os-description" class="row m-0">

                      <hr class="bg-black ">
                    </div>
                    <div id="os-ratings" class="mt-4">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, q
                        uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                </div>

                <div class="col-xl-4  os-form d-flex align-items-center justify-content-center py-4 mt-4">
                    <div class="contact-form c-back side-form">
                        <h4 class="font-weight-bold text-center">Zapisz się na kurs już teraz!</h4>
                        <p id="form-text" class="text-center pt-4"></p>
                        <form class="pt-4 d-flex flex-column align-items-end" action="send_zapis.php" method="POST">
                            <div id="mail_osk"></div>
                            <div class="form-group w-100">
                                <input type="text"  name="name" class="form-control w-100" id="name" placeholder="Twoje imię" required>
                            </div>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="text"  name="nazwisko" class="form-control w-100" id="forname" placeholder="Twoje Nazwisko" required>
                            </div>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="email"  name="poczta" class="form-control w-100" id="poczta" placeholder="Twój email" required>
                            </div>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="tel"  name="tel" class="form-control w-100" id="tel" placeholder="Twój numer telefonu">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label f20">
                                    <input class="form-check-input" type="checkbox" required>
                                    <span style="padding: 0 10px; display: block;">Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z <a href="regulamin.pdf" target="_blank" style="color: blue;">regulaminem</a></span>
                                </label>


                            </div>
                            <button type="submit" class="btn btn-primary btn-submicik">Zapisz się</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include $pageprefix.'include/all/footer.php'; ?>
