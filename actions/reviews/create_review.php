<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/reviews.php');

if (! $_POST ['service'] || ! $_POST ['cars'] || ! $_POST ['stars']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( "Location: $BASE_URL" . 'pages/create_review.php' );
	exit ();
}
$service = $_POST ['service'];
$car = $_POST ['cars'];
$stars = $_POST ['stars'];

try {
	createReview ($service,$car,$stars);
} catch ( PDOException $e ) {
	//TODO error handling
	
	header ( "Location: $BASE_URL" . 'pages/reviews.php' );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Created review successfully';
header ( "Location: $BASE_URL" . 'pages/reviews.php' );
?>
