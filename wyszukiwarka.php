<?php
session_start();
$pagetitle = 'Wyszukiwarka';
$pageprefix = '';


require_once "backend/connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');





if (isset($_GET['city'])) {
  $city = $_GET['city'];
  $kat = $_GET['cat'].' ';
  if (!isset($_GET['pp'])) {
    $pp = '%';
    $_SESSION['pp_search'] = $pp;
  } else {
    $pp = '1';
    $_SESSION['pp_search'] = $pp;
  }
} else {
  $city = '%';
  $kat = '%';
  if (isset($_SESSION['pp_search'])) {
    $pp = $_SESSION['pp_search'];
  } else {
    $pp = '%';
  }
  
}


if (isset($_GET['city'])) {
  $_SESSION['city_search'] = $city;
} else {
  $city = $_SESSION['city_search'];
}

if (isset($_GET['cat'])) {
  $_SESSION['kat_search'] = $kat;
} else {
  $kat = $_SESSION['kat_search'];
}

if (!isset($_GET['sort'])) {
  if (isset($_SESSION['sort_search'])) {
    $_GET['sort'] = $_SESSION['sort_search'];
  } else {
    $_GET['sort'] = '0';
  }
} else {
  $_SESSION['sort_search'] = $_GET['sort'];
}



if (isset($_GET['sort'])) {
  if ($_GET['sort'] == '0') {
    $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus LIKE '$pp' ORDER BY RAND()");
  } else {
    if ($_GET['sort'] == 'desc') {
      $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus LIKE '$pp' ORDER BY rating DESC");
    } else if ($_GET['sort'] == 'asc') {
      $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus LIKE '$pp' ORDER BY rating ASC");
    }
  }
} else {
  $_GET['sort'] = '0';
  $rez=$polaczenie->query("SELECT * FROM osk WHERE city LIKE '$city' AND category LIKE '%$kat%' AND prawkoplus LIKE '$pp' ORDER BY RAND()");
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
          <a href="index.php" class="mb-2 back-header">Wróć do strony głównej</a>
          <hr class="small-hr ml-0 mt-0">
        </div>
        <p style="color:white">Oszczędź swój czas i wybierz sprawdzoną przez naszych kursantów szkołę nauki jazdy.</p>
      </div>
    </div>
    <form class="mx-auto"  style="width:95%" action="wyszukiwarka.php" method="GET">
      <div class="row bg-search-purple ofe-row-margin  d-flex align-items-center text-center "  style="border-radius:27px; ">
        <div class="col-lg-10  search-box  my-auto  " >
          <div class="row content-row" >
            <div class="col-md-3  search-tab d-flex align-items-center tab-left mx-auto">
              <select name="city"  class="browser-default custom-select  search-bar-text-1">
                <option class="" value="%" <?php if ($city == '%') {echo 'selected';} ?>>miasto</option>
                <?php 
                for ($i=0; $i < $ile_city; $i++) { 
                  if ($_SESSION['city_search'] == $miasta[$i]) {$selected = 'selected';} else {$selected = '';}
                  echo '<option class="" value="'.$miasta[$i].'" '.$selected.'>'.$miasta[$i].'</option>';
                }
                 ?>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <select name="cat" class="browser-default custom-select search-bar-text-1" placeholder="Kategoria">
                <option  value="%" <?php if ($_SESSION['kat_search'] == '%') {echo 'selected';} ?>>kategoria</option>
                <option  value="AM" <?php if ($_SESSION['kat_search'] == 'AM ') {echo 'selected';} ?>>AM</option>
                <option  value="A1" <?php if ($_SESSION['kat_search'] == 'A1 ') {echo 'selected';} ?>>A1</option>
                <option  value="A2" <?php if ($_SESSION['kat_search'] == 'A2 ') {echo 'selected';} ?>>A2</option>
                <option  value="A" <?php if ($_SESSION['kat_search'] == 'A ') {echo 'selected';} ?>>A</option>
                <option  value="B1" <?php if ($_SESSION['kat_search'] == 'B1 ') {echo 'selected';} ?>>B1</option>
                <option  value="B" <?php if ($_SESSION['kat_search'] == 'B ') {echo 'selected';} ?>>B</option>
                <option  value="C1" <?php if ($_SESSION['kat_search'] == 'C1 ') {echo 'selected';} ?>>C1</option>
                <option  value="C" <?php if ($_SESSION['kat_search'] == 'C ') {echo 'selected';} ?>>C</option>
                <option  value="D1" <?php if ($_SESSION['kat_search'] == 'D1 ') {echo 'selected';} ?>>D1</option>
                <option  value="D" <?php if ($_SESSION['kat_search'] == 'D ') {echo 'selected';} ?>>D</option>
                <option  value="BE" <?php if ($_SESSION['kat_search'] == 'BE ') {echo 'selected';} ?>>BE</option>
                <option  value="C1E" <?php if ($_SESSION['kat_search'] == 'C1E ') {echo 'selected';} ?>>C1E</option>
                <option  value="CE" <?php if ($_SESSION['kat_search'] == 'CE ') {echo 'selected';} ?>>CE</option>
                <option  value="D1E" <?php if ($_SESSION['kat_search'] == 'D1E ') {echo 'selected';} ?>>D1E</option>
                <option  value="DE" <?php if ($_SESSION['kat_search'] == 'DE ') {echo 'selected';} ?>>DE</option>
                <option  value="T" <?php if ($_SESSION['kat_search'] == 'T ') {echo 'selected';} ?>>T</option>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto " >
              <select name="sort" class="browser-default custom-select  ">
                <option value="0" <?php if ($_SESSION['sort_search'] == '0') {echo 'selected';} ?>>sortuj</option>
                <option value="desc" <?php if ($_SESSION['sort_search'] == 'desc') {echo 'selected';} ?>>ocena malejąco</option>
                <option value="asc" <?php if ($_SESSION['sort_search'] == 'asc') {echo 'selected';} ?>>ocena rosnąco</option>
              </select>
            </div>
            <div class="col-md-3 search-tab d-flex align-items-center tab-left mx-auto" >
              <div class="round ">
                <input type="checkbox" id="checkbox" name="pp" value="1" <?php if ($_SESSION['pp_search'] == '1') {echo "checked";} ?>>
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
  if (isset($_GET['aktywna_strona'])) {
    $akt_str = $_GET['aktywna_strona'];
  } else {
    $akt_str = 0;
  }

$liczba_stron = ceil($ile/8);

if ($akt_str == $liczba_stron-1) {
  $numb_rec = $ile-($akt_str*8);
} else {
  $numb_rec = 8;
}

  for ($j=1; $j <= $akt_str*8; $j++) { 
    $row=$rez->fetch_assoc();
  }
  for ($i=1; $i <= $numb_rec; $i++) { 
    $row=$rez->fetch_assoc();
    if ($row["description"] != '0') {
      $kr_opis_tbl = explode("<br />", $row["description"]);

      $kr_opis = $kr_opis_tbl[0].'<br>'.$kr_opis_tbl[1];

      if (strlen($kr_opis) > 200) {
        $kr_opis = substr($kr_opis, 0, 200).'...';
      }
    } else {
      $kr_opis = 'Ośrodek nie zgłosił się do programu Prawko Plus.';
    }
    if ($row["img"] != '0') {
      $img = $row["img"];
    } else {
      $img = 'img/kolo.png';
    }
    
    if ($row['rating'] > 0) {$rating = $row['rating'];} else {$rating = 'brak';}
    

    echo '<div class="item_search">
          <div class="osk-card w-100 row align-items-center justify-content-between">
            <div class="img col-sm-2 h-100 p-0 ml-2" style="background-image: url('.$img.'); background-size: contain; background-position: center; background-repeat: no-repeat; min-height: 240px; margin-top: 5px; margin-bottom: 5px; border-radius: 10px;">
            </div>
            <div class="desc col-md-6">
              <h4><b>'.$row["name"].'</b></h4>
              <hr class="bg-black mt-0">
              <p class="opis-kr">
                '.$kr_opis.'
              </p>
              <div class="d-flex">
                <div class="ocena"><p>Ocena: <b>'.$rating.'</b></p></div>
              </div>
            </div>
            <div class="szczegoly col-xl-2 col-md-3">
              <p><b>'.$row["category"].'</b></p>
              <p>'.$row["street"].'<br>
              '.$row["city"].'</p>
              <a href="kurs.php?id='.$row['id'].'"><button class="btn-primary">Szczegóły</button></a>
            </div>
          </div>
          <div class="osk-card-media w-100 row align-items-center justify-content-between">
            <div class="img col-5 h-100 p-0 ml-2" style="background-image: url('.$img.'); background-size: contain;  border-radius: 10px; background-position: center; background-repeat: no-repeat; min-height: 200px; margin-top: 5px; margin-bottom: 5px;">
            </div>
            <div class="szczegoly col-6">
              <p><b>'.$row["category"].'</b></p>
              <p>'.$row["street"].'<br>
              '.$row["city"].'</p>
              <a href="kurs.php?id='.$row['id'].'"><button class="btn-primary">Szczegóły</button></a>
            </div>
            <div class="desc col-12 mt-4 d-flex flex-column align-items-center">
              <h4 class="w-100"><b>'.$row["name"].'</b></h4>
              <hr class="bg-black">
              <p class="opis-kr">
                '.$kr_opis.'
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

$next = $akt_str+1;
$prev = $akt_str-1;
echo '<p>';
echo '<a href="wyszukiwarka.php?aktywna_strona='.$prev.'" style="color: #000;"><</a> ';
for ($k=0; $k < $liczba_stron; $k++) { 
  $nr_str = $k+1;
  if ($akt_str == $k) {
    $bold = 'font-weight: 800';
  } else {
    $bold = '';
  }
  echo '<a href="wyszukiwarka.php?aktywna_strona='.$k.'" style="color: #000; '.$bold.'">'.$nr_str.'</a> ';
}

echo '<a href="wyszukiwarka.php?aktywna_strona='.$next.'" style="color: #000;">></a> ';
echo '</p>';
$polaczenie->close();

 ?>



    </div>
  </div>
</div>
<?php include $pageprefix.'include/all/footer.php'; ?>