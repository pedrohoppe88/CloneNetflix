<?php
$perfis = array(
    array(
        "nome" => "Usuário 1",
        "idade" => 25,
        "filmes" => array("Matrix", "Inception", "Avatar")
    ),
    array(
        "nome" => "Usuário 2",
        "idade" => 30,
        "filmes" => array("Titanic", "Forrest Gump", "The Shawshank Redemption")
    ),
    array(
        "nome" => "Perfil Infantil",
        "idade" => 10,
        "filmes" => array("Frozen", "Toy Story", "The Lion King")
    )
);

// Pega o ID do perfil da query string
$perfilId = $_GET['id'];

// Obtem o perfil correspondente
$perfil = $perfis[$perfilId];
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
        <?php echo $perfil['nome']; ?></h1>
        <?php foreach ($perfil['filmes'] as $filme) : ?>

            <nav>
                <ul>
                    <li><?php echo $filme; ?></li>
                </ul>
            </nav>

            <div class="container">
  <div class="row flex-nowrap overflow-auto">
    <div class="col-4">
    <img src="imagem2.jpg" class="img-fluid" alt="Imagem 2">
    </div>
    <div class="col-4">
      <img src="imagem2.jpg" class="img-fluid" alt="Imagem 2">
    </div>
    <div class="col-4">
      <img src="imagem3.jpg" class="img-fluid" alt="Imagem 3">
    </div>
    <!-- Adicione mais divs col-4 conforme necessário -->
  </div>
</div>
            
        
        <?php endforeach; ?>
</body>
</html>
