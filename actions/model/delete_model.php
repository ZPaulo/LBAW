<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/model.php');
session_start ();

$id = $_GET ['id'];

try {
	deleteModel ( $id );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error deleting model';

    $_SESSION['form_values'] = $_POST;
    header( 'Location: ' . $_SERVER ['HTTP_REFERER']);
    exit;
}

header ('Location: ' . $_SERVER ['HTTP_REFERER'] );
?>
