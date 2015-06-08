<?php
session_start ();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_POST ['option'] || ! $_POST ['name'] || ! $_POST ['card'] || ! $_POST ['cvv'] || ! $_POST ['month']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$name = $_POST ['name'];
$option = $_POST ['option'];
$card = $_POST ['card'];
$cvv = $_POST ['cvv'];
list ( $year, $month ) = explode ( "-", $_POST ['month'] );
$id = $_GET['id'];



try {
	if($option === "visa")
		addvisa ($name, $card, $cvv, $year, $month ,$id);
	if($option === "mastercard")
		addmastercard ( $name, $card, $cvv, $year, $month ,$id);
} catch ( PDOException $e ) {
	// TODO error handling
	
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}

$_SESSION ['success_messages'] [] = 'Added option';
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
?>
