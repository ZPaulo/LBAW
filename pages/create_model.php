<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='manager'))
  	header('Location: ' . $BASE_URL);
  include_once($BASE_DIR .'database/brands.php');
  
  $brands = getAllbrands();
  
  $smarty->assign('brands', $brands);
  
  $smarty->display('create_model.tpl');
?>
