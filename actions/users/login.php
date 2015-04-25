<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  include 'ChromePhp.php';

 echo "<script type='text/javascript'>alert('okidoki');</script>";
  ChromePhp::warn('something went wrong!');

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    echo "<script type='text/javascript'>alert('invalid');</script>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    echo "<script type='text/javascript'>alert('okidoki');</script>";
    $_SESSION['success_messages'][] = 'Login successful';  
  } else {
    ChromePhp::warn('something went wrong!');
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
