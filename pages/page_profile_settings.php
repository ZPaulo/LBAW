<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $user = getUserfromId($_GET['id']);

  
  $smarty->assign('user', $user);
  
  $newsletter = getnews($user["pessoaid"]);
  

  $smarty->assign('news',$newsletter["newsletter"]);

  $mastercard = getmastercard($_SESSION['username']);
  
  $smarty->assign('mastercard',$mastercard);
  
  $visa = getvisa($_SESSION['username']);
  
  $smarty->assign('visa',$visa);
  
//   echo $mastercard[0]["ncartao"];
//   var_dump($mastercard);
  $smarty->display('user_settings.tpl');
?>