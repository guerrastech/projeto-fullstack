<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM alunos WHERE matricula LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%'";
        $result = $conexao->query($sql);
    }else{
        $sql = "SELECT * FROM alunos ORDER BY nome";
        $result = $conexao->query($sql);
    }

   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=1">
    <title>Sistema</title>
</head>



<body class="tela-sistema">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA DO GN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>

    <?php
        echo "<h1>Bem Vindo <u>$logado</u></h1>";
    ?>


    <div class="box-searche">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button class="btn btn-primary" onclick="searchData()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>
    </div>


<div class="m-5">

<table class="table text-white table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">rg</th>
      <th scope="col">email</th>
      <th scope="col">nascimento</th>
      <th scope="col">sexo</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
      <th scope="col">endereco</th>
    </tr>
  </thead>
  <tbody>
   <?php
   
   while($user_data = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $user_data['matricula'] . "</td>";
    echo "<td>" . $user_data['nome'] . "</td>";
    echo "<td>" . $user_data['rg'] . "</td>";
    echo "<td>" . $user_data['email'] . "</td>";
    echo "<td>" . $user_data['data_nasc'] . "</td>";
    echo "<td>" . $user_data['sexo'] . "</td>";
    echo "<td>" . $user_data['cidade'] . "</td>";
    echo "<td>" . $user_data['estado'] . "</td>";
    echo "<td>" . $user_data['endereco'] . "</td>";
    echo "<td> 

        <a class = 'btn btm-sm btn-primary' href = 'edit.php?id=$user_data[matricula]'>
        <svg xmlns=http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
      </svg>
        </a>
    

        <a class = 'btn btm-sm btn-danger' href = 'delete.php?id=$user_data[matricula]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi' bi-trash-fill 'viewBox='0 0 16 16'>
            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
            </svg>
        </a>
    </td>";
   }
   
   ?>
  </tbody>
</table>
</div>

</body>
    <script src="scrpit.js"></script>
</html> 