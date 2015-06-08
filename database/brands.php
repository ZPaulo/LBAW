<?php 
function searchBrands($name) {

	global $conn;
	 
	$stmt = $conn->prepare("SELECT * FROM fabricante WHERE nome LIKE ?");
	$stmt->execute(array('%'.$name.'%'));
	return $stmt->fetchAll();
}

function getAllBrands(){
	global $conn;

	$stmt = $conn->prepare("SELECT * FROM fabricante");
	$stmt->execute();
	return $stmt->fetchAll();
}

function createBrand($name) {

	global $conn;

	$stmt = $conn->prepare("INSERT INTO fabricante(nome) VALUES (?)");
	$stmt->execute(array($name));
}
function deleteBrand($id) {

	global $conn;

	$stmt = $conn->prepare("DELETE FROM fabricante WHERE fabricanteid = ?");
	$stmt->execute(array($id));
}

?>