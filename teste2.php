
<?php
      $filmes = array(
            "Ação" => array(
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg")
                ),
            
                "teste1" => array(
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                  array("titulo" => "Avengers: Endgame", 
                  "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg")
                  ),

                  "teste2" => array(
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"),
                        array("titulo" => "Avengers: Endgame", 
                "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg")
                        ),
        );

        ?>

<!DOCTYPE html>
<html>
<head>
    <title>Netflix</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styleMovies.css">

</head>
<body>
      <div class="teste">
    <?php foreach($filmes as $genero => $listaFilmes): ?>
      <div class="containerTeste">
        <h2 class="genero"><?= $genero ?></h2>
        <div class="owl-carousel">
            <?php foreach($listaFilmes as $filme): ?>
                <div class="col-md-3 teste">
                <img class="img-fluid" style="width: 300px; height:180px;" src="<?= $filme['imagem'] ?>" alt="<?= $filme['titulo'] ?>">
                  </div>
            <?php endforeach; ?>
        </div>

    <?php endforeach; ?>
    </div>

    

<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 6
    });
});
</script>
</body>
</html>