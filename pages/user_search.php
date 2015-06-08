<?php
  session_start();
  include_once('../config/init.php');

  include_once($BASE_DIR .'database/users.php');
  
  $clients = searchClient($_GET['name']);
  $smarty->assign('clients', $clients);

  $smarty->display('user_search.tpl');   
  
?>
