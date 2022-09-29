<?php

session_start(); // inicia todas as paginas e variavéis de inserção.
include_once 'conexao.php'; //inclusao do arq conexo no sistema

if(isset($_SESSION['login']) and isset($_SESSION['senha'])){

  $login=ucfirst($_SESSION['login']); //varial SESSION é parecida com a POST.

}
// else {
//   header('Location:login.php'); // envia para o local setado.
//   unset($_SESSION['login']); // Limpa os campos.
//   unset($_SESSION['senha']);
// }

$sql="SELECT * FROM alunos ORDER BY nome ASC"; // mostra todos os alunos em ordem crescente
$resultado = $conexao->query($sql); // executa a consulta do banco.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <title>Cadastro de Senha</title>
  <style>

    header h1{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: 600;
      color: orange;
    }
    .topo {
      color: white;
      display: flex;
      justify-content: space-around;


    }

    body {
      height: 100vh;

    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }

    .box {
      background: rgba(0, 0, 0, .5);
      border-radius: 10px;
      padding: 20px;
      width: auto;
      display: flex;
      justify-content: space-around;
    }
    .table{
      color: white;
    }
  </style>

</head>


<body class="bg-primary bg-gradient">

  <header class="navbar bg-dark navbar-dark topo">
    <a href="index.html"><img src="img/icons8-mulher-estudante-48.png" alt="icon"></a>


    <h1>SISTEMA DE CADASTRO ESCOLAR <br> <?php
    echo "Bem vindo ".$login;
    ?></h1>

    <a href="sair.php"><button class="btn btn-warning">Sair</button></a>
    
  </header>
  <main>
    <section class="box">
      
    <!-- <h1>Aguarde Site em Construção ⛑ 🚧 🏗</h1> -->
    <table class="table">
  <thead class="thead-light">
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Serie</th>
      <th scope="col">Matricula</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Escolaridade</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php

      while ($alunos=mysqli_fetch_assoc($resultado)){ //Quebra toda a variavel. Usada para grande estruturas.
        echo "<tr>";
          // echo"<td>".$alunos['id']."</td>";
          echo"<td>".ucfirst($alunos['nome'])."</td>";
          echo"<td>".$alunos['email']."</td>";
          echo"<td>".$alunos['serie']."</td>";
          echo"<td>".$alunos['matricula']."</td>";
          echo"<td>".$alunos['data_nasc']."</td>";
          echo"<td>".$alunos['escolaridade']."</td>";
          echo"<td>".$alunos['telefone']."</td>";
        echo "</tr>";
      }

    ?>

  </tbody>
</table>
    </section>
  </main>
  
</body>

</html>