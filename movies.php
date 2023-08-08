
<?php
      require_once './controller/autenticationController.php';
?>

<?php

$perfis = array(
    array(
        "nome" => "Usuário 1",
        "capa" => "https://occ-0-1356-559.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABXnUGZEm8bksAzxGoiJHhds3hfjqcF8yAGRDzhiKlroTBwI9EN3dUHB_yVqe3VIJAefcCDZG2w-3PWvR8-noL8dmCJeHV46YqHQ7.jpg?r=fa1",
        "capaName" => "Tropa de Elite", 
        "filmes" => array("Matrix", "Inception", "Avatar"),
        "genero" => array(
            "ação" =>array("https://yt3.ggpht.com/a/AATXAJx1XwNi6jt6ikxhw0wrlBd9MGkcRDI5DzweQA=s900-c-k-c0xffffffff-no-rj-mo", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "https://yt3.ggpht.com/a/AATXAJx1XwNi6jt6ikxhw0wrlBd9MGkcRDI5DzweQA=s900-c-k-c0xffffffff-no-rj-mo"),
            "ficção científica" =>array("https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg")
        )
    ),
    array(
        "nome" => "Usuário 2",
        "capa" => "https://occ-0-1356-559.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABfldUgU7hEYk1wUdc63pLopWq5lliudOErCl66ewZbmDGQnFOYy6KQ2UbTpVIJxdvt7TLjbymkzXZQSZcEzdxGPG6g-7s9gEue2b.jpg?r=914",
        "capaName" => "Romance não sei o nome", 
        "filmes" => array("Titanic", "Forrest Gump", "The Shawshank Redemption"),
        "genero" => array(
            "drama" => array("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F2b%2Fc7%2F69%2F2bc769af019f122e8edaf7a8e13d5eee.jpg&f=1&nofb=1&ipt=8686c19a696fc0b98186ecd9d9b5a4c3efd1363b5c388a20197ad92256dd5da1&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fconteudo.imguol.com.br%2Fc%2Fentretenimento%2F2014%2F10%2F29%2Fposter-de-o-melhor-de-mim-1414609440210_657x959.jpg&f=1&nofb=1&ipt=9992c5984935c2da6c879a189d56aedb1d9e3e142da244aa99e8e92989fe569d&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi2.wp.com%2Fwww.cinemadebuteco.com.br%2Fwp-content%2Fuploads%2F2016%2F06%2Fmelhores-filmes-de-drama-dos-anos-2000-a-corrente-do-bem.jpg&f=1&nofb=1&ipt=48cc37ac92f4f42395e70c03b4fe5432cb40705f4e7f18c9d988e52a6580eb6e&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F7f%2F85%2F1a%2F7f851adb28f295c8148de598ba077bd3.jpg&f=1&nofb=1&ipt=772efd9e9ea2bae0881d0c4ce51eeb3ccc56361bbc0ae40607c60e89756abe87&ipo=images", "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fbr.web.img2.acsta.net%2Fpictures%2F20%2F07%2F09%2F18%2F25%2F3014499.jpg&f=1&nofb=1&ipt=20fa6db21b1fae938aae9e33171f0656a9233577809f768435175801d139afdf&ipo=images"),
            "romance" => array("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.falauniversidades.com.br%2Fwp-content%2Fuploads%2F2020%2F05%2F04174820%2Fricos-de-amor-poster.jpg&f=1&nofb=1&ipt=3bdb0532f87d7dc30f55ae30cb7f5286b602bfba3fe07bd7044716add13f56c6&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.stealthelook.com.br%2Fwp-content%2Fuploads%2F2019%2F06%2Fsimplesmente-acontece-20190607132726.jpg&f=1&nofb=1&ipt=0cfe18c51193fe29eb73bf8714c40876f1f4540354dc5012ab484a12bf5c777c&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.cinemadebuteco.com.br%2Fwp-content%2Fuploads%2F2014%2F11%2FPoster-Sera-Que.jpg&f=1&nofb=1&ipt=c67b90c0a98b445cc433e52d4e8242521f02d0f539898b939315e7ab37e3af0f&ipo=images", "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-FMXzjVBuH9I%2FT2fWGuw8rCI%2FAAAAAAAAAmE%2FG6sTogBrr7c%2Fs1600%2Fderepentec389amor3.jpg&f=1&nofb=1&ipt=a965df201f825a6aef70ed0e1d89512fda967c3a598ea435c1a11a2393e37e2c&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-J9-zQ4fW3fI%2FWx54_XwEF5I%2FAAAAAAAAZcI%2FTfUjIWNn9CUB5NkDEDYEFxheGZF0P0pIgCLcBGAs%2Fs1600%2Ffilmes%252Bpro%252Bdia%252Bdos%252Bnamorados.png&f=1&nofb=1&ipt=c00ebc09d9e88bf25784776cc69477d8531aa7eded654f446c9ab34463218302&ipo=images")
        )
    ),
    array(
        "nome" => "Perfil Infantil",
        "capa" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoY4amkykhIr1uLI3tkq13DQPUuOwti7457fBhmIp2URLgkY1F_tpbChSBPHeXDZmNFE0&usqp=CAU",
        "capaName" => "nemo", 
        "idade" => 10,
        "filmes" => array("Frozen", "Toy Story", "The Lion King"),
        "genero" => array(
            "infantil" => array("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2F82%2F23%2F2d%2F82232de56334058744a1b6584b4456da.jpg&f=1&nofb=1&ipt=503c6b67c7e71d0388dd480cf0f83362ca196c44e21af8c903ebc1306cff4334&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2Ff0%2F30%2Fb8%2Ff030b87a5082cc5613cbadfcb3421a8f--trailers.jpg&f=1&nofb=1&ipt=cca765190e2534844a3020519413ab17b8bb9566629cfa7163a6034914833b47&ipo=images", "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fbr.web.img3.acsta.net%2Fpictures%2F20%2F02%2F03%2F15%2F22%2F4954456.jpg&f=1&nofb=1&ipt=b82c847e95fb3164565a45dc75df5607917f696958ac42795fa1af5373e9a568&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs2.glbimg.com%2FAmbdg5ouD6Hx9YxuQhMUmkWy5-I%3D%2F362x536%2Fi.glbimg.com%2Fog%2Fig%2Finfoglobo1%2Ff%2Foriginal%2F2020%2F10%2F06%2F2019-657-paramount-dez-o-lorax-em-busca-da-trufula-perfeita-poster.jpg&f=1&nofb=1&ipt=3e5aac1110b6050b531aa91023eb562f87e3c790326d0424364629222534f424&ipo=images", "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-5Jjrhq_AVMk%2FTcghkOD36DI%2FAAAAAAAAAi4%2FS16-H6TvOc4%2Fw1200-h630-p-k-no-nu%2FOs-Sem-Floresta.jpg&f=1&nofb=1&ipt=944795a4925c05e8ce4f5fd6d617ac96a246d28c7c42fbed3f32c750a400303a&ipo=images"),
            "animação" => array("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2Fd1%2F69%2F8b%2Fd1698b81f6a854f161aab23498d77437.jpg&f=1&nofb=1&ipt=d21c15eb9f264580bb8814410996d4dc6635bc5d71729a93c58d7175f8ee906b&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fgeekblog.com.br%2Fwp-content%2Fuploads%2F2020%2F08%2FYour-Name.jpg&f=1&nofb=1&ipt=9eb5191a75de92c974554652b4abf7379b44180d85c7985da8af87a3f1b723db&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F03%2F54%2F34%2F03543430d444d4242b9b71bb840401fc.jpg&f=1&nofb=1&ipt=58cc20426aa2ffff184365a62b834aeb721af3b62dd86cf471c1b9a32b584479&ipo=images", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.nKvIff0f2rQeIzeBZ8XHGwHaD4%26pid%3DApi&f=1&ipt=478ae4963f87c412bdf4553e377f67557db50b1ee2a93d269b1635518a94075b&ipo=images", "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.garotasgeeks.com%2Fwp-content%2Fuploads%2F2017%2F09%2Fkoe-no-katachi.jpg&f=1&nofb=1&ipt=b6cfc817ce4713e552f3b147641964cf3b8f8b2a069c63560351d4521b81775c&ipo=images")
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
            <h2>NETFLIX</h2>
          </div>

          <div>
            <nav>
              <a href="#">Inicio</a>
              <a href="#">Contas</a>
              <a href="#">Contato</a>
              <a href="#">sair</a>
            </nav>
          </div>
        </div>
      </header>
    </div>

    <div class="back-image" style="background-image: url('<?php echo $perfil['capa']; ?>');">
    <div class="alingCapa">
      <main class="mainFilmes">
      <h1 class="perfil-nome"><?php echo $perfil['capaName']; ?></h1>
        <p class="descripccion">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure
          at, est mollitia quaerat ipsum, facilis, inventore numquam nesciunt
          impedit omnis vero. Provident quae voluptate id facere repellat harum
          autem
        </p>
        <div class="alingbnt">
        <a class="btn btn-primary boton" href="#" role="button">inicia</a>
        <a class="btn btn-primary boton" href="#" role="button">mais informações</a>
        </div>
      </main>
    </div>
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