<?php
  function createExtra ( $name, $desc, $price ) {
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO extra (nome,propriedades,preco) VALUES (?, ?, ?)");
    $stmt->execute(array($name,  $desc, $price));

  }
  function searchExtra($name) {

  	global $conn;
  	
  	$stmt = $conn->prepare("SELECT * FROM extra WHERE nome LIKE ?");
  	$stmt->execute(array('%'.$name.'%'));
    return $stmt->fetchAll();
  }
  function deleteExtra($id) {

  	global $conn;
  	
  	$stmt = $conn->prepare("DELETE FROM extra WHERE extraid = ?");
  	$stmt->execute(array($id));
  }
?>