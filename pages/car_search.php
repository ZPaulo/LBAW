<?php
  session_start();
  include_once('../config/init.php'); 
include_once ($BASE_DIR . 'database/vehicle.php');
  $cars = getCars();
  
  $smarty->assign('cars', $cars);
  $smarty->display('car_search.tpl');
?>
