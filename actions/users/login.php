<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');
session_start ();

if (! $_POST ['username'] || ! $_POST ['password']) {
	$_SESSION ['error_messages'] [] = 'Invalid login';
	$_SESSION ['form_values'] = $_POST;
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$username = $_POST ['username'];
$password = $_POST ['password'];

if (isClientCorrect ( $username, $password )) {
	
	$_SESSION ['username'] = $username;
	$_SESSION ['type'] = 'client';
	$_SESSION ['success_messages'] [] = 'Login successful';
} else if (isAdminCorrect ( $username, $password )) {
	$_SESSION ['username'] = $username;
	$_SESSION ['type'] = 'admin';
	$_SESSION ['success_messages'] [] = 'Login successful';
} else if (isManagerCorrect ( $username, $password )) {
	$_SESSION ['username'] = $username;
	$_SESSION ['type'] = 'manager';
	$_SESSION ['success_messages'] [] = 'Login successful';
} else {
	$_SESSION ['error_messages'] [] = 'Login failed';
}
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
// header('Location: ' . $BASE_URL);
?>
