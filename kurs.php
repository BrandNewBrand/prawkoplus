<?php
session_start();
if (!isset($_SESSION['error'])) {
  $_SESSION['error'] = '';
}


$id=$_GET['id'];

require_once "backend/connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');


$rez=$polaczenie->query("SELECT * FROM osk WHERE id='$id'");
$row=$rez->fetch_assoc();
if ($row["img"] != '0') {
    $img = $row["img"];
} else {
    $img = 'img/kolo.png';
}

if ($_SESSION['zalogowany'] > 0) {
    $user_id = $_SESSION['zalogowany'];
    $rez2=$polaczenie->query("SELECT * FROM users WHERE id='$user_id'");
    $row2=$rez2->fetch_assoc();

}

$pagetitle = $row['name'];
$pageprefix = '';
include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>



 <div id="wrapper">

        <div class="container-fluid">
            <div class="row pt-5 mx-0 pl-2">
                <div class="text-white animate-hr">
                    <a href="wyszukiwarka.php" class="mb-2  back-header">wróc do wyboru kursów</a>
                    

                    <hr class="small-hr ml-0 mt-0">
                </div>
            </div>
            <div class="row m-0 justify-content-between">

                <div class="col-xl-7 text-center  os-card mt-4">
                    <div id="os-card-header" class="rowos-card-header kurs-card-header">

                      <div class="img col-md-4">
                        <img src="<?php echo $img; ?>" style="" alt="">

                      </div>

                      <div class="descript mt-2 col-md-7">
                        <h4><?php echo $row['name']; ?></h4>
                        <p>kategorie kursów: <b><?php echo $row['category']; ?></b></p>
                        <p><?php echo $row['street']; ?><br><?php echo $row['city']; ?></p>

                        <div class="rating_kurs d-flex justify-content-between align-items-center">
                            <p  class="mb-1 mt-2">Ocena: <b><?php if ($row['rating'] > 0) {echo $row['rating'];} else {echo 'brak';}  ?></b></p>
                            <div class="stars_kurs">
                                <?php 
                                for ($i=1; $i <= $row['rating']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?>
                            </div>
                        </div>
                            

                      </div>


                    </div>
                    <hr class="bg-black mx-auto">
                    <div id="os-description" class="row m-0 px-md-5 text-left px-3">
                        <?php 
                      if (strlen($row["description"]) > 2) {
                            echo $row['description']; 
                        } else {
                            echo 'Ośrodek nie zgłosił się do programu Prawko Plus.';
                        }
                      ?>
                      
                    </div>
                    <hr class="bg-black mx-auto">
                    <div id="os-ratings" class="mt-4 row px-md-5">
                        <div class="col-md-6">
                            <div class="d-flex flex-column align-items-start mb-3">
                                <?php if ($row['rating1']>0) {
                                    echo '<p class="mb-0 text-left">Zaangażowanie instruktora:</p>';
                                } ?>
                                <div>
                                   <?php 
                                for ($i=1; $i <= $row['rating1']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?> 
                                </div>
                                
                            </div>
                            <div class="d-flex flex-column align-items-start mb-3">
                                <?php if ($row['rating2']>0) {
                                    echo '<p class="mb-0 text-left">Zaangażowanie ośrodka:</p>';
                                } ?>
                                <div>
                                   <?php 
                                for ($i=1; $i <= $row['rating2']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?> 
                                </div>
                                
                            </div>
                            <div class="d-flex flex-column align-items-start mb-3">
                                <?php if ($row['rating3']>0) {
                                    echo '<p class="mb-0 text-left">Stan samochodów szkoleniowych:</p>';
                                } ?>
                                <div>
                                   <?php 
                                for ($i=1; $i <= $row['rating3']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?> 
                                </div>
                                
                            </div>


                        </div>  
                        <div class="col-md-6">
                            <div class="d-flex flex-column align-items-start mb-3">
                                <?php if ($row['rating4']>0) {
                                    echo '<p class="mb-0 text-left">Efekt szkolenia:</p>';
                                } ?>
                                <div>
                                   <?php 
                                for ($i=1; $i <= $row['rating4']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?> 
                                </div>
                                
                            </div>
                            <div class="d-flex flex-column align-items-start mb-3">
                                <?php if ($row['rating5']>0) {
                                    echo '<p class="mb-0 text-left">Profesjonalizm instruktora:</p>';
                                } ?>
                                <div>
                                   <?php 
                                for ($i=1; $i <= $row['rating5']; $i++) { 
                                    echo '<img src="img/star.png">';
                                }
                                 ?> 
                                </div>
                                
                            </div>


                        </div>


                    </div>
                </div>

                <div class="col-xl-4  os-form d-flex align-items-center justify-content-center py-4 mt-4">
                    <div class="contact-form c-back side-form">
                        <h4 class="font-weight-bold text-center">Zapisz się na kurs już teraz!</h4>
                        <p id="form-text" class="text-center pt-4">Wyślij zgłoszenie na kurs prawa jazdy do OSK: <?php echo $row['name']; ?></p>
                        <div class="error-box text-center text-error mt-4"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                        <form class="pt-4 d-flex flex-column align-items-end" action="send_zapis.php" method="POST">
                            <div id="mail_osk">
                                <input type="text" name="osk" hidden value="<?php echo $row['email']; ?>">
                                <input type="text" name="osk_id" hidden value="<?php echo $row['osk_id']; ?>">

                            </div>
                            <div class="form-group w-100">
                                <input type="text"  name="name" class="form-control w-100" id="name" placeholder="Twoje imię" required <?php if (isset($user_id)) {echo 'hidden value="'.$row2['imie'].'"';} ?>>
                            </div>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="text"  name="nazwisko" class="form-control w-100" id="forname" placeholder="Twoje Nazwisko" required <?php if (isset($user_id)) {echo 'hidden value="'.$row2['nazwisko'].'"';} ?>>
                            </div>
                            <?php if (isset($user_id)) {echo '<h4>Jesteś zalogowany jako '.$row2['imie'].' '.$row2['nazwisko'].'</h4>';} ?>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="email"  name="poczta" class="form-control w-100" id="poczta" placeholder="Twój email" required <?php if (isset($user_id)) {echo 'hidden value="'.$row2['email'].'"';} ?>>
                            </div>
                            <div class="form-group pt-2 pt-xl-3 w-100">
                                <input type="tel"  name="tel" class="form-control w-100" id="tel" placeholder="Twój numer telefonu" <?php if (isset($user_id)) {echo 'hidden value="'.$row2['tel'].'"';} ?>>
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
