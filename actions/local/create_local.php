<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/local.php');
session_start ();

$name = $_GET ['username'];
$map = $_GET ['password'];

if (isClientCorrect ( $username, $password )) {
	
	$_SESSION ['username'] = $username;
	$_SESSION ['type'] = 'client';
	$_SESSION ['success_messages'] [] = 'Login successful';
} else if (isAdminCorrect ( $username, $password )) {
	$_SESSION ['username'] = $username;
	$_SESSION ['type'] = 'admin';
	$_SESSION ['success_messages'] [] = 'Login successful';
} else {
	$_SESSION ['error_messages'] [] = 'Login failed';
}
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
// header('Location: ' . $BASE_URL);
?>
