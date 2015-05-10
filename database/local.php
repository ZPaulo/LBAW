<?php
  function createLocal($name, $map) {
  	echo $name.$map;
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO localdestand (nome,morada) VALUES (?, ?)");
    $stmt->execute(array($name, $map));
  	echo 'merda2';

  }
?>