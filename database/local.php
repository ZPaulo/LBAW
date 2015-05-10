<?php
  function createLocal($name, $map) {
    header("Location:".$name.$map);
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO localdestand VALUES (?, ?)");
    $stmt->execute(array($name, $map));

  }
?>