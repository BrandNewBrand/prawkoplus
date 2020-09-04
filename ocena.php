<?php
session_start();
$pagetitle = '';
$pageprefix = '';


include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>



 <div id="wrapper">


        <div class="container-fluid">
            <div class="row pt-5 px-4">
                <div class="text-white animate-hr">
                    <a href="index.php" class="mb-2">Przejdź na Prawko Plus</a>
                    <hr class="small-hr ml-0 mt-0">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-7 my-3 my-xl-5">
                    <div class=" os-card" style="padding:20px;">
                        <div>
                            <h1 style="color: #B40524; font-weight: 700;">Prosimy podziel się</br>swoim doświadczeniem</h1>
                        </div>
                    </div>
                    <div class="os-card mt-3 mt-xl-5" style="padding:20px;">
                        <div>
                            <h1>Witaj Tomek</h1>
                        </div>
                        <hr style="border-color: black">
                        <div>
                            <p>Zapisałeś sie ostatnio na kurs prawa jazdy kategori B2 w ośrodku Laydes z Krakowa.</p><p>
                            Podziel się z nami opinią na temat odbytego kursu oraz funkcjonowania ośrodka.</p><p>
                            Twoja ocena będzie widoczna na karcie ośrodka w naszym systemie co pozwoli innym użytkownikom lepiej dobrać ośrodek do ich potrzeb.</p><p><b>Nie wiesz jak ocenić swój kurs prawa jazdy?</b></p><p>Zapoznaj się z regulaminem <a href="regulamin.html" target="_blank" style="color:blue;">Idealnego Ośrodka Szkolenia Kierowców</a>, który został opracowany przez społeczność taką jak Ty, ludzi szkolących się na kierowców.</p>
                        </div>
                    </div>


                </div>
                <div class="col-xl-4  os-form my-3 my-xl-5 ml-xl-5 d-flex align-items-center">
                    <div class="contact-form c-back side-form w-100 p-3">
                        <h4 class="font-weight-bold text-center">Pomóż nam się ulepszać!</h4>
                        <form class="pt-4 d-flex flex-column align-items-end" action="send_ocena.php" method="POST">
                            <label style="font-size: 16px; width: 100%;">
                                <p style="font-weight: 700;" class="mb-1 mt-2">Zaangażowanie instruktora:</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="zaang_inst" value="5" /><label for="star5" title="Extra!">5 stars</label>
                                    <input type="radio" id="star4" name="zaang_inst" value="4" /><label for="star4" title="Dobrze">4 stars</label>
                                    <input type="radio" id="star3" name="zaang_inst" value="3" /><label for="star3" title="Poprawnie">3 stars</label>
                                    <input type="radio" id="star2" name="zaang_inst" value="2" /><label for="star2" title="Słabo">2 stars</label>
                                    <input type="radio" id="star1" name="zaang_inst" value="1" /><label for="star1" title="Fatalnie">1 star</label>
                                </fieldset>
                            </label>
                            <label style="font-size: 18px; width: 100%;">
                                <p style="font-weight: 700;" class="mb-1 mt-2">Efekt szkolenia:</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star10" name="efekt_szkolenia" value="5" /><label for="star10" title="Extra!">5 stars</label>
                                    <input type="radio" id="star9" name="efekt_szkolenia" value="4" /><label for="star9" title="Dobrze">4 stars</label>
                                    <input type="radio" id="star8" name="efekt_szkolenia" value="3" /><label for="star8" title="Poprawnie">3 stars</label>
                                    <input type="radio" id="star7" name="efekt_szkolenia" value="2" /><label for="star7" title="Słabo">2 stars</label>
                                    <input type="radio" id="star6" name="efekt_szkolenia" value="1" /><label for="star6" title="Fatalnie">1 star</label>
                                </fieldset>
                            </label>
                            <label style="font-size: 18px; width: 100%;">
                                <p style="font-weight: 700;" class="mb-1 mt-2">Zaangażowanie ośrodka:</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star15" name="zaang_osk" value="5" /><label for="star15" title="Extra!">5 stars</label>
                                    <input type="radio" id="star14" name="zaang_osk" value="4" /><label for="star14" title="Dobrze">4 stars</label>
                                    <input type="radio" id="star13" name="zaang_osk" value="3" /><label for="star13" title="Poprawnie">3 stars</label>
                                    <input type="radio" id="star12" name="zaang_osk" value="2" /><label for="star12" title="Słabo">2 stars</label>
                                    <input type="radio" id="star11" name="zaang_osk" value="1" /><label for="star11" title="Fatalnie">1 star</label>
                                </fieldset>
                            </label>
                            <label style="font-size: 18px; width: 100%;">
                                <p style="font-weight: 700;" class="mb-1 mt-2">Profesjonalizm instruktora:</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star20" name="prof_inst" value="5" /><label for="star20" title="Extra!">5 stars</label>
                                    <input type="radio" id="star19" name="prof_inst" value="4" /><label for="star19" title="Dobrze">4 stars</label>
                                    <input type="radio" id="star18" name="prof_inst" value="3" /><label for="star18" title="Poprawnie">3 stars</label>
                                    <input type="radio" id="star17" name="prof_inst" value="2" /><label for="star17" title="Słabo">2 stars</label>
                                    <input type="radio" id="star16" name="prof_inst" value="1" /><label for="star16" title="Fatalnie">1 star</label>
                                </fieldset>
                            </label>
                            <label style="font-size: 18px; width: 100%;">
                                <p style="font-weight: 700;" class="mb-1 mt-2">Stan samochodów szkoleniowych:</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star25" name="samochody" value="5" /><label for="star25" title="Extra!">5 stars</label>
                                    <input type="radio" id="star24" name="samochody" value="4" /><label for="star24" title="Dobrze">4 stars</label>
                                    <input type="radio" id="star23" name="samochody" value="3" /><label for="star23" title="Poprawnie">3 stars</label>
                                    <input type="radio" id="star22" name="samochody" value="2" /><label for="star22" title="Słabo">2 stars</label>
                                    <input type="radio" id="star21" name="samochody" value="1" /><label for="star21" title="Fatalnie">1 star</label>
                                </fieldset>
                            </label>

                            <input type="submit" class="btn btn-primary btn-submicik mt-3" value="Prześlij Ocenę">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include $pageprefix.'include/all/footer.php'; ?>
