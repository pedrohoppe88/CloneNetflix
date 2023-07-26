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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="CSS/styleEscolha.css">
<title></title>
</head>
  <body>
    <div class="container text-center">
      <h1>Quem está assistindo?</h1>

      <div class="container-profile d-flex justify-content-between">
        <div class="profile">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/f9fa8a33850498.56ba69ac2cc3a.png" width="150px" />
          <p>José</p>
        </div>

        <div class="profile">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/f9fa8a33850498.56ba69ac2cc3a.png" width="150px" />
          <p>Fernanda</p>
        </div>

        <div class="profile">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/f9fa8a33850498.56ba69ac2cc3a.png" width="150px" />
          <p>João</p>
        </div>

        <div class="profile">
          <div class="add-icon">
            <svg viewBox="0 0 512 512" width="100" title="plus-circle">
              <path fill="#A2A1A1" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z" />
            </svg>
          </div>
          <p>Adicionar perfil</p>
        </div>

      </div>
      <div class="button-container">
        <button>GERENCIAR PERFIL</button>
      </div>

    </div>

  </body>
</html>