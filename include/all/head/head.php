
<?php 
if (!isset($_SESSION['zalogowany'])) {
	$_SESSION['zalogowany'] = 0;
}

if (!isset($_SESSION['osk_owner_status'])) {
	$_SESSION['osk_owner_status'] = 0;
}

$log = $_SESSION['zalogowany'];

$_SESSION['domena'] = 'http://bnb-project.pl/pp_new';
$_SESSION['admin_email'] = 'biuro@brandnewbrand.pl';


$_SESSION['category_tbl'] = ['AM', 'A1', 'A2', 'A', 'B1', 'B', 'C1', 'C', 'D1', 'D', 'BE', 'C1E', 'CE', 'D1E', 'DE', 'T'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="<?php echo $pageprefix; ?>img/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prawko Plus <?php if ($pagetitle != 'index') { echo ' - '.$pagetitle; }  ?></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $pageprefix; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $pageprefix; ?>style.css">
	<script src="<?php echo $pageprefix; ?>js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo $pageprefix; ?>js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo $pageprefix; ?>style.css" rel="stylesheet">
</head>

<body <?php if ($pagetitle == 'index') {echo 'class="index-bg"';} ?>>
