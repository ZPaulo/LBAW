<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $user = getUser($_SESSION ['username']);

  
  $smarty->assign('user', $user);
  
  $newsletter = getnews($user["pessoaid"]);
  

  $smarty->assign('news',$newsletter["newsletter"]);

  $mastercard = getmastercard();
  
  $smarty->assign('mastercard',$mastercard);
  
  $visa = getvisa();
  
  $smarty->assign('visa',$visa);
  
//   echo $mastercard[0]["ncartao"];
//   var_dump($mastercard);
  $smarty->display('user_settings.tpl');
?>