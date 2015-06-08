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

  function changePassword($password,$username) {
  	global $conn;
  
  	$stmt = $conn->prepare("UPDATE pessoa SET hash = ? WHERE username = ?");
  	$stmt->execute(array(sha1($password),$username));
  
  }
  function changeData($name,$email,$phone,$address,$username) {
  	global $conn;
  
  	$stmt = $conn->prepare("UPDATE pessoa SET nome = ?, email = ?, ntelemovel = ?, morada = ?  WHERE username = ?");
  	$stmt->execute(array($name,$email,$phone,$address,$username));
  
  }

  function addvisa ( $name, $card, $cvv, $year, $month ,$username){
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  
  	$stmt = $conn->prepare("INSERT INTO opcoesdepagamento (clienteid) VALUES (?)");
  	$stmt->execute(array($id));
  
  
  
  	$stmt = $conn->prepare("INSERT INTO visa VALUES (?,?,?,?,?,?)");
  	$stmt->execute(array($conn->lastInsertId(opcoesdepagamento_opcoesdepagamentoid_seq),  $card, $name,  $month ,$year, $cvv));
  }

  function addmastercard ( $name, $card, $cvv, $year, $month,$username ){
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  
  	$stmt = $conn->prepare("INSERT INTO opcoesdepagamento (clienteid) VALUES (?)");
  	$stmt->execute(array($id));
  
  
  
  	$stmt = $conn->prepare("INSERT INTO mastercard VALUES (?,?,?,?,?,?)");
  	$stmt->execute(array($conn->lastInsertId(opcoesdepagamento_opcoesdepagamentoid_seq),  $card, $name,  $month ,$year, $cvv));
  }
  
 function enableNews($username){
  	global $conn;
  	
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  	
  	$stmt = $conn->prepare("UPDATE cliente SET newsletter = TRUE WHERE clienteid = ?");
  	$stmt->execute(array($id));
  }
  function disableNews($username){
  	global $conn;
  	 
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  	 
  	$stmt = $conn->prepare("UPDATE cliente SET newsletter = FALSE WHERE clienteid = ?");
  	$stmt->execute(array($id));
  }
  

  function getmastercard($username)  {
  	global $conn;
  	 
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  	 
  	$stmt = $conn->prepare("SELECT * FROM mastercard,opcoesdepagamento WHERE opcoesdepagamento.clienteid = ? AND opcoesdepagamento.opcoesdepagamentoid = mastercard.mastercardid ");
  	$stmt->execute(array($id));
  	 
  	return $stmt->fetchall();
  }
  
function deletemastercard($id){
  	global $conn;

  	$stmt = $conn->prepare("DELETE FROM mastercard WHERE mastercardid = ? ");
  	$stmt->execute(array($id));
  	$stmt = $conn->prepare("DELETE FROM opcoespagamento WHERE opcoespagamentoid = ? ");
  	$stmt->execute(array($id));
  }
  function deletevisa($id){
  	global $conn;

  	$stmt = $conn->prepare("DELETE FROM visa WHERE visaid = ? ");
  	$stmt->execute(array($id));
  	$stmt = $conn->prepare("DELETE FROM opcoespagamento WHERE opcoespagamentoid = ? ");
  	$stmt->execute(array($id));
  }

  function getvisa($username)  {
  	global $conn;
  	 
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	$id = $stmt->fetch()['pessoaid'];
  	 
  	$stmt = $conn->prepare("SELECT * FROM visa,opcoesdepagamento WHERE opcoesdepagamento.clienteid = ? AND opcoesdepagamento.opcoesdepagamentoid = visa.visaid ");
  	$stmt->execute(array($id));
  	 
  	return $stmt->fetchall();
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
  	$stmt = $conn->prepare("SELECT username,gestor.gestorid FROM pessoa,gestor WHERE pessoa.username LIKE ? AND pessoa.pessoaid = gestor.gestorid	");
  	$stmt->execute(array('%'.$name.'%'));
  	return $stmt->fetchAll();
  }
  function searchClient($name) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT username,cliente.clienteid,nome,morada,email,ntelemovel FROM pessoa,cliente WHERE pessoa.username LIKE ? AND pessoa.pessoaID = cliente.clienteid");
  	$stmt->execute(array('%'.$name.'%'));
  	return $stmt->fetchAll();
  }

  function getUser($username) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($username));
  	return $stmt->fetch();
  }

  function getUserfromId($id) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * FROM pessoa WHERE pessoa.pessoaid = ? ");
  	$stmt->execute(array($id));
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
