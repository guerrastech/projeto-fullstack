<?php

    if(isset($_POST['submit'])){
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Nascimento: ' . $_POST['nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: : ' . $_POST['endereco']);

        include_once('config.php');

        $nome =  $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['email'];
        $genero = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES('$nome', '$senha', '$email', '$telefone', '$genero', '$nascimento', '$cidade', '$estado', '$endereco')");

        header('Location: login.php');

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body class="tela-cadastro">
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Cadatrar</b></legend><br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome"  class="label_input">Nome Completo</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="label_input">Senha
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="label_input">Email
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="label_input">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <br>

                    <label for="nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="nascimento" id="nascimento" required>

                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="label_input">Cidade
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="label_input">Estado
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="label_input">Endereço
                    </label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</body>
<a href="home.php">Voltar</a>
</html>