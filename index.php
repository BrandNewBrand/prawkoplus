<?php
session_start();
$pagetitle = '';
$pageprefix = '';


include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>

	<div class="wrapper text-white">
		<header class="container-fluid header p-0">





			<div class="row header-row">

				<div class="col-md-5">

					<div class="heading mb-4">
							<h1>Certyfikator OSK</h1>
					</div>

					<hr class="hr-margin-left">

						<div class="heading-p mt-4 mt-xl-5 ">
							<p>
							Stworzyliśmy regulamin idealnego Ośrodka Szkolenia Kierowców
							– szkołę nauki jazdy, która spełnia wszystkie standardy.
							Opracowaliśmy wzór, którego kategorie informują o jakości
							i zaangażowaniu zarówno ośrodka, jak i samego instruktora.
							Na podstawie wytycznych kursanci oceniają, czy wybrana przez nich szkoła jazdy wpasowała się w kryteria.

							</p>
						</div>
				</div>

				<div class="col-md-2 col-sm-4  d-flex align-items-end justify-content-center  ">

					<div class="text-center align-text-bottom d-none d-sm-block arrowsInRight">

						<img src="img/img2/arrowsDown/threeDownArrows.svg" alt="">

					</div>
				</div>



				<div class="col-md-4 col-sm-7 offset-md-1 d-flex align-items-end">

					<div class="heading ">

								<p class="f36">Jesteśmy portalem, który umożliwi Ci znalezienie idealnego ośrodka.
								<p>
									<hr style="margin-bottom: 0px;" class="hr-margin-right d-flex align-items-end ">
					</div>

					</div>

			</div>

		</header>


		<section id="search" class="search container-fluid p-0">


<!-- ###############################################3 -->
<form class="" action="backend/wyszukiwanie_strona_gl.php" method="POST">
	<div class=" col-lg-11  offset-xl-1 offset-md-0 p-0 ofe-row-margin mt-1">
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



								<!-- <div id="search-list" class="search-list m-0 position-relative">


								</div>
								<div id="search-list-mobile" class="search-list m-0 position-relative">


								</div>
								<div class="cyferki d-flex c-back justify-content-center pb-5">
									<button onclick="activeC(-1)" class="search-arrows arrowLeft"></button>
									<div id="numerki" class="numerki d-flex align-items-center"></div>
									<button onclick="activeC(1)" class="search-arrows arrowRight"></button>
								</div> -->
							</div>
						</div>
					</div>
</form>








<!-- ##################################################### -->




		<div class="row">

		<!-- sekcja wyboru
			<div class="col-xl-8 offset-xl-1 offset-md-0 p-0">
					<div class="search-box bg-white">
						<div class="content row mx-0">
							<div class="search-tab d-flex align-items-center tab-left col-9 col-xl-9 bg-custom-purple">
								<div class="col-md-4">
									<select id="city" onchange="changeSort(true)" class="browser-default custom-select select1">
										<option value='1' selected>miasto</option>
									</select>
								</div>
								<div class="col-md-5">
									<select id="category" onchange="changeSort(true)" class="browser-default custom-select select2">
										<option value='1' selected>kategoria kursu</option>
									</select>
								</div>
								<div class="col-md-5">
									<select id="category" onchange="changeSort(true)" class="browser-default custom-select select2">
										<option value='1' selected>Prawko Plus</option>
									</select>
								</div>
								<div class="col-md-5">
									<select id="category" onchange="changeSort(true)" class="browser-default custom-select select2">
										<option value='1' selected>sortuj</option>
									</select>
								</div>
							</div>
							<div class="search-tab col-3 col-xl-3 d-flex align-items-center tab-right">
								<select id="starPrice" onchange="starPrice(this.value, true)" class="browser-default custom-select sort">
									<option value="s" selected>szukaj</option>
									<option value="0">ocena malejąco</option>
									<option value="2">ocena rosnąco</option>
									<option value="1">cena rosnąco</option>
									<option value="3">cena malejąco</option>

								</select>
							</div>
							<div id="search-list" class="search-list m-0 position-relative">


							</div>
							<div id="search-list-mobile" class="search-list m-0 position-relative">


							</div>
							<div class="cyferki d-flex c-back justify-content-center pb-5">
								<button onclick="activeC(-1)" class="search-arrows arrowLeft"></button>
								<div id="numerki" class="numerki d-flex align-items-center"></div>
								<button onclick="activeC(1)" class="search-arrows arrowRight"></button>
							</div>
						</div>
					</div>
				</div>

			</div> -->












			<div class="row ">
				<div class="col-md-7">

				<div class="heading mb-4">
						<h1>Kategorie oceniania OSK</h1>
					</div>
					<hr >
					<div class="heading-p mt-4 mt-xl-5 ">
					<p class="#" style="font-weight:normal">
						Tymi kategoriami będziemy starać się ocenić i uwierzytelnić informacje na temat ośrodka szkoleniowego,
						 który na celu ma przygotować nas do egzaminu na prawo jazdy.

						</p>
					</div>

				</div>
				<div class="col-md-5 rightImg">


				<div class="  d-none d-md-block">
					<img class="img-fluid  " src="img/img2/Mask Group 13.svg">
				</div>

				</div>



			</div>



			<div class="row ofe-row-margin ofe-first-margin">
				<div class="col-md-6">

				<div class="heading mb-4">
						<h3>1. Zaangażowanie instruktora</h3>
					</div>
					<hr class="hr-small-left">
					<div class="heading-p mt-4 mt-xl-5 ">
					<p class="#">
						W tym miejscu oceniamy, w jakim stopniu instruktor angażuje się w nasze szkolenie. Interesuje nas,
						 z jakim nastawieniem podchodził do kursanta instruktor i czy współpraca przebiegała komfortowo.

						</p>
					</div>

				</div>


			</div>


			<div class="row ofe-row-margin">

				<div class="col-md-6 order-md-2">

					<div class="heading mb-4">
							<h3>2. Zaangażowanie ośrodka</h3>
					</div>

					<hr class="hr-small-left">

					<div class="heading-p mt-4 mt-xl-5 ">
					<p class="#">
						Chcemy wiedzieć, czy ośrodek ułatwiał współpracę, czy dysponował odpowiednimi narzędziami naukowymi w celu edukacji.
						Do tej kategorii zalicza się również zaangażowanie pracowników w prowadzoną działalność oraz dbałość o jakość oferowanych kursów.
						</p>
					</div>

				</div>


				<div class="col-md-6 order-md-1 col-5 mx-auto">

					<div class="float-center  ">
						<img class="img-fluid float-center  mx-auto d-block " src="img/img2/Group 208.svg">
					</div>




				</div>





			</div>

			<div class="row ofe-row-margin">




				<div class="col-md-6">

					<div class="heading mb-4">
							<h3>3. Stan samochodów szkoleniowych </h3>
					</div>

					<hr class="hr-small-left">

					<div class="heading-p mt-4 mt-xl-5 ">
					<p class="#">
						Ta kategoria informuje nas o tym, czy samochody wykorzystywane do
						nauki jazdy są w dobrym stanie i czy zachowano wszystkie aspekty bezpieczeństwa. Istotny jest również aspekt komfortu podczas jazdy.
						</p>
					</div>

				</div>

				<div class="col-md-6 col-5  mx-auto">

						<div class="float-center ">
							<img class="img-fluid float-center   mx-auto d-block" style="margin-left:4% !important" src="img/img2/Group 209.svg">
						</div>


					</div>


			</div>

			<div class="row ofe-row-margin">


				<div class="col-md-6 order-md-2">

					<div class="heading mb-4">
							<h3>4. Efekt szkolenia </h3>
					</div>

					<hr class="hr-small-left">

					<div class="heading-p mt-4 mt-xl-5 ">
					<p class="#">
							Oceniamy całość efektywności szkolenia pod względem merytorycznym i praktycznym.
							Czy szkolenia przyniosły dobre efekty i czy część teoretyczna, jak i praktyczna była na wystarczająco wysokim poziomie, aby przygotować do egzaminu na prawo jazdy.
							Ważna jest również innowacyjność w prowadzeniu szkoleń oraz zgodność materiałów z obowiązującymi wymogami.
						</p>
					</div>

				</div>


				<div class="col-md-6 order-md-1 col-5 mx-auto">

					<div class="float-center  ">
						<img class="img-fluid float-center  mx-auto d-block" src="img/img2/Group 210.svg">
					</div>


				</div>





			</div>

			<div class="row ofe-row-margin">




				<div class="col-md-6 order-md-1">

					<div class="heading mb-4">
							<h3>5. Profesjonalizm instruktora</h3>
					</div>

					<hr class="hr-small-left">

					<div class="heading-p mt-4 mt-xl-5 ">
						<p class="#">
							Sprawdzamy, czy instruktor zna i rozumie czynniki, które mają wpływ na proces kształcenia się. Oceniamy,
							czy przekazywane treści są zrozumiałe i jasne.
							Interesuje nas wiedza na temat podejścia oraz kultury osobistej w stosunku do kursanta.
						</p>
					</div>

				</div>

				<div class="col-md-6 order-md-2  col-5 mx-auto">

						<div class="float-center  align-self-center ">
							<img class="img-fluid float-center align-self-center  mx-auto d-block" src="img/img2/Group 211.svg">
						</div>


					</div>


			</div>

				<div class="row ">
					<div class=col-md-10>
						<div class="heading mb-4">
								<h3>Odwiedź regulamin idealnego Ośrodka Szkolenia Kierowców - dowiedz się,
									czy wybrany ośrodek spełnia ważne dla Ciebie kryteria.</h3>
						</div>

					</div>
				</div>

			</div>
			<div class="row ofe-row-margin">
				<div class="col-md-4 pd0"> <hr class="hr-inv"></div>

				<div class="col-md-3 col-5 offset-1 mt-5">


					<div class="arrowsInRight"><img src="img/img2/Group 173.svg" alt=""></div>


				</div>
			<div class="col-md-4 col-6 purple-text mt-5">
				<p class="f36">regulamin idealnego <br>
				Ośrodka Szkolenia Kierowców</p>

				<hr class="hr-small-left">
			</div>



		</div>


		<div class="row" style="margin-top:80px">



			<div class="col-md-8 offset-1">

				<div class="heading mb-4">
								<h3>Aplikacja Prawko Plus </h3>
						</div>

						<hr class="hr-small-left">

						<div class="heading-p mt-4 mt-xl-5 ">
							<p class="#">
							To przede wszystkim komunikator, ułatwiający szybką wymianę informacji między kursantem, instruktorem oraz ośrodkiem szkolenia kierowców.
							Każdy z uczestników rozmowy będzie miał możliwość w szybszy i łatwiejszy sposób, otrzymać odpowiedź na pytania związane z prawem jazdy.
							</p>
						</div>



			</div>

		</div>

			<div class="row offset-1" style="margin-top:30px;">

								<!-- <div style="margin-top:35px;"> -->


									<div class="col-sm-2 arrowsInRight ">
											<img class="d-none d-sm-block mx-auto" src="img/img2/arrowsDown/threeDownArrows.svg" alt="">
									</div>
									<div class="col-sm-5 col-3">


										<p class="purple-text f36">pobierz aplikację</p>

										<hr class="hr-small-left" style="border-color: #B8578F !important;">
									</div>




			</div>




		<!-- ####################3
		zdjęcia aplikacji -->

		<div>

		<div class="col-12 smartphone-icon-position">

				<img style="width:100%;" src="img/img2/arrowsDown/Group 209.svg" alt="">

				</div>

		</div>

		<!-- <div class="row">

			<div class="col-12 smartphone-icon-position">

			<img style="width:90%;" src="img/img2/arrowsDown/Group 209.svg" alt="">

			</div>


		</div> -->




			<!-- <div class="row">
				<div class="col-9 col-xl-3 ml-auto ml-xl-0 px-0">
					<div class="search-left">
						<div class="heading">
							<h3>Znajdź kurs</h3>
						</div>
						<hr class="hr-margin-left hr-search hr-100">
						<div class="heading-p">
							<p>
								Oszczędź swój czas i wybierz sprawdzoną przez naszych kursantów szkołę nauki jazdy.
							</p>
							<p>
								Odwiedź regulamin <a href="regulamin.html" target="_blank" class="hover_text">idealnego Ośrkodka Szkolenia Kierowców</a> - dowiedz się czy wybrany ośrodek spełnia ważne dla Ciebie kryteria.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-8 offset-xl-1 offset-md-0 p-0">
					<div class="search-box bg-white">
						<div class="content row mx-0">
							<div class="search-tab d-flex align-items-center tab-left col-9 col-xl-9 bg-custom-purple">
								<div class="col-md-4">
									<select id="city" onchange="changeSort(true)" class="browser-default custom-select select1">
										<option value='1' selected>miasto</option>
									</select>
								</div>
								<div class="col-md-5">
									<select id="category" onchange="changeSort(true)" class="browser-default custom-select select2">
										<option value='1' selected>kategoria kursu</option>
									</select>
								</div>
							</div>
							<div class="search-tab col-3 col-xl-3 d-flex align-items-center tab-right">
								<select id="starPrice" onchange="starPrice(this.value, true)" class="browser-default custom-select sort">
									<option value="s" selected>sortuj</option>
									<option value="0">ocena malejąco</option>
									<option value="2">ocena rosnąco</option>
									<option value="1">cena rosnąco</option>
									<option value="3">cena malejąco</option>

								</select>
							</div>
							<div id="search-list" class="search-list m-0 position-relative">


							</div>
							<div id="search-list-mobile" class="search-list m-0 position-relative">


							</div>
							<div class="cyferki d-flex c-back justify-content-center pb-5">
								<button onclick="activeC(-1)" class="search-arrows arrowLeft"></button>
								<div id="numerki" class="numerki d-flex align-items-center"></div>
								<button onclick="activeC(1)" class="search-arrows arrowRight"></button>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</section>


		<div class="leftImg  d-none d-md-block icon-left-position" >
				<img class="img-fluid" src="img/left1280.svg">
			</div>


		<section id="about" class="about container-fluid position-relative p-0 p-md-1">
			<!-- <div class="leftImg position-absolute d-none d-xl-block">
				<img class="img-fluid" src="img/left1280.svg">
			</div> -->


			<!-- <div class="row">
				<div class="col-9 col-xl-8 offset-3 offset-xl-4 px-0">
					<div class="about-content">
						<div class="heading pb-3">
							<h3>Kim jesteśmy?</h3>
						</div>
						<hr class="hr-margin-right hr-100">
						<div class="pt-3">
							<p>
								Jesteśmy portalem, który umożliwi Ci znalezienie idealnego ośrodka. Stworzyliśmy regulamin <a href="regulamin.html" target="_blank" class="hover_text">idealnego Ośrodka Szkolenia Kierowców</a> – szkołę nauki jazdy, która spełnia wszystkie standardy.
							</p>
							<p>
								Opracowaliśmy wzór idealnego ośrodka szkoleniowego. Na podstawie wytycznych, kursanci
								oceniają czy wybrana przez nich szkoła jazdy wpasowała się w kryteria.
							</p>
						</div>
					</div>
				</div>
			</div> -->



			<img src="img/about-content-mobile-img.svg" class="img-fluid d-block d-md-none">
		</section>






		<section class="join container-fluid px-0 px-xl-1">
			<div class="row">
				<div class="col-12 col-md-6 pl-0 pl-xl-1">
					<div class="col-9 col-xl-10 ml-auto ml-xl-0 px-0 px-xl-1 offset-md-2 offset-custom">
						<div class="heading pb-3">
							<h3>Chcesz dołączyć?</h3>
						</div>
						<hr class="hr-margin-left hr-join hr-100">
						<div class="join-left">
							<p>
								Organizacja Prawko Plus dąży do standaryzacji procesów szkolenia kierowców. Dołącz do
								nas w trzech prostych krokach i spraw, aby Twój ośrodek stał się rozpoznawalny.
							</p>
						</div>
					</div>
					<div class="d-none d-xl-block col-md-8 mb-5 mb-md-4">
						<img class="img-fluid" src="img/streetUp.svg">
					</div>
					<div class="d-none d-xl-block col-md-8 offset-md-2 pl-cus">
						<img class="img-fluid" src="img/streetDown.svg">
					</div>
					<div class="d-block d-xl-none col-12 col-md-8 offset-md-2 pl-cus">
						<img class="img-fluid" src="img/street-mobile.png">
					</div>
				</div>
				<div class="steps col-md-4 offset-md-2 px-xl-0">
					<div class="step d-flex">
						<div class="dot"></div>
						<div class="step-content">
							<h4>Krok 1</h4>
							<hr class="w-75 ml-0">
							<p>ROZPOZNANIE</p>
							<p class="f24">1. Odwiedź stronę <a href="#">Prawko Plus EXPERT</a>.
							</p>
						</div>
					</div>
					<div class="step d-flex">
						<div class="dot"></div>
						<div class="step-content">
							<h4>Krok 2</h4>
							<hr class="w-75 ml-0">
							<p>WYBÓR</p>
							<p class="f24">2. Wybierz spośród naszych ofert najlepszą dla siebie.
							</p>
						</div>
					</div>
					<div class="step d-flex">
						<div class="dot"></div>
						<div class="step-content">
							<h4>Krok 3</h4>
							<hr class="w-75 ml-0">
							<p>WSPÓŁPRACA</p>
							<p class="f24">3. Ciesz się nowymi klientami dla Tojego interesu.</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section id="contact" class="contact container-fluid px-0">
			<div class="row">
				<div class="col-9 col-md-4 offset-3 offset-md-1 pl-0 px-xl-0">
					<div class="heading pb-3">
						<h3>Odezwij się</h3>
					</div>
					<hr class="hr-margin-left hr-join hr-100">
					<div class="pt-5 mb-4 pt1700">
						<p class="f24">
							Skontaktuj się z nami i dowiedz się więcej.
						</p>
					</div>
					<div class="adress mb-4">
						<p class="f24 mb-1">Adres</p>
						<p class="f24">Na Załęczu 1D 30-716 Kraków </p>
					</div>
					<div class="telefon mb-4">
						<p class="f24 mb-1">Telefon</p>
						<p class="f24">Janusz Kowalski: 533-455-785</p>
					</div>
					<div class="email mb-4">
						<p class="f24 mb-1">Email</p>
						<p class="f24">janusz.kowalski@onet.pl </p>
					</div>
					<div class="sm col-8 col-xl-5 d-flex px-0 justify-content-between mt-4 pt-4">
						<a class="icon" href="#"><i class="fab fa-facebook-square text-white"></i></a>
						<a class="icon" href="#"><i class="fab fa-instagram text-white"></i></a>
						<a class="icon" href="#"><i class="fab fa-youtube text-white"></i></a>
					</div>
				</div>
				<div class="contact-form px-0 px-xl-1 col-md-5 offset-xl-2 c-back bg-white d-flex flex-column align-items-center">
					<h4 class="font-weight-bold mb-5">Formularz kontaktowy</h4>
					<form action="send_wiad.php" method="POST" class="d-flex flex-column align-items-end">
						<div class="form-group w-100">
							<input type="text" name="name" class="form-control" id="name" placeholder="Twoje imię">
						</div>
						<div class="form-group w-100">
							<input type="text" name="nazwisko" class="form-control" id="forname" placeholder="Twoje Nazwisko">
						</div>
						<div class="form-group w-100">
							<input type="email" name="email" class="form-control" id="email" placeholder="Twój email">
						</div>
						<div class="form-group pt-3 w-100">
							<textarea name="wiad" class="form-control p-4" id="message" placeholder="Wiadomość"></textarea>
						</div>
						<div class="form-group form-check w-75 mx-auto">
							<label class="form-check-label f20">
                                <input class="form-check-input" type="checkbox" required>
                                <span style="padding: 0 10px; display: block;">Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z <a href="regulamin.pdf" target="_blank" style="color: blue;">regulaminem</a></span>
                            </label>

						</div>
						<button type="submit" style="width:90%;" class="btn btn-primary btn-submicik mx-auto ">Wyślij</button>
					</form>
				</div>
			</div>
		</section>
	</div>

<?php
include $pageprefix.'include/all/footer.php';
?>