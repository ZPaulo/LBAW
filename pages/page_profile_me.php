<?php
session_start ();
include_once ('../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if ($_GET ['id'])
	$user = getUserfromId ( $_GET ['id'] );
else
{
	$user = getUser ( $_SESSION ['username'] );
	var_dump($user);
	header ( "Location: $BASE_URL" . 'pages/page_profile_me.php?id='.$user["pessoaid"]  );
}

$smarty->assign ( 'user', $user );

$smarty->display ( 'user_profile.tpl' );
?>