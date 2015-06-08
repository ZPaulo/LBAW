<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/model.php');
session_start ();

$name = $_POST ['name'];
$brand = $_POST ['brand'];


try {
	createModel( $name,$brand );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error creating model';

    $_SESSION['form_values'] = $_POST;
    header( 'Location: ' . $_SERVER ['HTTP_REFERER']);
    exit;
}

header ( "Location: $BASE_URL" . 'pages/management.php'  );
?>
