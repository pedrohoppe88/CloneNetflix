<?php

      require_once "../perfil.class.php";
      require_once "verificaPerfilController.php";

      if (!isset($_SESSION['login'])) {
            header("Location: fodase.php");
            exit();
        }

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
            $user_id = $_SESSION['login'];
            $nome = $_POST['nome'];
            $avatar = $_POST['avatar'];
        
            $conexao = new Conexao();
            $conn = $conexao->getConnection();
        
            $subperfil = new Subperfil($user_id, $nome, $avatar);
            $subperfil->salvarNoBanco($conn);  
      }

?>