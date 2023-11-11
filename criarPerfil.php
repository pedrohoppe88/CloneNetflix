<!DOCTYPE html>
<html>
<head>
    <title>Criar Subperfil</title>
</head>
<body>
    <h1>Criar Subperfil</h1>
    <form action="controller/perfilController" method="post">
        <label for="nome">Nome do Subperfil:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="avatar">Link do Avatar:</label>
        <input type="text" name="avatar" id="avatar" required>
        <br>
        <button type="submit">Criar Subperfil</button>
    </form>
</body>
</html>