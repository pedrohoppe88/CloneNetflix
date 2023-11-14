<?php
require_once "verificaPerfilController.php";
require_once "perfil.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['login'];
    $nome = $_POST['nome'];
    $avatar = $_POST['avatar'];

    $conexao = new Conexao();
    $conn = $conexao->getConnection();

    $subperfil = new Subperfil();
    $subperfil->salvarNoBanco($user_id, $nome, $avatar);
    header("location: ../perfilPDO");
}
?>