<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='manager'))
  	header('Location: ' . $BASE_URL);
  include_once($BASE_DIR .'database/model.php');
  
  $model = searchModel($_GET['name']);
  $smarty->assign('models', $model); 
  $smarty->display('search_model.tpl');
?>
