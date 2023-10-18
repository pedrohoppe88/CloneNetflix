<?php

require_once '../usuario.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Validação básica
    if (empty($email) || empty($password))
    {
        die("Dados inválidos.");
    }

    $user = new Usuario();

    if ($user->register($email, $password)) {
        header('location:../cadastro.php'); // Redirecione para uma página de sucesso
       
    } else {
        header("Location: erro_registro.php"); // Redirecione para uma página de erro
        exit();
    }
}

?>
