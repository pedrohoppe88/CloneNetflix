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

<html>
<body>
    <h1><?php echo $perfil['nome']; ?></h1>
    <p>Idade: <?php echo $perfil['idade']; ?></p>
    <p>Filmes:</p>
    <ul>
        <?php foreach ($perfil['filmes'] as $filme) : ?>
            <li><?php echo $filme; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>