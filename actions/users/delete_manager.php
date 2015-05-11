<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

$id = $_GET ['manager'];
try {
	deleteManager ( $id );
} catch ( PDOException $e ) {
	
		$_SESSION ['error_messages'] [] = 'Error deleting manager';
	
	$_SESSION ['form_values'] = $_POST;
	header ( "Location: $BASE_URL" . 'pages/search_manager.php' );
	exit ();
}
$_SESSION ['success_messages'] [] = 'Manager deleted successfully';
header ( "Location: $BASE_URL" . 'pages/search_manager.php' );
?>
