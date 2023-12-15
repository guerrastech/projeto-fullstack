<?php

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM alunos WHERE matricula = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM alunos WHERE matricula = $id";
            $resultDelete = $conexao->query($sqlDelete);

        }
    }
            header('Location: sistema.php');

?>