<?php

require_once 'usuario.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $email = $_POST['email'];

    $user = new Usuario();

    if ($user->register($email, $password)) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro ao registrar usuário.";
    }
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
            <input type="password" name="password" required> 
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>