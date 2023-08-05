
<?php
      require_once './controller/autenticationController.php';
?>

<?php

$perfis = array(
    array(
        "nome" => "Usuário 1",
        "filmes" => array("Matrix", "Inception", "Avatar"),
        "genero" => array(
            "ação" =>array("https://yt3.ggpht.com/a/AATXAJx1XwNi6jt6ikxhw0wrlBd9MGkcRDI5DzweQA=s900-c-k-c0xffffffff-no-rj-mo", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://yt3.ggpht.com/a/AATXAJx1XwNi6jt6ikxhw0wrlBd9MGkcRDI5DzweQA=s900-c-k-c0xffffffff-no-rj-mo"),
            "ficção científica" =>array("https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg")
        )
    ),
    array(
        "nome" => "Usuário 2",
        "filmes" => array("Titanic", "Forrest Gump", "The Shawshank Redemption"),
        "genero" => array(
            "drama" => array("Titanic", "Forrest Gump", "The Shawshank Redemption", "Drama Movie 4", "Drama Movie 5"),
            "romance" => array("Romance Movie 1", "Romance Movie 2", "Romance Movie 3", "Romance Movie 4", "Romance Movie 5")
        )
    ),
    array(
        "nome" => "Perfil Infantil",
        "idade" => 10,
        "filmes" => array("Frozen", "Toy Story", "The Lion King"),
        "genero" => array(
            "infantil" => array("Frozen", "Toy Story", "The Lion King", "Infantil Movie 4", "Infantil Movie 5"),
            "animação" => array("Animação Movie 1", "Animação Movie 2", "Animação Movie 3", "Animação Movie 4", "Animação Movie 5")
        )
    )
);

// Pega o ID do perfil da query string
$perfilId = $_GET['id'];

// Obtem o perfil correspondente
$perfil = $perfis[$perfilId];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu deus,me ajuda</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap"rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styleMovies.css">
  </head>

  <body>

    <div class="contenedor">
      <header>
        <div class="header">
          <div>
            <h2>NETFLIX DO BRAZIL :)</h2>
          </div>

          <div>
            <nav>
              <a href="#">Inicio</a>
              <a href="#">Peliculas</a>
              <a href="#">Estrenos</a>
              <a href="#">Contacto</a>
            </nav>
          </div>
        </div>
      </header>
    </div>

    <div class="back-image">
      <main class="contenedor">
        <h1>Oppenheimerr</h1>
        <p class="descripccion">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure
          at, est mollitia quaerat ipsum, facilis, inventore numquam nesciunt
          impedit omnis vero. Provident quae voluptate id facere repellat harum
          autem
        </p>
        <button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
        <button role="button" class="boton"><i class="fas fa-info-circle"></i>Mas informacion</button>
      </main>
    </div>

    <div class="filmes">
<?php foreach ($perfil['genero'] as $genero => $filmes) : ?>
    <h2 class="genero"><?php echo $genero; ?></h2>
    <div class="suggestSection contenedor">
        <div class="suggestUpper">
            <div class="owl-carousel">
                <?php foreach ($filmes as $filme) : ?>
                    <div class="col">
                        <img src="<?php echo $filme; ?>" class="img-fluid" alt="Filme imagem">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div> 
<?php endforeach; ?>
</div>

    <script>
      $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
              items: 5
          });
      });
    </script>
    </script>

  </body>
</html>