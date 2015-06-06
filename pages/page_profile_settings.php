<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $user = getUser($_SESSION ['username']);

  $smarty->assign('user', $user);
  
  $newsletter = getnews($user["pessoaid"]);

  $smarty->assign('news',$newsletter["newsletter"]);
  
  $smarty->display('user_settings.tpl');
?>