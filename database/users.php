<?php
  

  function createUser($realname, $username, $password, $email, $cellphone, $adress) {
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO pessoa VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($realname, $username, sha1($password), $email, $cellphone, $adress));

    $stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE  username = ?");
    $stmt->execute(array($username));
    $id = $stmt->fetch()["pessoaid"];
    $default = true;

    $stmt = $conn->prepare("INSERT INTO cliente VALUES (?, ?)");
    $stmt->execute(array($default,$id));
  }
 function createManager($username, $password, $local) {
    global $conn;
	
    $stmt = $conn->prepare("INSERT INTO pessoa VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array('empty', $username, sha1($password), 'empty', '0', 'empty'));
	
    $stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE  username = ?");
    $stmt->execute(array($username));
    $id = $stmt->fetch()["pessoaid"];


    $stmt = $conn->prepare("INSERT INTO gestor VALUES (?, ?)");
    $stmt->execute(array($id,$local));
    

  }
  function deleteManager($id) {
  	global $conn;
  
  	$stmt = $conn->prepare("DELETE FROM pessoa WHERE pessoaid = ?");
  	$stmt->execute(array($id));
  
  
  	$stmt = $conn->prepare("DELETE FROM gestor WHERE gestorid = ?");
  	$stmt->execute(array($id));
  }

  function changePassword($password) {
  	global $conn;
  
  	$stmt = $conn->prepare("UPDATE pessoa SET hash = ? WHERE username = ?");
  	$stmt->execute(array(sha1($password),$_SESSION ['username']));
  
  }
  
  
  
  

  function isClientCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM pessoa,cliente
                            WHERE pessoa.username = ? AND pessoa.pessoaID = cliente.clienteID AND pessoa.hash = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
  function isAdminCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM pessoa,Administrador 
                            WHERE pessoa.username = ? AND pessoa.pessoaID = Administrador.administradorID AND pessoa.hash = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
  
  function searchManager($name) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT username,gestor.gestorid FROM pessoa,gestor WHERE pessoa.username LIKE ? AND pessoa.pessoaID = gestor.gestorID");
  	$stmt->execute(array('%'.$name.'%'));
  	return $stmt->fetchAll();
  }

  function getUser($username) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	return $stmt->fetch();
  }

  function getnews($id) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT newsletter FROM cliente WHERE clienteid = ? ");
  	$stmt->execute(array(intval($id)));
  	return $stmt->fetch();
  }

  function getReservations($id) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * FROM reserva WHERE clienteid = ? ");
  	$stmt->execute(array(intval($id)));
  	return $stmt->fetchall();
  }
  
?>
