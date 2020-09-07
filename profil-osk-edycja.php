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
    $row=$rez->fetch_assoc();
    $name = $row['name'];
    if (strlen($row['img']) > 10) {
      $img = $row['img'];
    } else {
      $img = $_SESSION['domena'].'/img/kolo.png';
    }
  }
}

$pagetitle = '';
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
        <h3 class="grey-header " >profil OSK: <?php echo $name; ?> - Edycja</h3>
        <hr style="border-color:#AEAEAE;margin-top:0; width:60%; margin-left:0;">
        <div class="error-box text-left text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
      </div>


        <div class="col-lg-4 order-lg-2 d-flex flex-column" >

          <div class="osk-photo">
            <img src="<?php echo $img; ?>" alt="">
          </div>


          <form enctype="multipart/form-data" action="backend/edycja_osk.php?id_osk=<?php echo $id_osk; ?>" method="post">
            <div class="text-center osk-btn">
              <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
              <label for="bb">  <div style="background-color:#6D0B44"  type="submit" class="btn btn-primary btn-submicik">dodaj zdjęcie</div>
                <input type="file" id="bb" name="img" hidden>
              </label>
            </div>


        </div>

        <div class="col-lg-8 order-lg-1 osk-form-lebel" >


            <div class="row pt-3 ">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class=" form-label">Nazwa OSK:</p>
              </div>
              <div class="col-lg-7     form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="name" class="form-control w-100  text-center" id="name" placeholder="" required value="<?php echo $name; ?>">
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">Ulica:</p>
              </div>
              <div class="col-lg-7     form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="street" class="form-control w-100  text-center" id="forname" placeholder="" required value="<?php echo $row['street']; ?>">
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class="form-label">Miasto:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="city" class="form-control w-100  text-center" id="name-osk" placeholder="" required value="<?php echo $row['city']; ?>">
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3 " >
                <p class="form-label">Numer telefonu:</p>
              </div>
              <div class="col-lg-7    form-group offset-1 offset-lg-0 col-10">
                <input type="number"  name="tel" class="form-control w-100  text-center  " id="miasto" placeholder="" required value="<?php echo $row['tel']; ?>">
              </div>

            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">Strona internetowa:</p>
              </div>
              <div class="col-lg-7   form-group offset-1 offset-lg-0 col-10">
                <input type="text"  name="website" class="form-control w-100  text-center" placeholder="" id="add" required value="<?php echo $row['website']; ?>">
              </div>



            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">Adres e-mail:</p>
              </div>
              <div class="col-lg-7   form-group offset-1 offset-lg-0 col-10">
                <input type="email"  name="email" class="form-control w-100  text-center" placeholder="" id="add" required value="<?php echo $row['email']; ?>">
              </div>



            </div>

            <div class="row pt-3">
              <div class="col-lg-4  offset-1 pt-lg-3" >
                <p class="form-label">Numer ID:</p>
              </div>
              <div class="col-lg-7   form-group offset-1 offset-lg-0 col-10">
                <input type="number"  name="osk_id" class="form-control w-100  text-center" placeholder="" id="add" required value="<?php echo $row['osk_id']; ?>" disabled>
              </div>



            </div>

            





            <div class="row pt-3">
              <div class="col-lg-4 offset-lg-4 offset-1 col-10">







              </div>

            </div>


        </div>


        <div class="col  order-3 osk-form-lebel" >

            <div class="row pt-3 ">
              <div class="col-lg-2  offset-1 pt-3 " >
                <p class=" form-label">opis:</p>
              </div>
              <div class="col-lg-6   form-group offset-1 offset-lg-0 col-10">
                <textarea class="form-control w-100" name="description" rows="8" cols="80"><?php echo $row['description']; ?></textarea>
              </div>

            </div>


            <?php 

            $kat = $row['category'];
            $kat_single = explode(" ", $kat);
            $liczba_kat = count($kat_single)-1;

            $kategorie_tbl = $_SESSION['category_tbl'];
            $liczba_kat_tbl = count($kategorie_tbl);
             ?>
            <div class="col-lg-6 offset-lg-3 offset-1">
              <?php 
              for ($i=0; $i < $liczba_kat_tbl; $i++) {
                if (in_array($kategorie_tbl[$i], $kat_single)) {
                  $check = 'checked';
                 } else {
                  $check = '';
                 }
                echo '<label class="mr-3 mt-2 w-const_cat">
                <input type="checkbox" '.$check.' name="k'.$i.'" value="'.$kategorie_tbl[$i].' ">
                <p>'.$kategorie_tbl[$i].'</p>
              </label>';
              }
               ?>
            </div>



            <div class="text-center  osk-btn mt-2">
              <a href="profil-osk.php" class="osk-btn">
                <button type="submit" class="btn btn-primary btn-submicik">zapisz</button>
                </a>
            </div>


          </form>
        </div>





    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>
