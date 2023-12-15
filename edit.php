<?php

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM alunos WHERE matricula = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){

                $nome =  $user_data['nome'];
                $rg = $user_data['rg'];
                $email = $user_data['email'];
                $genero = $user_data['sexo'];
                $nascimento = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];

            }
            

        }else{
            header('Location: sistema.php');
        }
  
    }else{
        header('Location: sistema.php');
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
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Cadatrar</b></legend><br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>" required>
                    <label for="nome"  class="label_input">Nome Completo</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="rg" id="senha" class="inputUser" value="<?php echo $rg; ?>" required>
                    <label for="rg" class="label_input">RG
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" required>
                    <label for="email" class="label_input">Email
                    </label>
                </div>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" <?php echo ($genero === 'feminino') ? 'checked' : ''; ?> required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($genero === 'masculino') ? 'checked' : ''; ?> required>
                <label for="masculino">Masculino</label><br>
                <br>

                    <label for="nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento; ?>" required>

                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade; ?>" required>
                    <label for="cidade" class="label_input">Cidade
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado; ?>" required>
                    <label for="estado" class="label_input">Estado
                    </label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco; ?>" required>
                    <label for="endereco" class="label_input">Endereço
                    </label>
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Atualizar">
            </fieldset>
        </form>
    </div>
</body>
<a href="sistema.php">Voltar</a>
</html>