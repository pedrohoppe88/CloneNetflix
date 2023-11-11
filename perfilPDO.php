<?php
      session_start();
      include_once "model/conexaoPDO.php";      

      if(isset($_SESSION['login']) && !empty($_SESSION['login']))
      {
            $user_id = $_SESSION['login'];

            $conexao = new Conexao();
            $conn = $conexao->getConnection();

            $stmt = $conn->prepare("SELECT * FROM subperfis WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            $i = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            foreach($i as $listar)
            {
                  echo "ID do Perfil: " . $listar['id'] . "<br>";
                  echo "Nome do Perfil: " . $listar['nome'] . "<br>";
                  echo "Avatar do Perfil: " . $listar['avatar'] . "<br>";
                  echo "<br>";
            }

      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
</body>
</html>