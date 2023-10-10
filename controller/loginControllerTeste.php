<?php
include_once 'model/conexao.php';

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($user->registro($_POST["email"], $_POST["senha"])) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro ao registrar usuário.";
    }
}
?>