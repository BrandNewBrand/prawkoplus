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



         <form class="" action="backend/wyszukiwanie_strona_gl.php" method="POST">
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
         											<div class="clearing-both">	</div>
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
         </form>


         <div class="row m-0 os-card mt-4">

           <div class="d-flex search-inside-box" style="background-color:#FFFFFF">
             <div class="image d-flex align-items-center justify-content-center " >

                                          <img src="img/kolo.png" alt="dff">
                                      </div>
                                      <div class="item-content w-40 c-back ml-5 pr-5 py-4 d-flex flex-column justify-content-between  " style="border-right: 2px solid #707070">
                                          <h4 class="c-red">Ośrodek Ewa</h4>
                                          <div class="descripton-short my-2">
                                              <p>Dzięki nam możesz wybrać najlepsze ośrodki i kursy, które proponują.
                                                  Dzięki nam zapis na kurs jest łatwy
                                                  i intuicyjny. Nic nie ryzykujesz,
                                                  a jedynie zyskujesz.

                                              </p>
                                          </div>
                                          <div class="d-block d-xl-flex justify-content-between">
                                              <p>ocena: 5</p>
                                              <p class="ml-0 ml-xl-5">cena: 1200 zł</p>
                                          </div>
                                      </div>
                                      <div class="category d-flex flex-column justify-content-between  my-5  mx-auto font-weight-bold  " >
                                          <div>
                                              <p>A1 C3 B2</p>
                                              <div class="mt-5 ">
                                                <p>Witosa</p>
                                                <p>Kraków</p>
                                              </div>

                                          </div>
                                          <div class="button ">
                                              <a id=${i} class="btn btn-primary" href="kurs.php?id=${list[i].id}&r=${list[i].rating}" onclick="storeToLocal(${i})">szczegóły</a>
                                          </div>
                                      </div>
           </div>
<!--
           <div class="image d-flex align-items-center justify-content-center">

                                        <img src="img/kolo.png" alt="dff">
                                    </div>
                                    <div class="item-content w-50 c-back ml-2 ml-xl-5 py-4 d-flex flex-column justify-content-between">
                                        <h4 class="c-red">Ośrodek Ewa</h4>
                                        <div class="descripton-short my-2">
                                            <p>Dzięki nam możesz wybrać najlepsze ośrodki i kursy, które proponują.
                                                Dzięki nam zapis na kurs jest łatwy
                                                i intuicyjny. Nic nie ryzykujesz,
                                                a jedynie zyskujesz.

                                            </p>
                                        </div>
                                        <div class="d-block d-xl-flex">
                                            <p>ocena: <b>${list[i].rating}</b></p>
                                            <p class="ml-0 ml-xl-5">cena: <b>${list[i].price} zł</b></p>
                                        </div>
                                    </div>
                                    <div class="category d-flex flex-column justify-content-between my-4 px-3" style="border-left: 2px solid black">
                                        <div>
                                            <p><b>${list[i].category}</b></p>
                                            <p class="mt-2 mb-0">${list[i].street}</p>
                                            <p><b>${list[i].city}</b></p>
                                        </div>
                                        <div class="button">
                                            <a id=${i} class="btn btn-primary" href="kurs.php?id=${list[i].id}&r=${list[i].rating}" onclick="storeToLocal(${i})">szczegóły</a>
                                        </div>
                                    </div> -->


         </div>
     </div>
 </div>
 <?php include $pageprefix.'include/all/footer.php'; ?>
