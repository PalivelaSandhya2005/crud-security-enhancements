<?php
session_start();
if (\!isset($_SESSION['role'])) { 
  header('Location: login.php');
  exit;
}
echo 'Welcome! You are logged in as ' . $_SESSION['role'];
?>
