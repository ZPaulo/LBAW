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
  $smarty->assign('reviews', $reviews);
  $smarty->display('reviews.tpl');
?>
