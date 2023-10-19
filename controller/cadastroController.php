<?php

require_once '../usuario.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password))
    {
        die("Dados inválidos.");
    }

    $user = new Usuario();

    if ($user->register($email, $password)) {
        header('location:../cadastro.php'); 
       
    } else {
        header("Location: erro_registro.php");
        exit();
    }
}

?>
