<?php
session_start();
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if (! $_POST ['name'] || ! $_POST ['email'] || ! $_POST['phone'] || ! $_POST['address']) {
	$_SESSION ['error_messages'] [] = 'All fields are mandatory';
	$_SESSION ['form_values'] = $_POST;
	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}


$name = $_POST ['name'];
$email = $_POST ['email'];
$phone = $_POST ['phone'];
$address = $_POST ['address'];
$id = $_GET['id'];

try {
	changeData($name,$email,$phone,$address,$id);
} catch ( PDOException $e ) {
	//TODO error handling

	header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
	exit ();
}
$_SESSION ['success_messages'] [] = 'Changed data successfully';
header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );

?>
