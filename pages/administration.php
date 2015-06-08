<?php
  session_start();
  include_once('../config/init.php');
//   if(!($_SESSION['type']==='admin'))
//   	header('Location: ' . $BASE_URL);
  $smarty->display('administration.tpl');
?>
