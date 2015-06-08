<?php 
function searchModel($name) {

	global $conn;
	 
	$stmt = $conn->prepare("SELECT modelo.nome,modelo.modeloid,fabricante.nome as fabricante FROM modelo,fabricante WHERE modelo.nome LIKE ? AND fabricante.fabricanteid=modelo.fabricanteid");
	$stmt->execute(array('%'.$name.'%'));
	return $stmt->fetchAll();
}

function createModel($name,$id) {

	global $conn;
	
	$stmt = $conn->prepare("INSERT INTO modelo(nome,fabricanteid) VALUES ( ? , ? )");
	$stmt->execute(array($name,$id));
}
function deleteModel($id) {

	global $conn;

	$stmt = $conn->prepare("DELETE FROM modelo WHERE modeloid = ?");
	$stmt->execute(array($id));
}

?>