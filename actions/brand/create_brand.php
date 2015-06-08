<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/brands.php');
session_start ();

$name = $_POST ['name'];
try {
	createBrand ( $name );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error creating brand';

    $_SESSION['form_values'] = $_POST;
    header( 'Location: ' . $_SERVER ['HTTP_REFERER']);
    exit;
}

header ( "Location: $BASE_URL" . 'pages/management.php'  );
?>
