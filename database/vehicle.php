<?php
  function getVehicleName($id){

  	global $conn;
  	
  	$stmt = $conn->prepare("SELECT nome FROM modelo,veiculo,caracteristicasveiculo WHERE veiculo.veiculoid = ? AND caracteristicasveiculo.caracteristicasveiculoid = veiculo.caracteristicasveiculoid AND caracteristicasveiculo.modeloid = modelo.modeloid");
  	$stmt->execute(array(intval($id)));
    return $stmt->fetch()["nome"];
  }

  function getExtrasFromReservation($id){
  
  	global $conn;
  	 
  	$stmt = $conn->prepare("SELECT nome FROM extra,joinextratoreserva WHERE joinextratoreserva.reservaid=? AND extra.extraid=joinextratoreserva.extraid");
  	$stmt->execute(array(intval($id)));
  	return $stmt->fetch()["nome"];
  }
?>