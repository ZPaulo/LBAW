<?php  	
  	session_start();
  	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/vehicle.php');

	$model = $_POST['model'];
	$manufacturer = $_POST['manufacturers'];
     // var_dump(searchCarsModel($manufacturer,$modelo));
	//return;
	//$price = $_POST['price'];

	if(!empty($model)) {
		$result=searchCarsModel($manufacturer,$model);
	}
	else if(!empty($manufacturer)) {
		$result=searchCarsMan($manufacturer);

	}
	
	else {$result= getCars();
	}
 $smarty->assign('results', $result);
 $smarty->display('results.tpl');
?>