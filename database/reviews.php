<?php
  function createReview($service, $car, $stars) {
    global $conn;
  
    $stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE  username = ?");
    $stmt->execute(array($_SESSION['username']));
    $id = $stmt->fetch()["pessoaid"];

    $stmt = $conn->prepare("INSERT INTO review(comentariocarro,comentarioservico,estrelas,rating,clienteid) VALUES (?, ?, ?, 0, ?)");
    $stmt->execute(array($service,$car,$stars,$id));
  }
  

function getAllreviews() {
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT * FROM review ");
  	$stmt->execute(array());
  	
  	return $stmt->fetchall();
  }
  
  function deleteReview($id) {
  	global $conn;

  	$stmt = $conn->prepare("DELETE FROM voto WHERE reviewid = ? ");
  	$stmt->execute(array($id));
  	$stmt = $conn->prepare("DELETE FROM review WHERE reviewid = ? ");
  	$stmt->execute(array($id));
  }
  
  function upreview($review) {
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($_SESSION['username']));
  	$id = $stmt->fetch()['pessoaid'];
  	
  	$stmt = $conn->prepare("INSERT INTO voto(rating,clienteid,reviewid) VALUES (TRUE, ? , ?)");
  	$stmt->execute(array($id,$review));
  	
  	$stmt = $conn->prepare("UPDATE review SET rating = rating + 1 WHERE reviewid = ?");
  	$stmt->execute(array($review));
  	
  	
  }
  
  function downreview($review) {
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($_SESSION['username']));
  	$id = $stmt->fetch()['pessoaid'];
  	
  	$stmt = $conn->prepare("INSERT INTO voto(rating,clienteid,reviewid) VALUES (FALSE, ? , ?)");
  	$stmt->execute(array($id,$review));
  	
  	$stmt = $conn->prepare("UPDATE review SET rating = rating - 1 WHERE reviewid = ?");
  	$stmt->execute(array($review));
  }
  
function getvoted() {
  	global $conn;
  
  	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
  	$stmt->execute(array($_SESSION['username']));
  	$id = $stmt->fetch()['pessoaid'];
  	
  	$stmt = $conn->prepare("SELECT reviewid,rating FROM voto WHERE clienteid = ? ");
  	$stmt->execute(array($id));
  	return $stmt->fetchall();
  	
  }  
  
  
  function deletevote($review){
  	global $conn;
  	
	$stmt = $conn->prepare("SELECT pessoaid FROM pessoa WHERE pessoa.username = ? ");
	$stmt->execute(array($_SESSION['username']));
	$id = $stmt->fetch()['pessoaid'];
	$stmt = $conn->prepare("DELETE FROM voto WHERE clienteid = ? AND reviewid = ?");
	$stmt->execute(array($id,$review));
  	
  }
?>
