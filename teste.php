
<?php
$perfis = array(
  array(
      "nome" => "Usuário 1",
      "filmes" => array("Matrix", "Inception", "Avatar"),
      "genero" => array(
          "ação" =>array("https://yt3.ggpht.com/a/AATXAJx1XwNi6jt6ikxhw0wrlBd9MGkcRDI5DzweQA=s900-c-k-c0xffffffff-no-rj-mo", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.jyoTSPJvg4wI6o7ZPHh_twHaLH%26pid%3DApi&f=1&ipt=2ea27a8b111a0de91bb1b808cc3fe3b7adf79f00c5652032f4f760bde7e9a0fe&ipo=images", "Avatar", "Ação Movie 4", "Ação Movie 5"),
          "ficção científica" =>array("https://i.pinimg.com/originals/9b/ac/5d/9bac5d7adcd98ea15cb4ca8304e3fda3.jpg", "Ficção Movie 2", "Ficção Movie 3", "Ficção Movie 4", "Ficção Movie 5")
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
