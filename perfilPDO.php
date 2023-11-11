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
                 // echo "ID do Perfil: " . $listar['id'] . "<br>";
                  //echo "Nome do Perfil: " . $listar['nome'] . "<br>";
                  //echo "Avatar do Perfil: " . $listar['avatar'] . "<br>";
                  //echo "<br>";
            }

      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
         body{
            padding: 0;
            background-color: #000;
            color: #fff;
            text-align: center;
         } 


        h1 {
            margin-top: 150px;
        }

        .container-profile {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .profile {
            margin: 0 20px;
        }

        .profile img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .profile img:hover {
            transform: scale(1.1);
        }

        .profile p {
            margin: 10px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Quem está assistindo?</h1>

    <div class="container-profile">
        <?php foreach ($i as $listar) : ?>
            <div class="profile">
                <a href="movies.php?id=<?php echo $listar['id']; ?>">
                    <img src="<?php echo $listar['avatar']; ?>" alt="<?php echo $listar['nome']; ?>">
                </a>
                <p><?php echo $listar['nome']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>