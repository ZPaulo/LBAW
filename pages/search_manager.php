<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='admin'))
  	header('Location: ' . $BASE_URL);
  include_once($BASE_DIR .'database/users.php');
  
  $managers = searchManager($_GET['name']);
  
  $smarty->assign('managers', $managers); 
  $smarty->display('search_managers.tpl');
?>
