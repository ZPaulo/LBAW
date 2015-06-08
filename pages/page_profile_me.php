<?php
session_start ();
include_once ('../config/init.php');
include_once ($BASE_DIR . 'database/users.php');
$user = getUserfromId ( $_GET ['id'] );

$smarty->assign ( 'user', $user );

$smarty->display ( 'user_profile.tpl' );
?>