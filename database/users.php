<?php
  
  function createUser($realname, $username, $password, $email, $cellphone, $adress) {
    global $conn;
    echo $realname;
    echo $username;
    echo $password;
    echo $email;
    echo $cellphone;
    echo $adress;
    $stmt = $conn->prepare("INSERT INTO pessoa VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($realname, $username, sha1($password), $email, $cellphone, $adress));

    $stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE  username = ?");
    $stmt->execute(array($username));
    $id = $stmt->fetch();

    $stmt = $conn->prepare("INSERT INTO cliente VALUES (?, ?)");
    $stmt->execute(array(NULL,$id);
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM pessoa 
                            WHERE username = ? AND hash = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>
