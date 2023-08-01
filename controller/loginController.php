<?php
if ($_POST) {
      $email = $_POST['email'];
      $senha = $_POST['password'];
      
      if ($email == 'admim@admim' && $senha == '123') {
          session_start();
          $_SESSION['login'] = $email;
          
          header('location:../perfil.php');
      } else {
          //Login inválido 
          header('location:../loginPage.php?cod=171');
      }
  } else {

      header('location:../index.php');
  }

  ?>
