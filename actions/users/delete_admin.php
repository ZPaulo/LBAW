<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

$id = $_GET ['id'];

$c = getUserfromId ( $id );

try {
	deleteAdmin ( $id );
} catch ( PDOException $e ) {
	// TODO error handling
	
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Deleted account';

if ($c ["username"] === $_SESSION ["username"])
	header ( 'Location: logout.php' );
else
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
?>