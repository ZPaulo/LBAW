<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='manager'))
  	header('Location: ' . $BASE_URL);
  include_once($BASE_DIR .'database/extra.php');
  
  $extras = searchExtra($_GET['name']);
  $smarty->assign('extras', $extras); 
  $smarty->display('search_extras.tpl');
?>
