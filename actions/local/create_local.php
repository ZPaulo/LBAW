<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/local.php');
session_start ();

$name = $_POST ['name'];
$map = $_POST ['map'];

try {
	createLocal ( $name, $map );
} catch ( PDOException $e ) {
    $_SESSION['error_messages'][] = 'Error creating local';

    $_SESSION['form_values'] = $_POST;
//     header("Location: www.google.com");
    exit;
}

// header ( 'Location: ' . $_SERVER ['HTTP_REFERER'] );
// header('Location: ' . $BASE_URL);
?>
