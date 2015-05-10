<?php
  function createLocal($name, $map) {
  	echo 'merda';
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO localdestand VALUES (?, ?)");
    $stmt->execute(array($name, $map));

  }
?>