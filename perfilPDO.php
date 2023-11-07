<?php
require_once 'verificaPerfilController.php'

    if(!isset($_SESSION['login']))
    {
            header('location: fodase.php');
            exit;
    }

    if(isset($_SESSION['perfis']))
    {

        $perfis = $_SESSION['perfis'];
        foreach ($perfis as $perfil) {
            echo "Nome: " . $perfil['nome'] . "<br>";
            echo "URL: " . $perfil['email'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum perfil encontrado.";
    }

?>
