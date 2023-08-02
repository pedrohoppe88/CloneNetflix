<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php
      require_once './controller/autenticationController.php';
?>

      <?php
      @session_start();
      echo ('bem vindo '. $_SESSION['login']);
?>

<?php
$perfis = array(
    array(
        "nome" => "Usuário 1",

        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"
    ),
    array(
        "nome" => "Usuário 2",
        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"
    ),
    array(
        "nome" => "Perfil Infantil",
        "imagem" => "https://i.pinimg.com/564x/b2/a0/29/b2a029a6c2757e9d3a09265e3d07d49d.jpg"
    )
);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="CSS/styleEscolha.css">
<title></title>

  <style>
    .profile img {
      width: 200px;
      height: 200px;
      margin-top: 200px;
    }

    h1{
      position: relative;
      top: 150px;
    }

  </style>

</head>
  <body>
    <div class="container text-center">
      <h1>Quem está assistindo?</h1>

            <?php foreach ($perfis as $perfilId => $perfil) : ?>

              <div class="container-profile d-flex justify-content-between">
              <div class="profile">
                  <a href="movies.php?id=<?php echo $perfilId; ?>">
                      <img src="<?php echo $perfil['imagem']; ?> " />
                  </a>
              <p>pessoa1</p>
              </div>

            <?php endforeach; ?>

      </div>
  </body>
</html>





