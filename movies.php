<?php
session_start();
include_once "model/conexaoPDO.php";

if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    $user_id = $_SESSION['login'];

    $conexao = new Conexao();
    $conn = $conexao->getConnection();

    $stmt = $conn->prepare("SELECT Filmes.*, Categorias.Nome as CategoriaNome FROM Filmes
                            INNER JOIN Categorias ON Filmes.CategoriaID = Categorias.CategoriaID");
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Deus, Me Ajuda</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="CSS/styleMovies.css">
    <style>
        .navbar {
            margin-bottom: 0;
        }

        .filmes .col {
            text-align: center;
            margin-bottom: 30px;
        }

        .filmes img {
          width: 300px;
            max-width: 100%;
            height: auto;
            display: flex;
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <header class="mt-4 mb-4">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">NETFLIX</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="back-image" style="background-image: url('https://getwallpapers.com/wallpaper/full/8/8/0/184522.jpg');">
            <div class="alingCapa">
                <main class="mainFilmes">
                    <h1 class="perfil-nome">?</h1>
                    <p class="descripccion">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure at, est mollitia quaerat
                        ipsum, facilis, inventore numquam nesciunt impedit omnis vero. Provident quae voluptate id facere
                        repellat harum autem
                    </p>
                    <div class="alingbnt">
                        <a class="btn btn-primary boton" href="#" role="button">inicia</a>
                        <a class="btn btn-primary boton" href="#" role="button">mais informações</a>
                    </div>
                </main>
            </div>
        </div>

        <div class="row no-gutters filmes">
            <?php while ($filme = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div class="col-5 col-sm-3 col-md-1 col-lg-2">
                    <h2 class="genero"><?php echo $filme['CategoriaNome']; ?></h2>
                    <img src="<?php echo $filme['ImagemURL']; ?>" class="img-fluid" alt="<?php echo $filme['Nome']; ?>">
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 5
            });
        });
    </script>

</body>

</html>
