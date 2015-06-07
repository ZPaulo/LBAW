<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/reviews.php');

if (! $_GET ['id']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( "Location: $BASE_URL" . 'pages/reviews.php' );
	exit ();
}




try {
	deletevote ($_GET['id']);
	upreview ($_GET['id']);
} catch ( PDOException $e ) {
	//TODO error handling
	
	header ( "Location: $BASE_URL" . 'pages/reviews.php' );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Upvoted review successfully';
header ( "Location: $BASE_URL" . 'pages/reviews.php' );
?>
