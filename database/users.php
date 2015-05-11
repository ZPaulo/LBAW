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
  	echo $username.$password.$local.'\n';
    global $conn;
  
    $stmt = $conn->prepare("INSERT INTO pessoa VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array('empty', $username, sha1($password), 'empty', 'empty', 'empty'));
	
    echo '1st works';
    $stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE  username = ?");
    $stmt->execute(array($username));
    $id = $stmt->fetch()["pessoaid"];


    echo '2nd works';
    
    $stmt = $conn->prepare("INSERT INTO gestor VALUES (?, ?)");
    $stmt->execute(array($id,$local));
    

    echo '3rd works';
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
  	$stmt = $conn->prepare("SELECT username FROM pessoa,gestor WHERE pessoa.username LIKE ? AND pessoa.pessoaID = gestor.gestorID");
  	$stmt->execute(array('%'.$name.'%'));
  	return $stmt->fetch_all();
  }
?>
