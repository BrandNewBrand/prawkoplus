<?php 
session_start();

$back = 'przypomnienie_hasla.php';


if (isset($_POST['email'])) {

	$email = $_POST['email'];

} else {
	$_SESSION['error'] = 'Coś poszło nie tak. Spróbuj ponownie.';
	header('Location: ../'.$back);

	exit();
}



require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->query('SET NAMES utf8');
$polaczenie->query('SET CHARACTER_SET utf8_unicode_ci');

$email_test=$polaczenie->query("SELECT id FROM users WHERE email='$email'");
$email_test_numb = mysqli_num_rows($email_test);
$user_id_tbl=$email_test->fetch_assoc();
$user_id=$user_id_tbl['id'];

if ($email_test_numb > 0) {
	$to = $email;
    $name = 'Serwis Prawko Plus - resetowanie hasła';
    $email = $_SESSION['admin_email'];
    $lokalizacja = $_SESSION['domena'].'/backend/reset-hasla-mail.php?id='.$user_id;
    $subject = 'Resetowanie hasła';

	$header = "From: $email \nContent-Type:".
          ' text/html;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";

    $message = '<!DOCTYPE html><html><body style="width: 100%;"><div style="width: 600px; margin: auto; background-color: rgb(252,248,227); padding: 20px; border-radius: 20px; text-align: center;"><h3 style="text-align:center;">Zresetuj swoje hasło klikając w poniższy link</h3><a href="'.$lokalizacja.'">Zresetuj hasło</a></div></body></html>';

    if (mail($to, $subject, $message, $header)) {

    

	} else {

	    $_SESSION['error'] = 'Błąd serwera. Prosimy o próbę zmiany hasła w późniejszym terminie.';
	    header('Location: ../'.$back);
	    exit();
	}



} else {
	$_SESSION['error'] = 'Nie ma konta o podanym adresie e-mail.';
	header('Location: ../'.$back);
	exit();
}




$polaczenie -> close();


	$pagetitle = 'Zmiana hasła';
    $pageprefix = '../';
    include $pageprefix.'include/all/head.php';
    include $pageprefix.'include/all/navbar.php';
 ?>

 <div id="wrapper">

   <?php include $pageprefix.'include/all/navbar.php'; ?>
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

                       <h1 class="grey-header " style="color:#B40524; font-weight:bold;">Już prawie...</h1>

                     </div>


                   </div>

                   <div class="row my-3">

                     <div class="  offset-1 col-10 col-lg-8 offset-lg-2 text-center">
                       <p class="mb-0 small-black-text ">Wysłaliśmy do Ciebie wiadomość na adres e-mail: <?php echo $to; ?>. Przejdź do swojej skrzynki aby zresetować hasło.</p>
                     </div>
                   </div>

                   <div class="row pt-3">
                     <div class="col-lg-4 offset-lg-4 offset-1 col-10">

                       <div class="text-center">


                       </div>

                    


                     </div>

                   </div>



                 </div>

             </div>
         </div>
     </div>
 </div>
<?php include $pageprefix.'include/all/footer.php'; ?>