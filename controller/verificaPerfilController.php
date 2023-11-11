<?php
include_once "../model/conexaoPDO.php";

session_start();
if (isset($_SESSION['login']) && !empty($_SESSION['login']))
{
    $user_id = $_SESSION['login'];

    $conexao = new Conexao();
    $conn = $conexao->getConnection();

    $stmt = $conn->prepare("SELECT * FROM subperfis WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($perfil);
    } else {
        echo "Nenhum subperfil encontrado para este usuário.";
    }
} else {
    echo "Sessão 'login' não está definida ou é vazia.";
}

?>