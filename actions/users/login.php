<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  session_start();

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
  	$stmt = $conn->prepare("SELECT *
                            FROM Cliente, Pessoa
                            WHERE Pessoa.username = ? AND Pessoa.pessoaID = Cliente.clienteID");
    $stmt->execute(array($username) );
    if($stmt->fetch()==true)
    {
    	header("Location: http://example.com/myOtherPage.php");
    	$_SESSION['usertype']='user';
    }
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  //header('Location: ' . $BASE_URL);
?>
