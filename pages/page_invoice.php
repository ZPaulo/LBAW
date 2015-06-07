<?php
session_start ();
  include_once('../config/init.php');
  $smarty->display('page_invoice.tpl');
?>