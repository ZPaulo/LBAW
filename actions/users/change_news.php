<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

$id = $_GET['id'];


if (! $_POST ['news']) {
	try {
	disableNews ($id);
	} catch ( PDOException $e ) {
	// TODO error handling
	
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER']);
	exit ();
	}
	
	$_SESSION ['success_messages'] [] = 'Changed option';
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
} else {
	try {
		enableNews ($id);
	} catch ( PDOException $e ) {
		// TODO error handling
		
		header ( 'Location: ' . $_SERVER ['HTTP_REFERER']);
		exit ();
	}
	
	$_SESSION ['success_messages'] [] = 'Changed option';
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
}
?>