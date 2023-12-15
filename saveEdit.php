<?php


    include_once('config.php');

    if(isset($_POST['update'])){
                $id = $_POST['id']; 
                $nome =  $_POST['nome'];
                $rg = $_POST['rg'];
                $email = $_POST['email'];
                $genero = $_POST['sexo'];
                $nascimento = $_POST['data_nasc'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $endereco = $_POST['endereco'];

                $sqlUpdate = "UPDATE alunos SET nome = '$nome', rg = '$rg', email = '$email', data_nasc = '$nascimento', sexo = '$genero', cidade = '$cidade', estado = '$estado', endereco = '$endereco'
                WHERE matricula = '$id'"  ;

                $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');
    

?>