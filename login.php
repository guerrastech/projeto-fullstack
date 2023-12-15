<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body class="telaLogin">
    <a href="home.php">Voltar</a>
    <div class="dados-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" placeholder="Email" name="email">
            <br><br>
            <input type="password" name="senha" id="" placeholder="Senha">
            <br><br>
            <input class="inputSubimit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>