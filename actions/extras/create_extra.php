<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/extra.php');
session_start ();

$name = $_POST ['name'];
$desc = $_POST ['desc'];
$price = $_POST ['price'];

try {
	createExtra ( $name, $desc, $price );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error creating extra';

    $_SESSION['form_values'] = $_POST;
    header( 'Location: ' . $_SERVER ['HTTP_REFERER']);
    exit;
}

header ( "Location: $BASE_URL" . 'pages/management.php'  );
?>
