<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='admin'))
  	header('Location: ' . $BASE_URL);
  include_once($BASE_DIR .'database/local.php');
  
  $locals = getAlllocals();
  
  $smarty->assign('locals', $locals);
  
  $smarty->display('create_manager.tpl');
?>
