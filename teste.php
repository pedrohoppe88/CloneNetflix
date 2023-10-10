<?php
include 'model/Conexao.php'; // Supondo que a classe esteja no arquivo 'ConexaoMysql.php'

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $conexao = new ConexaoMysql();
    $conexao->Conectar();

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('{$email}', '{$senha}')";
    $conexao->Executar($sql);

    echo "Cadastro realizado com sucesso!";
    $conexao->Desconectar();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>