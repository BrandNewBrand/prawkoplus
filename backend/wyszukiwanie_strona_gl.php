<?php
session_start();

if (!isset($_POST['pp'])) {
	$_POST['pp'] = 0;
}

echo $_POST['city'];
echo $_POST['cat'];
echo $_POST['sort'];
echo $_POST['pp'];


?>