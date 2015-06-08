<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_POST ['password'] || ! $_POST ['confirmpassword']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ('Location: ' . $_SERVER ['HTTP_REFERER']);
	exit ();
}

$password = $_POST ['password'];
$id = $_GET['id'];


try {
	changepassword ($password,$id);
} catch ( PDOException $e ) {
	//TODO error handling
	
	header ( "Location: $BASE_URL" . 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Changed password successfully';
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
?>
