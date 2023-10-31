<?php
require_once '../model/conexaoPDO.php';
require_once '..loginControllerTeste.php';

if(!isset($_SESSION['login']))
{
    header("Location: fodase.php"); 
}

$user_id = $_SESSION['login'];

$stmt = $conn->prepare("SELECT * FROM subperfis WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

if($stmt->rowCount() > 0)
{
    $perfil = $stmt->fetch();
    header();
} else {
    
}

?>