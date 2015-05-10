<?php
  function createLocal($name, $map) {
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO localdestand VALUES (?, ?)");
    $stmt->execute(array($name, $map));

  }
 
  function localExists($name, $map) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM localdestand
                            WHERE morada = ? AND descricao = ?");
    $stmt->execute(array($name, $map));
    return $stmt->fetch()==true;
  }
?>