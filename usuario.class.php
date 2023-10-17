<?php
require_once 'model/conexaoPDO.php';
class Usuario
{
    private $conn;

    public function __construct()
    {
        $db = new Conexao();
        $this->conn = $db->getConnection();
    }

    public function register($email, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        try {
            // Inserindo na tabela de usuários
            $query = $this->conn->prepare("INSERT INTO usuarios (email, password) VALUES (:email, :password)");
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $hashed_password);
            
            $query->execute();
            
            //a parte de baixo não está funcionando, provavel que o banco esteja errado.

            //Recuperando o ID do usuário inserido para criar a conta
            $usuario_id = $this->conn->lastInsertId();

            // Inserindo na tabela de contas
            $tipo_assinatura = 'basic';  // teste: pode ser ajustado conforme o tempo
            $data_criacao = date("Y-m-d");

            $queryConta = $this->conn->prepare("INSERT INTO contas (usuario_id, data_criacao, tipo_assinatura) VALUES (:usuario_id, :data_criacao, :tipo_assinatura)");
           $queryConta->bindParam(':usuario_id', $usuario_id);
           $queryConta->bindParam(':data_criacao', $data_criacao);
            $queryConta->bindParam(':tipo_assinatura', $tipo_assinatura);
            
            $queryConta->execute();

           return true;

        } catch (PDOException $e) {
            return false;
        }
    }

}

?>