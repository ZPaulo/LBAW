<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/local.php');
  
  $locals = getAllmanagers($_GET);
  
  $smarty->assign('managers', $managers);
  
  $smarty->display('search_managers.tpl');
?>
