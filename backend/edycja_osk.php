<?php 
session_start();


$id_osk = $_GET['id_osk'];
$back = 'profil-osk-edycja.php?id_osk='.$id_osk;

$kategorie_tbl = $_SESSION['category_tbl'];
$liczba_kat_tbl = count($kategorie_tbl);
$domena=$_SESSION['domena'];
if (isset($_POST['name'])) {

	$name = $_POST['name'];
	$street = $_POST['street'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$website = $_POST['website'];
	$desc = htmlentities($_POST['description']);
	$desc_prim = addslashes($desc);
	$description = nl2br(stripslashes($desc_prim));

	$category = '';
	for ($i=0; $i < $liczba_kat_tbl; $i++) { 
		if (isset($_POST['k'.$i])) {
			$category = $category.$_POST['k'.$i];
		}
	}



} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../'.$back);

	exit();
}


if ($_FILES['img']['size'] > 512000000) {
	$_SESSION['error'] = 'Rozmiar pliku jest zbyt duży. Nie może przekraczać 5,12 MB.';
	header('Location: ../'.$back);
	exit();
}

if ($_FILES['img']['size'] > 1) {



if ($_FILES['img']['type'] != 'image/png' && $_FILES['img']['type'] != 'image/jpg' && $_FILES['img']['type'] != 'image/jpeg') {
	$_SESSION['error'] = 'Błędny format pliku. Wgraj logo w formacie JPEG, PNG lub JPG.';
	header('Location: ../'.$back);
	exit();
}

  if ($_FILES['img']['error'] > 0)
  {
    echo 'problem: ';
    switch ($_FILES['img']['error'])
    {
      // jest większy niż domyślny maksymalny rozmiar,
      // podany w pliku konfiguracyjnym
      case 1: {$_SESSION['error'] = 'Rozmiar pliku jest zbyt duży.';} 

      // jest większy niż wartość pola formularza 
      // MAX_FILE_SIZE
      case 2: {$_SESSION['error'] = 'Rozmiar pliku jest zbyt duży.';}

      // plik nie został wysłany w całości
      case 3: {$_SESSION['error'] = 'Plik wysłany tylko częściowo.';}

      // plik nie został wysłany
      case 4: {$_SESSION['error'] = '';}

      // pozostałe błędy
      default: {$_SESSION['error'] = '';}
    }
  }



if (!is_dir('../img/img_osk/logo_osk_'.$id_osk)) {
	$katalog_create = mkdir('../img/img_osk/logo_osk_'.$id_osk, 0777);
}
$prefix = '..';
$katalog = '/img/img_osk/logo_osk_'.$id_osk;
$file = $_FILES['img']['tmp_name'];
$lokalizacja = $prefix.$katalog.'/logo.jpg';

echo $file;

	if(is_uploaded_file($file)) {
	  	echo 'plik został wczytany<br>';
	    
	    if(!move_uploaded_file($file, $lokalizacja)) {
	    	echo 'problem: Nie udało się skopiować pliku do katalogu.';
	    } else {
	    	echo 'plik zostal zapisany';
	    }

	 } else {
	    echo 'problem: Możliwy atak podczas przesyłania pliku.';
		echo 'Plik nie został zapisany.';
	 }
	  echo 'OK';


$img = $domena.$katalog.'/logo.jpg';
echo '<br>'.$img;
}

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');


if ($_FILES['img']['size'] > 1) {
$rezultat2=$polaczenie->query("UPDATE osk SET img = '$img' WHERE osk_id='$id_osk'");
}

$rezultat2=$polaczenie->query("UPDATE osk SET name = '$name' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET street = '$street' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET email = '$email' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET tel = '$tel' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET description = '$description' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET city = '$city' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET website = '$website' WHERE osk_id='$id_osk'");
$rezultat2=$polaczenie->query("UPDATE osk SET category = '$category' WHERE osk_id='$id_osk'");




header('Location: ../profil-osk.php?id_osk='.$id_osk);
$polaczenie -> close();
exit();




 ?>