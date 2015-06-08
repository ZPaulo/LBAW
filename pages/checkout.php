<?php
session_start ();
include_once ('../config/init.php');
include_once ($BASE_DIR . 'database/users.php');
$visa = getvisa($_SESSION['username']);
$mastercard = getmastercard($_SESSION['username']);

$smarty->assign ( 'get', $_GET );

$smarty->assign ( 'visa', $visa );
$smarty->assign ( 'mastercard', $mastercard );
$smarty->display ( 'checkout.tpl' );
?>