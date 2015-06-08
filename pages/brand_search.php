<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/brands.php');
  
  $brands = searchBrands($_GET['name']);
  $smarty->assign('brands', $brands); 
  $smarty->display('search_brands.tpl');
?>
