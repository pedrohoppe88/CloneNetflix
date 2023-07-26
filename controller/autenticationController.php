<?php
session_start();

if(!isset($_SESSION['login'])) {
      header('location:loginPage.php?cod=172');
}

?>