<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_GET ['news']) {
	try {
	disableNews ();
	} catch ( PDOException $e ) {
	// TODO error handling
	
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
	}
	
	$_SESSION ['success_messages'] [] = 'Changed option';
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
} else {
	try {
		enableNews ();
	} catch ( PDOException $e ) {
		// TODO error handling
		
		header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
		exit ();
	}
	
	$_SESSION ['success_messages'] [] = 'Changed option';
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
}
?>