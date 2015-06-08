<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/brands.php');
  
  $brands = getAllbrands();
  
  $smarty->assign('brands', $brands);
  
  $smarty->display('create_model.tpl');
?>
