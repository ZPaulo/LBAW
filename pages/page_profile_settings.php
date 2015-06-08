<?php
  session_start();
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  

  if ($_GET ['id'])
  	$user = getUserfromId ( $_GET ['id'] );
  else
  {
  	$user = getUser ( $_SESSION ['username'] );
  	header ( "Location: $BASE_URL" . 'pages/page_profile_settings.php?id='.$user["pessoaid"]  );
  }

  
  $smarty->assign('user', $user);
  
  $newsletter = getnews($user["pessoaid"]);
  

  $smarty->assign('news',$newsletter["newsletter"]);

  $mastercard = getmastercard($_SESSION['username']);
  
  $smarty->assign('mastercard',$mastercard);
  
  $visa = getvisa($_SESSION['username']);

  $smarty->assign('visa',$visa);
  $smarty->assign('currentId', $_GET ['id'] );
  
  $smarty->display('user_settings.tpl');
?>