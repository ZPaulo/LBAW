<?php
  session_start();
  include_once('../config/init.php');
  include_once ($BASE_DIR . 'database/reviews.php');
  include_once ($BASE_DIR . 'database/users.php');
  


  $reviews = getAllreviews();
  
  foreach ($reviews as $k => $r)
  {
  		$reviews[$k]["cliente"]=getUserfromId($r["clienteid"]);
  }
  
  $voted = getvoted();
  foreach ($voted as $vo)
  {
  	if($vo["rating"])
  	$v[$vo["reviewid"]]=1;
  	else
  	$v[$vo["reviewid"]]=-1;
  }
  $smarty->assign('reviews', $reviews);
  $smarty->assign('voted', $v);
  $smarty->display('reviews.tpl');
?>
