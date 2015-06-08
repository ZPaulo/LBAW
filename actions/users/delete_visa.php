<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_GET ['id']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_GET;
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$id = $_GET ['id'];
try {
	deletevisa ( $id );
} catch ( PDOException $e ) {
	// TODO error handling 
	
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Removed option';
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
?>
