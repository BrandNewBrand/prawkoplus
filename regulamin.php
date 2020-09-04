<?php
session_start();
$pagetitle = '';
$pageprefix = '';


include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>






    <section class="content-background">
      <div   id="wrapper">
          <div class="container-fluid " >
                  <div class="text-white animate-hr">
                    <div class="row pt-5 px-4" style="display:block">
                      <a href="index.php" class="mb-2">wróć do wyboru kursów</a>

                      <hr class="small-hr ml-0 mt-0">
                  </div>

              </div>
              <div class="row position-fixed w-100 sticki-center">
                  <div class="col-xl-4">
                      <div class=" os-card">
                          <h2 style="color: #B40524; font-weight: 700;" class="text-center mb-4">Regulamin<br>doskonałego OSK</h2>
                          <ol style="font-size: 16px;" class="regulamin">
                              <li><a href="#wrapper">Prawa, warunki i obowiązki ośrodka</a></li>
                              <li><a href="#b">Przebieg szkolenia</a></li>
                              <li><a href="#c">Egzaminy wewnętrzne</a></li>
                              <li><a href="#d">Materiały szkoleniowe, badania lekarskie</a></li>
                              <li><a href="#e">Terminy zajęć</a></li>
                              <li><a href="#f">Obowiązki i prawa kursanta względem ośrodka</a></li>
                              <li><a href="#g">Warunki finansowe</a></li>
                          </ol>
                      </div>

                  </div>
              </div>
              <div class="row mt-4 justify-content-end">
                  <div class="col-xl-7  os-form ml-0 ml-xl-5" id="a">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Prawa, warunki i obowiązki ośrodka</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Ośrodek Szkolenia Kierowców posiada zezwolenia i prowadzi szkolenia kandydatów na kierowców kat. AM, A1, A2, A, B, C, D, B+E</li>
                              <li>Ośrodek Szkolenia kierowców jest zobowiązany do przeprowadzenia zajęć teoretycznych i praktycznych w określonym miejscu i czasie, w ilości ustalonej ustawą o szkoleniu kierowców.</li>
                              <li>Warunki uczestnictwa na kursie i program szkolenia poszczególnych kursów jest dostępny na stronie OSK.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7   os-form ml-0 ml-xl-5 mt-5" id="b">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Przebieg szkolenia</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Kursant ma możliwość wyboru formy nauki, jaką preferuje, posługując się wynikiem testu przedwstępnego. Pytania testowe są ogólnie dostępne na stronach OSK.</li>
                              <li>Godzina zajęć teoretycznych równa się 45 min, a praktycznych 60 min.</li>
                              <li>Zajęcia mogą być łączone, jednak lekcja nie może trwać dłużej niż 2 godziny.</li>
                              <li>Przerwy między lekcjami teoretycznymi winny wynosić minimum 5 minut.</li>
                              <li>Po zakończeniu lekcji praktycznej instruktor powinien przeznaczyć 5 minut na podsumowanie odbytej lekcji oraz na ustalenie kolejnego terminu spotkania.</li>
                              <li>Dopuszcza się obecność na lekcji praktycznej osoby trzeciej, jeśli kursant wskaże ją jako niezbędną do prawidłowego przebiegu lekcji. Osoba trzecia nie może utrudniać prowadzenia zajęć instruktorowi.</li>
                              <li>Instruktor ma prawo przerwać lekcję i poprosić osobę trzecią o opuszczenie pojazdu, nawet gdy skutkuje to zakończeniem szkolenia.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7  os-form ml-0 ml-xl-5 mt-5" id="c">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Egzaminy wewnętrzne</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Szkolenie podzielone jest na etapy. Każdy etap zakończony jest egzaminem wewnętrznym teoretycznym, jak i praktycznym.</li>
                              <li>Egzaminy wewnętrzne powinny być przeprowadzone w obecności instruktora lub wykładowcy i przez nich potwierdzone.</li>
                              <li>Rozpoczęcie kolejnego etapu szkolenia wymaga zaliczenia egzaminu z poprzedniego etapu nauki.</li>
                              <li>Egzamin teoretyczny lub praktyczny wewnętrzny (zaliczenia etapu nauki) powinien być udokumentowany lub utrwalony na życzenie kursanta</li>
                              <li>Pozytywne wyniki egzaminów wewnętrznych (zaliczenia) pozwalają na wydanie zaświadczenia o ukończeniu kursu. Następuje wtedy zaktualizowanie profilu kandydata na kierowcę „PKK” i przesłanie dokumentów do wybranego WORD.</li>
                              <li>Koszt egzaminu kończącego kurs jest wliczony w cenę kursu i odbywa się po zaliczeniu wszystkich zajęć teoretycznych i praktycznych.</li>
                              <li>Do egzaminu wewnętrznego można przystępować wielokrotnie, przy czym egzamin poprawkowy teoretyczny jest bezpłatny, natomiast poprawkowy wewnętrzny egzamin praktyczny jest płatny.</li>
                              <li>Opłata za taki egzamin wynosi równowartość 1 dodatkowej godziny szkolenia praktycznego dla danej kategorii prawa jazdy.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7  os-form ml-0 ml-xl-5 mt-5" id="d">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Materiały szkoleniowe, badania lekarskie</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Ośrodek zapewnia możliwość odbycia badań lekarskich oraz psychologicznych w ustalonym miejscu i czasie.</li>
                              <li>Ośrodek zapewnia nieodpłatnie dostępność materiałów szkoleniowych wirtualnych i papierowych, zajęcia z pierwszej pomocy przedlekarskiej z wykwalifikowanymi ratownikami medycznymi.</li>
                              <li>Kursant ma prawo ustalić termin darmowych konsultacji z wykładowcą, instruktorem nauki jazdy lub skorzystania z sali komputerowej wraz z niezbędnym oprogramowaniem potrzebnym do nauki przez cały okres trwania szkolenia.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7  os-form ml-0 ml-xl-5 mt-5" id="e">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Terminy zajęć</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Kursant jest zobowiązany do uczestnictwa w zajęciach teoretycznych i praktycznych zgodnie z dziennikiem zajęć. W przypadku zajęć z wykorzystaniem technik e-learningu uczestnik szkolenia może odbywać zajęcia teoretyczne poza OSK, co nie zwalnia uczestnika z uczestnictwa w ćwiczeniach i zajęciach z pierwszej pomocy przedlekarskiej</li>
                              <li>Zmiany terminu zajęć lub terminy egzaminów wewnętrznych, powinny być zgłaszane przynajmniej 3 dni robocze przed obowiązującą datą i zawierać potwierdzenie otrzymania nowej daty.</li>
                              <li>Niezgłoszenie się na umówioną lekcję lub zaliczenie, skutkuje obciążeniem kursanta kosztami tak jak za lekcję odbytą. Niezgłoszenie się na pierwszy termin egzaminu wewnętrznego uznaje się jako egzamin odbyty z wynikiem negatywnym.</li>
                              <li>Instruktor lub wykładowca, który nie zgłosił się na umówioną lekcję, powinien zapewnić dodatkową lekcję w dogodnym dla kursanta terminie.</li>
                              <li>Przypadki losowe usprawiedliwiające niestawienie się na lekcję mogą stanowić podstawę do zmian ww. postanowień. Decyzję podejmuje kierownictwo lub właściciel OSK.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7  os-form ml-0 ml-xl-5 mt-5" id="f">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Obowiązki i prawa kursanta wzgędem ośrodka</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>Kursant ma prawo do zmiany instruktora prowadzącego szkolenie. Prośbę taką kieruje do sekretariatu lub kierownictwa OSK. Nie ma obowiązku uzasadniania takiej prośby. OSK zobowiązane jest taką prośbę spełnić.</li>
                              <li>Kursant jest zobowiązany powiadomić kierownictwo OSK o wszelkich problemach związanych ze szkoleniem.</li>
                              <li>Przy braku reakcji kierownictwa OSK na uwagi o niewłaściwym postępowaniu kadry instruktorskiej, kursant powinien zawiadomić organ nadzorujący OSK o występujących nieprawidłowościach.</li>
                              <li>Kursant powinien znać adresy elektroniczne biura OSK i Urzędu Starosty do składania takich zawiadomień.</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-7  os-form ml-0 ml-xl-5 mt-5" id="g">
                      <div class="contact-form c-back side-form w-100 p-5">
                          <h4 class="font-weight-bold text-primary text-center f26">Warunki finansowe</h4>
                          <ol class="regulamin_body mt-4" type="a">
                              <li>OSK oferuje ratalną płatność za kurs. Warunki ustalone są w regulaminach kursu konkretnego OSK.</li>
                              <li>Wszelkie płatności musza być uregulowane przed terminem egzaminu wewnętrznego końcowego.</li>
                              <li>Płatności częściowe powinny być odpowiednio opisane (wymagany jest zapis informujący o tym jaki kurs jest opłacany i przez kogo) i potwierdzane, a za odbyte szkolenie wystawiony dokument księgowy.</li>
                              <li>Wpłacenie przez kursanta pierwszej raty jest równoznaczne z potwierdzeniem zapoznania się Kursanta z regulaminem OSK i warunkami prowadzenia zajęć, na które się zapisał.</li>
                              <li>Kursant ma prawo do odstąpienia od umowy w każdym momencie. Odstąpienie po 14 dniach powinno złożone zostać w formie pisemnej i za potwierdzeniem odbioru rezygnacji.</li>
                              <li>Niedotrzymanie tego warunku zwalnia OSK z obowiązku zwrotu niewykorzystanych środków za kurs i pozwala naliczyć opłaty jak za uczestnictwo na zajęciach. Uznaje się wtedy, że nieobecność Kursanta na zajęciach jest nieusprawiedliwiona.</li>
                              <li>Przerwanie szkolenia i odstąpienie od umowy, nie zwalnia kursanta z uiszczenia opłaty za odbyte szkolenie oraz za badania lekarskie.</li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>


<?php include $pageprefix.'include/all/footer.php'; ?>
