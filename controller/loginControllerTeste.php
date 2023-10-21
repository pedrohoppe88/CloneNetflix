<?php
require_once "../model/conexaoPDO.php";

function checkLogin($conn, $email, $password) 
{
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
        if (password_verify($password, $user['senha'])) { // verificando a senha que está no banco
            return $user;
        } else {
            return false; 
        }
    } else {
        return false; 
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $conexao = new Conexao();
    $conn = $conexao->getConnection();

    $user = checkLogin($conn, $email, $password);

    if ($user) {
        // Iniciar sessão e redirecionar
        session_start();
        $_SESSION["login"] = $user;
        header("Location: ../perfil.php");
    } else {
        echo "Detalhes de login inválidos!";
    }
}
?>
