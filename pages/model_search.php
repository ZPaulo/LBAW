<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/model.php');
  
  $model = searchModel($_GET['name']);
  $smarty->assign('models', $model); 
  $smarty->display('search_model.tpl');
?>
