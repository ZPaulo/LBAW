<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/brands.php');
session_start ();

$id = $_GET ['id'];

try {
	deleteBrand ( $id );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error deleting brand';

    $_SESSION['form_values'] = $_POST;
    header( 'Location: ' . $_SERVER ['HTTP_REFERER']);
    exit;
}

header ('Location: ' . $_SERVER ['HTTP_REFERER'] );
?>
