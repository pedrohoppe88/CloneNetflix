<?php
require_once '../model/conexaoPDO.php';
require_once 'loginControllerTeste.php';

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: fodase.php");
    exit;
}

$user_id = $_SESSION['login'];

$stmt = $conn->prepare("SELECT * FROM subperfis WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $perfis = $stmt->fetchAll();

    $_SESSION['perfis'] = $perfis;

    header("Location: exibir_perfis.php");
    exit();
} else {
}
?>
