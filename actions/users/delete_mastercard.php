<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_GET ['id']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_GET;
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}

$id = $_GET ['id'];
try {
	deletemastercard ( $id );
} catch ( PDOException $e ) {
	// TODO error handling 
	
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Removed option';
header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
?>
