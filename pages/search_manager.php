<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $managers = searchManager($_GET['name']);
  
  $smarty->assign('managers', $managers);
  
  $smarty->display('search_managers.tpl');
?>
