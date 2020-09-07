<?php 
    session_start();
    $pagetitle = 'Przyznanie OSK';
    $pageprefix = '../';





$id=$_GET['id'];
// echo $id;

require_once "connect.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

if ($rezultat=$polaczenie->query("UPDATE osk_wspolpraca SET weryfikacja = '1' WHERE user_id='$id'")) {
	$error = 0;
}

$rezultat2 = $polaczenie->query("SELECT * FROM osk_wspolpraca WHERE user_id='$id'");
$row = $rezultat2->fetch_assoc();
$osk_id = $row['osk_id'];

include $pageprefix.'include/all/head.php';
include $pageprefix.'include/all/navbar.php';
?>

<div id="wrapper">

     <div class="container-fluid">
         <div class="row pt-5 mx-0 pl-2">
             <div class="animate-hr">
                 <a href="../index.php" class="mb-2 back-header">Wróć na Prawko Plus</a>
                 <hr class="small-hr ml-0 mt-0">
             </div>
         </div>
         <div class="row m-0">
             <div class="col-12  os-card mt-4 ">



                   <div class="row">

                     <div class="col-lg-10 offset-lg-1 text-center mt-3">

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Zrobione</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-lg-8 offset-lg-2 text-center">

                       <p class="mb-0 small-black-text "><?php if ($error == 0) {
                       	echo 'OSK o numerze ID: '.$osk_id.' zostało przydzielone do użytkownika o numerze id: '. $id;
                       } else {
                       	echo 'Coś poszło nie tak...';
                       } ?></p>
                     </div>
                   </div>



                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; 

$polaczenie -> close();
exit();
?>