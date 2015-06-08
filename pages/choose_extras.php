<?php
session_start ();
include_once ('../config/init.php');
include_once ($BASE_DIR . 'database/extra.php');
$extras = searchExtra ("");

$smarty->assign ( 'extras', $extras );
$smarty->display ( 'choose_extras.tpl' );
?>
