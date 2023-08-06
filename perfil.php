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
        "imagem" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fbd%2Fee%2F4c%2Fbdee4c328550aaf21aa9f43fd19e2136.png&f=1&nofb=1&ipt=6a551e1c1fb6f14febc6e40411aba0412b4c1dfc3cce26249ae8eff43397795e&ipo=images"
    ),
    array(
        "nome" => "Perfil Infantil",
        "imagem" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fih0.redbubble.net%2Fimage.618385909.1713%2Fflat%2C800x800%2C075%2Cf.u1.jpg&f=1&nofb=1&ipt=eee480a054d5caa57a3cf6ad653a1e499d180dd0a674bb60acbf57300b820686&ipo=images"
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
              <p><?php echo $perfil['nome']?></p>
              </div>

            <?php endforeach; ?>

      </div>
  </body>
</html>