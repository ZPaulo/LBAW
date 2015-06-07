<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_POST ['name'] || ! $_POST ['email'] || ! $_POST['phone'] || ! $_POST['address']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}


$name = $_POST ['name'];
$email = $_POST ['email'];
$phone = $_POST ['phone'];
$address = $_POST ['address'];

try {
	changeData($name,$email,$phone,$address);
} catch ( PDOException $e ) {
	//TODO error handling

	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );
	exit ();
}
$_SESSION ['success_messages'] [] = 'Changed data successfully';
header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php' );

?>
