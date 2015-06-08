<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $admins = searchAdmins($_GET['name']);
  $smarty->assign('admins', $admins); 
  $smarty->display('search_admins.tpl');
?>
