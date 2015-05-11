<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
//   $locals = getAlllocals($_GET['name']);
  
//   $smarty->assign('locals', $locals);
  
  $smarty->display('create_manager.tpl');
?>
