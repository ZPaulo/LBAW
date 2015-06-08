<?php
session_start ();
include_once ('../config/init.php');
include_once ($BASE_DIR . 'database/users.php');
include_once ($BASE_DIR . 'database/vehicle.php');
include_once ($BASE_DIR . 'database/local.php');

if ($_GET ['id'])
	$user = getUserfromId ( $_GET ['id'] );
else
{
	$user = getUser ( $_SESSION ['username'] );
	header ( "Location: $BASE_URL" . 'pages/page_profile_history.php?id='.$user["pessoaid"]  );
}
$smarty->assign ( 'user', $user );

$reservations = getReservations ( $user ["pessoaid"] );

foreach ( $reservations as $key => $r ) {
	$r ["vehicleName"] = getVehicleName ( $r ["veiculoid"] );
	$r ["extras"] = getExtrasFromReservation ( $r ["reservaid"] );
	$r ["pickup"] = getLocalName ( $r ["localdestandlevantamentoid"] );
	$r ["drop"] = getLocalName ( $r ["localdestandentregaid"] );
	$reservations [$key] = $r;
}

$smarty->assign ( 'reservations', $reservations );

$smarty->display ( 'user_history.tpl' );
?>