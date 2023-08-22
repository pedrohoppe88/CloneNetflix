<?php
if ($_POST) {
      $email = $_POST['email'];
      $senha = $_POST['password'];
      @$lembrar = $_POST['lembrar'];
      
      if ($email == 'admim@admim' && $senha == '123') {
          session_start();
          $_SESSION['login'] = $email;

          if(isset($lembrar))
          {
            if($lembrar == 1) {
                
                setcookie('email', $email, time() + (86400 * 7), "/"); // 86400 = 1 day
            }

          } else {
            if(isset($_COOKIE['email']))
                {
                    setcookie("email", "", time() - 3600);
                }
          }
          
          header('location:../perfil.php');
          
      } else {
          //Login inválido 
          header('location:../loginPage.php?cod=171');
      }
  } else {

      header('location:../index.php');
  }

  ?>
