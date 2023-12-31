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
        
        if (password_verify($password, $user['senha'])) { 
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
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION["login"] = $user['id'];

        if (isset($lembrar)) {
            if ($lembrar == 1) {
                setcookie('email', $email, time() + (86400 * 7), "/"); // 86400 = 1 day
            }
        } else {
            if (isset($_COOKIE['email'])) {
                setcookie("email", "", time() - 3600);
            }
        }
        
        header("Location: ../perfilPDO.php");
    } else {
        echo "Detalhes de login inválidos!";
    }
}
?>