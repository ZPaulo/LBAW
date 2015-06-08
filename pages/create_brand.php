<?php
  session_start();
  include_once('../config/init.php');
  if(!($_SESSION['type']==='manager'))
  	header('Location: ' . $BASE_URL);
  $smarty->display('create_brand.tpl');
?>
