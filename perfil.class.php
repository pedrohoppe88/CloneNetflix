<?php
require_once "model/conexaoPDO.php";
require_once "controller/verificaPerfilController.php";

class Subperfil {
      private $id;
      private $user_id;
      private $nome;
      private $avatar;
      private $conn;
  
      public function __construct($user_id, $nome, $avatar) {
          $this->user_id = $user_id;
          $this->nome = $nome;
          $this->avatar = $avatar;

          $conexao = new Conexao();
          $this->conn = $conexao->getConnection();

      }
  
      public function salvarNoBanco($conn) {
          $sql = "INSERT INTO subperfis (user_id, nome, avatar) VALUES (:user_id, :nome, :avatar)";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':user_id', $this->user_id);
          $stmt->bindParam(':nome', $this->nome);
          $stmt->bindParam(':avatar', $this->avatar);
  
          if ($stmt->execute()) {
              echo "Inserção bem-sucedida!";
          } else {
              echo "Erro na inserção: " . print_r($stmt->errorInfo(), true);
          }
      }
  
      public function atualizarNoBanco($conn) {
          $sql = "UPDATE subperfis SET nome = :nome, avatar = :avatar WHERE id = :id";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':nome', $this->nome);
          $stmt->bindParam(':avatar', $this->avatar);
          $stmt->bindParam(':id', $this->id);
          $stmt->execute();
      }
  
      public function excluirDoBanco($conn) {
          $sql = "DELETE FROM subperfis WHERE id = :id";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':id', $this->id);
          $stmt->execute();
      }
  }
  
  
  ?>