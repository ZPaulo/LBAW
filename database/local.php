<?php
  function createLocal($name, $map) {
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO localdestand (nome,morada) VALUES (?, ?)");
    $stmt->execute(array($name, $map));

  }
  function getAlllocals() {

  	global $conn;
  	
  	$stmt = $conn->prepare("SELECT * FROM localdestand");
  	$stmt->execute();
    return $stmt->fetchAll();
  }
  function getLocalName($id) {

  	global $conn;
  	
  	$stmt = $conn->prepare("SELECT nome FROM localdestand WHERE localdestandid = ?");
  	$stmt->execute(array(intval($id)));
    return $stmt->fetch()["nome"];
  }
?>