<?php
session_start();
if (!isset($_SESSION['error'])) {
  $_SESSION['error'] = '';
}
if ($_SESSION['zalogowany'] == 0) {
  header('Location: '.$pageprefix.'logowanie.php');
  exit();
} else {

  if ($_SESSION['osk_owner_status'] == 0) {
    header('Location: '.$pageprefix.'twoj-profil.php');
    exit();
  } else {

    $id_osk = $_GET['id_osk'];
    require_once "backend/connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie->query('SET NAMES utf8');
    $polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');
    $rez=$polaczenie->query("SELECT * FROM osk WHERE osk_id='$id_osk'");
    $ile_test = mysqli_num_rows($rez);
    if ($ile_test != 1) {
      $rez=$polaczenie->query("INSERT INTO osk VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', '0', '0', '0', '$id_osk', '0', '0')");
      header('Location: profil-osk-edycja.php?id_osk='.$id_osk);
      $polaczenie->close();
      exit();
    }
    $row=$rez->fetch_assoc();
    $name = $row['name'];
    if (strlen($row['img']) > 10) {
      $img = $row['img'];
    } else {
      $img = $_SESSION['domena'].'/img/kolo.png';
    }
  }
}

$pagetitle = 'Profil OSK: '.$name;
$pageprefix = '';
include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>
<div id="wrapper">
  <div class="container-fluid">
    <div class="row pt-5 mx-0 pl-2">
      <div class="col">
        <div class="animate-hr">
          <a href="index.php" class="mb-2 back-header">wróć do strony głównej</a>
          <hr class="small-hr ml-0 mt-0">
        </div>
      </div>
    </div>


    <div class="row m-0 os-card mt-4">


      <div class="col-12 ">
        <h1 class="grey-header " >profil OSK: <?php echo $name; ?></h1>
        <hr style="border-color:#AEAEAE;margin-top:0; width:60%; margin-left:0;">
        <div class="error-box text-left text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
      </div>


        <div class="col-lg-4 order-lg-2 d-flex flex-column" >

          <div class="osk-photo">
            <img src="<?php echo $img; ?>" alt="logo">
          </div>
          <div class="d-flex flex-column align-items-center mt-4">
            <img src="img/logo-pp.png" height="70px;" class="mb-4">
            <p class="mb-4" >W celu bliższego zapoznania się z naszą kampanią edukacji motorowej w polsce. odwiedź naszą stronę Prawko Plus Expert.</p>
            <a href="http://bnb-project.pl/expert" target="_blank"><button class="btn-secondary-bnb_expert text-center text-white">Prawko Plus Expert</button></a>
          </div>



        </div>

        <div class="col-lg-8 order-lg-1 osk-form-lebel" >


            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class=" form-label">Nazwa OSK:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $name; ?></p>
                </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">Ulica:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $row['street']; ?></p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">Miasto:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $row['city']; ?></p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">Numer telefonu:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $row['tel']; ?></p>
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">Strona internetowa</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $row['website']; ?></p>
              </div>



            </div>
            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">Adres e-mail</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $row['email']; ?></p>
              </div>



            </div>


            <div class="row pt-3">
              <div class="col-lg-4  offset-1 offset-lg-2 pt-lg-3" >
                <p class="form-label">numer ID:</p>
              </div>
              <div class="col-lg-5     form-group offset-1 offset-lg-0 col-10">
                <p class="dane"><?php echo $id_osk; ?></p>
              </div>

            </div>




        </div>


        <div class="col  order-3 osk-form-lebel" >

            <div class="row pt-3 ">
              <div class="col-lg-2  offset-1 pt-3 " >
                <p class=" form-label">opis:</p>
              </div>
              <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                <p class="dane text-left"><?php echo $row['description']; ?></p>

              </div>

            </div>
            <?php 
            $kat = $row['category'];
            $kat_single = explode(" ", $kat);
            $liczba_kat = count($kat_single)-1;
             ?>
            <div class="col-lg-6 offset-lg-3 offset-1">
              <?php 
              for ($i=0; $i < $liczba_kat; $i++) { 
                echo '<label class="mr-3" for="">
                <input type="checkbox" checked disabled>
                <span>'.$kat_single[$i].'</span>
              </label>';
              }
               ?>
            </div>



            <div class="text-center osk-btn mt-2">

              <a href="profil-osk-edycja.php?id_osk=<?php echo $id_osk; ?>"><button type="submit" class="btn btn-primary btn-submicik">edycja</button></a>

            </div>




        </div>

        <div class="col-12 order-4 section-grey-pp  " >

          <hr style="border:#C8C8C8 1px solid; width:80%;">

          <div class="pt-3">
            <p class="text-center link_text">Zapoznaj się z <a href="#">regulaminem</a> programu partnerskiego Prawko Plus dla OSK, a następnie wyślij zgłoszenie. W ciągu pięciu dni roboczych skontaktuje się z Tobą nasz ekspert celem uzgodnienia warunków współpracy.</p>
              <form method="POST" action="backend/dolaczenie-do-programu.php?id_osk=<?php echo $id_osk; ?>&user_id=<?php echo $_SESSION['zalogowany']; ?>">
                <?php 
                $prawkoplus = $row['prawkoplus'];
                if ($prawkoplus != 1) {
                  echo '<label class="d-flex align-items-center">
                  <input type="checkbox" name="regulamin_pp" required class="mr-3">
                  <p class="mb-0 link_text">Akceptuje <a href="#">regulamin</a> programy partnerskiego Prawko Plus</p>
                </label>
                <div class="text-center osk-btn-2 ">
                  <button type="submit" class="btn btn-primary btn-submicik">dołacz do prawka plus</button>
                </div>';
                }
                ?>
                
              </form>
              

          </div>







        </div>





    </div>
  </div>
</div>
<?php 
$polaczenie->close();
include $pageprefix.'include/all/footer.php'; 
?>
