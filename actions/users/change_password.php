<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_POST ['password'] || ! $_POST ['confirmpassword']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}

$password = $_POST ['password'];


try {
	changepassword ($password);
} catch ( PDOException $e ) {
	//TODO error handling
	
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Changed password successfully';
header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
?>
