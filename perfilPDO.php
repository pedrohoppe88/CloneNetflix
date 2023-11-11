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
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
         body {
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
            display: flex;
            justify-content: center;
            width: 200px;
            height: 200px;
            border-radius: 0px;
            object-fit: cover;
            border: 1px solid #fff;
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

        #addProfileBtn {
            margin-left: 20px;
        }

        svg {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 120px;
            height: 200px;
            margin-left: 15px;
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

        <a href="criarPerfil.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>