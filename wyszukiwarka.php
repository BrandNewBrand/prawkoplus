<?php
session_start();
$pagetitle = '';
$pageprefix = '';


require_once "backend/connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);



if (isset($_POST['city'])) {
  $city = $_POST['city'];
  $kat = $_POST['cat'].' ';
  if (!isset($_POST['pp'])) {
    $pp = '0';
  } else {
    $pp = '1';
  }
} else {
  $city = '%';
  $kat = '%';
  $pp = '0';
}

if (isset($_POST['sort'])) {
  if ($_POST['sort'] == '0') {
    $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus = '$pp' ORDER BY RAND()");
  } else {
    if ($_POST['sort'] == 'desc') {
      $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus = '$pp' ORDER BY rating DESC");
    } else if ($_POST['sort'] == 'asc') {
      $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus = '$pp' ORDER BY rating ASC");
    }
  }
} else {
  $_POST['sort'] = '0';
  $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus = '$pp' ORDER BY RAND()");
}

$ile = mysqli_num_rows($rez);



$rez_city=$polaczenie->query("SELECT DISTINCT city FROM osk GROUP BY city");
$ile_city = mysqli_num_rows($rez_city);

for ($i=0; $i < $ile_city; $i++) { 
  $tbl_city=$rez_city->fetch_assoc();
  $miasta[$i] = $tbl_city['city'];
}




include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>
<div id="wrapper">
  
  <div class="container-fluid">
    <div class="row pt-5 mx-0 pl-2">
      <div class="col-md-7">
        <div class="animate-hr">
          <a href="index.php#search" class="mb-2 back-header">Wróć do strony głównej</a>
          <hr class="small-hr ml-0 mt-0">
        </div>
        <p style="color:white">Oszczędź swój czas i wybierz sprawdzoną przez naszych kursantów szkołę nauki jazdy.</p>
      </div>
    </div>
    <form class="mx-auto"  style="width:95%" action="wyszukiwarka.php" method="POST">
      <div class="row bg-search-purple ofe-row-margin  d-flex align-items-center text-center "  style="border-radius:27px; ">
        <div class="col-lg-10  search-box  my-auto  " >
          <div class="row content-row" >
            <div class="col-md-3  search-tab d-flex align-items-center tab-left mx-auto">
              <select name="city"  class="browser-default custom-select  search-bar-text-1">
                <option class="" value="%" <?php if ($city == '%') {echo 'selected';} ?>>miasto</option>
                <?php 
                for ($i=0; $i < $ile_city; $i++) { 
                  if ($city == $miasta[$i]) {$selected = 'selected';} else {$selected = '';}
                  echo '<option class="" value="'.$miasta[$i].'" '.$selected.'>'.$miasta[$i].'</option>';
                }
                 ?>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <select name="cat" class="browser-default custom-select search-bar-text-1" placeholder="Kategoria">
                <option  value="%" <?php if ($kat == '%') {echo 'selected';} ?>>kategoria</option>
                <option  value="AM" <?php if ($kat == 'AM') {echo 'selected';} ?>>AM</option>
                <option  value="A1" <?php if ($kat == 'A1') {echo 'selected';} ?>>A1</option>
                <option  value="A2" <?php if ($kat == 'A1') {echo 'selected';} ?>>A2</option>
                <option  value="A" <?php if ($kat == 'A') {echo 'selected';} ?>>A</option>
                <option  value="B1" <?php if ($kat == 'B1') {echo 'selected';} ?>>B1</option>
                <option  value="B" <?php if ($kat == 'B') {echo 'selected';} ?>>B</option>
                <option  value="C1" <?php if ($kat == 'C1') {echo 'selected';} ?>>C1</option>
                <option  value="C" <?php if ($kat == 'C') {echo 'selected';} ?>>C</option>
                <option  value="D1" <?php if ($kat == 'D1') {echo 'selected';} ?>>D1</option>
                <option  value="D" <?php if ($kat == 'D') {echo 'selected';} ?>>D</option>
                <option  value="BE" <?php if ($kat == 'BE') {echo 'selected';} ?>>BE</option>
                <option  value="C1E" <?php if ($kat == 'C1E') {echo 'selected';} ?>>C1E</option>
                <option  value="CE" <?php if ($kat == 'CE') {echo 'selected';} ?>>CE</option>
                <option  value="D1E" <?php if ($kat == 'D1E') {echo 'selected';} ?>>D1E</option>
                <option  value="DE" <?php if ($kat == 'DE') {echo 'selected';} ?>>DE</option>
                <option  value="T" <?php if ($kat == 'T') {echo 'selected';} ?>>T</option>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto " >
              <select name="sort" class="browser-default custom-select  ">
                <option value="0" <?php if ($_POST['sort'] == '0') {echo 'selected';} ?>>sortuj</option>
                <option value="desc" <?php if ($_POST['sort'] == 'desc') {echo 'selected';} ?>>ocena malejąco</option>
                <option value="asc" <?php if ($_POST['sort'] == 'asc') {echo 'selected';} ?>>ocena rosnąco</option>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <div class="round ">
                <input type="checkbox" id="checkbox" name="pp" value="tak" <?php if (isset($_POST['pp'])) {echo "checked";} ?>>
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
    <div class="row m-0 mt-4 d-flex flex-column align-items-center bg-white pt-5 pb-5 osk_search_panel">
<?php 

if ($ile > 0) {


  for ($i=0; $i < $ile; $i++) { 
    $row=$rez->fetch_assoc();
    if ($row["description"] != '0') {
      if (strlen($row["description"]) > 200) {
        $row["description"] = substr($row["description"], 0, 200).'...';
      }
    } else {
      $row["description"] = 'Ośrodek nie zgłosił się do programu Prawko Plus.';
    }
    // $rating = round(($row['rating1']+$row['rating2']+$row['rating3']+$row['rating4']+$row['rating5'])/5);
    $rating = $row['rating'];
    

    echo '<div class="item_search">
          <div class="osk-card w-100 row align-items-center justify-content-between">
            <div class="img col-sm-2 h-100 p-0" style="background-image: url(img/kolo.png); background-size: contain; background-position: center; background-repeat: no-repeat; min-height: 240px; margin-top: 5px; margin-bottom: 5px;">
            </div>
            <div class="desc col-sm-7">
              <h4><b>'.$row["name"].'</b></h4>
              <hr class="bg-black mt-0">
              <p class="opis-kr">
                '.$row["description"].'
              </p>
              <div class="d-flex">
                <div class="ocena"><p>Ocena: <b>'.$rating.'</b></p></div>
              </div>
            </div>
            <div class="szczegoly col-sm-3">
              <p><b>'.$row["category"].'</b></p>
              <p>'.$row["street"].'<br>
              '.$row["city"].'</p>
              <a href="#"><button class="btn-primary">Szczegóły</button></a>
            </div>
          </div>
          <div class="osk-card-media w-100 row align-items-center justify-content-between">
            <div class="img col-5 h-100 p-0 ml-2" style="background-image: url(img/kolo.png); background-size: contain; background-position: center; background-repeat: no-repeat; min-height: 200px; margin-top: 5px; margin-bottom: 5px;">
            </div>
            <div class="szczegoly col-6">
              <p><b>'.$row["category"].'</b></p>
              <p>'.$row["street"].'<br>
              '.$row["city"].'</p>
              <a href="#"><button class="btn-primary">Szczegóły</button></a>
            </div>
            <div class="desc col-12 mt-4 d-flex flex-column align-items-center">
              <h4 class="w-100"><b>'.$row["name"].'</b></h4>
              <hr class="bg-black">
              <p class="opis-kr">
                ksdjhfsdkljghsdkfjhsdlkfjghsdkjlhsd jkfsdhlkjfh sdf klsdjh flksdjh flkjsd hf lkjsdhflk jflhs kjsdhf lkjsdhf kljshdlk jfhsdlkj hfh lksdjh flksdjh flkjsdh flkjsdhflk hjsdlkfj..
              </p>
              <div class="d-flex w-100">
                <div class="ocena"><p>Ocena: <b>'.$rating.'</b></p></div>
              </div>
            </div>
          </div>
        </div>';
  }
} else {
  echo "<h1>Brak wyników o podanych parametrach</h1>";
}
$polaczenie->close();

 ?>



    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>