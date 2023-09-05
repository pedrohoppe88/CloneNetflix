<?php
session_start();

if (!isset($_SESSION['login']))
  {
      header('Location: teste.php');
      exit;
  }
?>