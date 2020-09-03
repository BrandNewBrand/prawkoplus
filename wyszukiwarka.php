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
        <p style="color:white">Oszczędź swój czas i wybierz sprawdzoną przez naszych kursantów szkołę nauki jazdy.</p>
      </div>
    </div>



    <form class="mx-auto"  style="width:95%" action="backend/wyszukiwanie_strona_gl.php" method="POST">

      <div class="row bg-search-purple ofe-row-margin  d-flex align-items-center text-center "  style="border-radius:27px; ">

        <div class="col-lg-10  search-box  my-auto  " >

          <div class="row content-row" >

            <div class="col-md-3  search-tab d-flex align-items-center tab-left mx-auto">
              <select name="city"  class="browser-default custom-select  search-bar-text-1">
                <option class="" value="0" selected>miasto</option>
                <option class="" value="Koszalin">Koszalin</option>
                <option class="" value="Kraków">Kraków</option>
                <option class="" value="Warszawa">Warszawa</option>
                <option class="" value="Poznań">Poznań</option>
              </select>
            </div>


            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <select name="cat" class="browser-default custom-select search-bar-text-1" placeholder="Kategoria">
                <option  value="0" selected>kategoria</option>
                <option  value="B1">B1</option>
                <option  value="B2">B2</option>
                <option  value="C1">C1</option>
                <option  value="A1">A1</option>
              </select>
            </div>


            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto " >
              <select name="sort" class="browser-default custom-select  ">
                <option value="0" selected>sortuj</option>
                <option value="ocena malejąco">ocena malejąco</option>
                <option value="ocena rosnąco">ocena rosnąco</option>
              </select>
            </div>


            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <div class="round ">
                <input type="checkbox" id="checkbox" name="pp" value="1">
                <label class="vertical-center-checkbox" for="checkbox"></label>
                <span class="search-bar-text-1" style="margin-left: 12%;">prawko plus</span>
                <div class="clearing-both"> </div>
              </div>
            </div>
          </div>



        </div>

        <div class="col-lg-2" >

          <div class="row  tab-right" style=" background-color:#fff">
            <div class="col px-0" >
              <label style="cursor:pointer" class=" mb-0  search-tab d-flex justify-content-center ">
                <input class="search-bar-text-2" type="submit" name="" value="szukaj">
                <img style="margin-left: 5%;" src="img/img2/arrowsDown/lupa.svg" alt="">
              </label>
            </div>
          </div>




        </div>



      </div>

    </form>


    <!-- <form class="" action="backend/wyszukiwanie_strona_gl.php" method="POST">
      <div class=" col-lg-12  offset-md-0 p-0 ofe-row-margin mt-1">
        <div class="search-box bg-white">
          <div class="content row mx-0">
            <div class="search-tab d-flex align-items-center tab-left col-lg-10 bg-custom-purple ">
              <div class="col-md-3 d-none d-lg-block">
                <select name="city"  class="browser-default custom-select  search-bar-text-1">
                  <option class="" value="0" selected>miasto</option>
                  <option class="" value="Koszalin">Koszalin</option>
                  <option class="" value="Kraków">Kraków</option>
                  <option class="" value="Warszawa">Warszawa</option>
                  <option class="" value="Poznań">Poznań</option>
                </select>
              </div>
              <div class="col-md-3 d-none d-lg-block">
                <select name="cat" class="browser-default custom-select search-bar-text-1" placeholder="Kategoria">
                  <option  value="0" selected>kategoria</option>
                  <option  value="B1">B1</option>
                  <option  value="B2">B2</option>
                  <option  value="C1">C1</option>
                  <option  value="A1">A1</option>
                </select>
              </div>
              <div  class="col-md-3 d-none d-lg-block">
                <select name="sort" class="browser-default custom-select ">
                  <option value="0" selected>sortuj</option>
                  <option value="ocena malejąco">ocena malejąco</option>
                  <option value="ocena rosnąco">ocena rosnąco</option>
                </select>
              </div>
              <div style="margin-bottom: 5px;" class="col-md-3 d-none d-lg-block">
                <div class="round ">
                  <input type="checkbox" id="checkbox" name="pp" value="1">
                  <label class="vertical-center-checkbox" for="checkbox"></label>
                  <span class="search-bar-text-1" style="margin-left: 12%;">prawko plus</span>
                  <div class="clearing-both"> </div>
                </div>
              </div>
            </div>
            <label style="cursor:pointer" class=" mb-0 search-tab col-lg-2 d-flex justify-content-center col-12 tab-right">
              <input class="search-bar-text-2" type="submit" name="" value="szukaj">
              <img style="margin-left: 5%;" src="img/img2/arrowsDown/lupa.svg" alt="">
            </label>
          </div>
        </div>
      </div>
    </form> -->



    <div class="row m-0 os-card mt-4">

      <div id="search-list" class="search-list m-0 position-relative"><div class="search-item d-flex position-relative p-0 justify-content-between aling-items-center">
                        <div class="image d-flex align-items-center justify-content-center col-3 p-0 py-3 pl-3">
                            <img style="height: 90%;" src="img/card-img.png">
                        </div>
                        <div class="item-content col-6 c-back py-4 d-flex flex-column justify-content-between">
                            <h4 class="c-red">Ośrodek Auto-Moto-Szkoła "ARMA" (03391261)</h4>
                            <div class="descripton-short my-2">
                                <p>Ośrodek nie zgłosił się do programu Prawko Plus.
                                </p>
                            </div>
                            <div class="d-block d-xl-flex">
                                <p>ocena: <b>3</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                        </div>
                        <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black; width: 25%">
                            <div>
                                <p><b>B A1 AM A2</b></p>
                                <p class="mt-2 mb-0">J.Lea 60/1</p>
                                <p><b>Kraków</b></p>
                            </div>
                            <div class="button mx-auto">
                                <a id="0" class="btn btn-primary" href="kurs.php?id=1&amp;r=3" onclick="storeToLocal(0)">szczegóły</a>
                            </div>
                        </div>

                    </div><div class="search-item d-flex position-relative p-0 justify-content-between aling-items-center">
                        <div class="image d-flex align-items-center justify-content-center col-3 p-0 py-3 pl-3">
                            <img style="height: 90%;" src="img/card-img.png">
                        </div>
                        <div class="item-content col-6 c-back py-4 d-flex flex-column justify-content-between">
                            <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców Albra Aleksander Braś (03321261)</h4>
                            <div class="descripton-short my-2">
                                <p>Ośrodek nie zgłosił się do programu Prawko Plus.
                                </p>
                            </div>
                            <div class="d-block d-xl-flex">
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                        </div>
                        <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black; width: 25%">
                            <div>
                                <p><b>B A1 AM A2</b></p>
                                <p class="mt-2 mb-0">Szczygla 10/1</p>
                                <p><b>Kraków</b></p>
                            </div>
                            <div class="button mx-auto">
                                <a id="1" class="btn btn-primary" href="kurs.php?id=2&amp;r=0" onclick="storeToLocal(1)">szczegóły</a>
                            </div>
                        </div>

                    </div><div class="search-item d-flex position-relative p-0 justify-content-between aling-items-center">
                        <div class="image d-flex align-items-center justify-content-center col-3 p-0 py-3 pl-3">
                            <img style="height: 90%;" src="img/card-img.png">
                        </div>
                        <div class="item-content col-6 c-back py-4 d-flex flex-column justify-content-between">
                            <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców AUTO-TOP ld (02961261)</h4>
                            <div class="descripton-short my-2">
                                <p>Ośrodek nie zgłosił się do programu Prawko Plus.
                                </p>
                            </div>
                            <div class="d-block d-xl-flex">
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                        </div>
                        <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black; width: 25%">
                            <div>
                                <p><b>B A1 AM A2</b></p>
                                <p class="mt-2 mb-0">Dunin-Wąsowicza 22</p>
                                <p><b>Kraków</b></p>
                            </div>
                            <div class="button mx-auto">
                                <a id="2" class="btn btn-primary" href="kurs.php?id=3&amp;r=0" onclick="storeToLocal(2)">szczegóły</a>
                            </div>
                        </div>

                    </div><div class="search-item d-flex position-relative p-0 justify-content-between aling-items-center">
                        <div class="image d-flex align-items-center justify-content-center col-3 p-0 py-3 pl-3">
                            <img style="height: 90%;" src="img/card-img.png">
                        </div>
                        <div class="item-content col-6 c-back py-4 d-flex flex-column justify-content-between">
                            <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców Andrzej Czubaj AutoTop (02071261)</h4>
                            <div class="descripton-short my-2">
                                <p>Ośrodek nie zgłosił się do programu Prawko Plus.
                                </p>
                            </div>
                            <div class="d-block d-xl-flex">
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                        </div>
                        <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black; width: 25%">
                            <div>
                                <p><b>B A1 AM A2</b></p>
                                <p class="mt-2 mb-0">Aleja Pokoju 82</p>
                                <p><b>Kraków</b></p>
                            </div>
                            <div class="button">
                                <a id="3" class="btn btn-primary" href="kurs.php?id=4&amp;r=0" onclick="storeToLocal(3)">szczegóły</a>
                            </div>
                        </div>

                    </div></div>

                    <div id="search-list-mobile" class="search-list m-0 position-relative"><div class="search-item d-flex position-relative p-0">
                    <div class="wrap p-3">
                        <div class="d-flex flex-wrap">
                            <div class="image w-50">
                                <img src="img/card-img.png">
                            </div>
                            <div class="des c-back w-50 pt-2">
                                <h4 class="c-red">Ośrodek Auto-Moto-Szkoła "ARMA" (03391261)</h4>
                                <p><b>B A1 AM A2</b></p>
                                <p>ocena: <b>3</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                            <div class="w-100 c-back py-3">
                                <div class="descripton-short my-2">
                                    <p> Ośrodek nie zgłosił się do programu Prawko Plus. </p>
                                </div>
                            </div>
                            <div class="w-100 c-back d-flex justify-content-between">
                                <div class="address">
                                    <p class="mt-2 mb-0">J.Lea 60/1</p>
                                    <p><b>Kraków</b></p>
                                </div>
                                <a id="0" class="btn btn-primary align-self-end" href="kurs.php?id=1&amp;r=3" onclick="storeToLocal(0)">szczegóły</a>
                            </div>
                        </div>
                    </div>
                </div><div class="search-item d-flex position-relative p-0">
                    <div class="wrap p-3">
                        <div class="d-flex flex-wrap">
                            <div class="image w-50">
                                <img src="img/card-img.png">
                            </div>
                            <div class="des c-back w-50 pt-2">
                                <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców Albra Aleksander Braś (03321261)</h4>
                                <p><b>B A1 AM A2</b></p>
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                            <div class="w-100 c-back py-3">
                                <div class="descripton-short my-2">
                                    <p> Ośrodek nie zgłosił się do programu Prawko Plus. </p>
                                </div>
                            </div>
                            <div class="w-100 c-back d-flex justify-content-between">
                                <div class="address">
                                    <p class="mt-2 mb-0">Szczygla 10/1</p>
                                    <p><b>Kraków</b></p>
                                </div>
                                <a id="1" class="btn btn-primary align-self-end" href="kurs.php?id=2&amp;r=0" onclick="storeToLocal(1)">szczegóły</a>
                            </div>
                        </div>
                    </div>
                </div><div class="search-item d-flex position-relative p-0">
                    <div class="wrap p-3">
                        <div class="d-flex flex-wrap">
                            <div class="image w-50">
                                <img src="img/card-img.png">
                            </div>
                            <div class="des c-back w-50 pt-2">
                                <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców AUTO-TOP ld (02961261)</h4>
                                <p><b>B A1 AM A2</b></p>
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                            <div class="w-100 c-back py-3">
                                <div class="descripton-short my-2">
                                    <p> Ośrodek nie zgłosił się do programu Prawko Plus. </p>
                                </div>
                            </div>
                            <div class="w-100 c-back d-flex justify-content-between">
                                <div class="address">
                                    <p class="mt-2 mb-0">Dunin-Wąsowicza 22</p>
                                    <p><b>Kraków</b></p>
                                </div>
                                <a id="2" class="btn btn-primary align-self-end" href="kurs.php?id=3&amp;r=0" onclick="storeToLocal(2)">szczegóły</a>
                            </div>
                        </div>
                    </div>
                </div><div class="search-item d-flex position-relative p-0">
                    <div class="wrap p-3">
                        <div class="d-flex flex-wrap">
                            <div class="image w-50">
                                <img src="img/card-img.png">
                            </div>
                            <div class="des c-back w-50 pt-2">
                                <h4 class="c-red">Ośrodek Ośrodek Szkolenia Kierowców Andrzej Czubaj AutoTop (02071261)</h4>
                                <p><b>B A1 AM A2</b></p>
                                <p>ocena: <b>0</b></p>
                                <p class="ml-0 ml-xl-5">cena: <b>brak </b></p>
                            </div>
                            <div class="w-100 c-back py-3">
                                <div class="descripton-short my-2">
                                    <p> Ośrodek nie zgłosił się do programu Prawko Plus. </p>
                                </div>
                            </div>
                            <div class="w-100 c-back d-flex justify-content-between">
                                <div class="address">
                                    <p class="mt-2 mb-0">Aleja Pokoju 82</p>
                                    <p><b>Kraków</b></p>
                                </div>
                                <a id="3" class="btn btn-primary align-self-end" href="kurs.php?id=4&amp;r=0" onclick="storeToLocal(3)">szczegóły</a>
                            </div>
                        </div>
                    </div>
                </div></div>

      <!-- <div class="osk-card w-100 row align-items-center justify-content-between">
        <div class="img col-sm-3 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="desc col-sm-6">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black mt-0">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
        <div class="szczegoly col-sm-3">
          <p>ul. Kwiatowa 207</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
      </div>

      <div class="osk-card-media w-100 row align-items-center justify-content-between">
        <div class="img col-4 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="szczegoly col-6">
          <p>ul. Kwiatowa 2077</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
        <div class="desc col-12 mt-4">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
      </div>


      <div class="osk-card w-100 row align-items-center justify-content-between">
        <div class="img col-sm-3 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="desc col-sm-6">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black mt-0">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
        <div class="szczegoly col-sm-3">
          <p>ul. Kwiatowa 207</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
      </div>
      <div class="osk-card-media w-100 row align-items-center justify-content-between">
        <div class="img col-4 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="szczegoly col-6">
          <p>ul. Kwiatowa 207</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
        <div class="desc col-12 mt-4">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
      </div>


      <div class="osk-card w-100 row align-items-center justify-content-between">
        <div class="img col-sm-3 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="desc col-sm-6">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black mt-0">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
        <div class="szczegoly col-sm-3">
          <p>ul. Kwiatowa 207</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
      </div>
      <div class="osk-card-media w-100 row align-items-center justify-content-between">
        <div class="img col-4 h-100 p-0">
          <div class="img-bg-card h-100" style="background-image: url('img/kolo.png'); background-size: cover; background-repeat: no-repeat;"></div>
        </div>
        <div class="szczegoly col-6">
          <p>ul. Kwiatowa 207</p>
          <p>Kraków</p>
          <a href="#"><button class="btn-primary">Szczegóły</button></a>
        </div>
        <div class="desc col-12 mt-4">
          <h4>OSK Cos tam</h4>
          <hr class="bg-black">
          <p class="opis-kr">
            ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
          </p>
          <div class="d-flex">
            <div class="ocena"><p>Ocena: 5.0</p></div>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
