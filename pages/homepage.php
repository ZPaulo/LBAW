<?php
  session_start();
  include_once('../config/init.php');
  
  
  $smarty->display('homepage.tpl');
?>
