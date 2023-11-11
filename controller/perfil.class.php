<?php
require_once "../model/conexaoPDO.php";
require_once "verificaPerfilController.php";
class Subperfil {
      private $conn;
  
      public function __construct() {
          $conexao = new Conexao();
          $this->conn = $conexao->getConnection();

      }
  
      public function salvarNoBanco($user_id, $nome, $avatar) {
          $sql = "INSERT INTO subperfis (user_id, nome, avatar) VALUES (:user_id, :nome, :avatar)";
          $stmt = $this->conn->prepare($sql);
          $stmt->bindParam(':user_id', $user_id);
          $stmt->bindParam(':nome', $nome);
          $stmt->bindParam(':avatar', $avatar);
  
          if ($stmt->execute()) {
              echo "Inserção bem-sucedida!";
          } else {
              echo "Erro na inserção: " . print_r($stmt->errorInfo(), true);
          }
      }
    }
  
  
  ?>