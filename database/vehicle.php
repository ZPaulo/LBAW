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

  function getCars()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM fabricante,modelo,caracteristicasveiculo WHERE caracteristicasveiculo.modeloid=modelo.modeloid AND modelo.fabricanteid=fabricante.fabricanteid");
    $stmt->execute();
    $carros[$f]=$stmt->fetchall();

    return $carros;
  }

    function searchCarsMan($fabricantes)
  {
    global $conn;
    foreach ($fabricantes as $f)
    {
      $stmt = $conn->prepare("SELECT * FROM fabricante,modelo,caracteristicasveiculo WHERE caracteristicasveiculo.modeloid=modelo.modeloid AND modelo.fabricanteid=fabricante.fabricanteid AND fabricante.nome = ?");
      $stmt->execute(array(trim($f)));
      $carros[$f]=$stmt->fetchall();
    }
    return $carros;
  }

  function searchCarsModel($fabricantes,$modelo)
  {
    global $conn;
    foreach ($fabricantes as $f)
    {
      $stmt = $conn->prepare("SELECT * FROM fabricante,modelo,caracteristicasveiculo WHERE caracteristicasveiculo.modeloid=modelo.modeloid AND modelo.fabricanteid=fabricante.fabricanteid AND fabricante.nome = ? AND modelo.nome LIKE ?");
      $stmt->execute(array(trim($f),'%'.$modelo.'%'));
      $carros[$f]=$stmt->fetchall();
    }
    return $carros;
  }


  function searchCarsPrice($fabricantes,$modelo,$preco)
  {
    global $conn;
    foreach ($fabricantes as $f)
    {
      $stmt = $conn->prepare("SELECT * FROM fabricante,modelo,caracteristicasveiculo WHERE caracteristicasveiculo.modeloid=modelo.modeloid 
        AND modelo.fabricanteid=fabricante.fabricanteid AND caracteristicasveiculo.preco = preco AND fabricante.nome = ? AND modelo.nome LIKE ?");
      $stmt->execute(array($f,"%".$modelo."%"));
      $carros[$f]=$stmt->fetchall();
    }
    return $carros;
  }
?>