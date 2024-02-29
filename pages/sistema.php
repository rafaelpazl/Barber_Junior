<?php
include_once('../assets/php/config.php');
include_once('../assets/php/verify_user.php');



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BARBAMAN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7522102674262803"
     crossorigin="anonymous"></script>
</head>
<style>
  body {
    position: relative;
    overflow-x: hidden;
  }

  .containerr {

    background: black;
    padding: 1% 2%;
    width: 100vw;
  }

  .user {
    padding: 4px;
    background: #fff;
    font-weight: 600;
    border-radius: 10px;
  }

  button {
    padding: 4px;
    background: #fff;
    font-weight: 600;
    border-radius: 10px;
    border: blue;
  }

  .tabela {
    overflow-x: scroll;
  }

  h1 {
    text-align: center;
    margin-right: 50%;
    color: #fff;
    width: 100%;
  }

  .row {

    width: 100%;
  }


  .one {
    text-align: center;
  }

  .two .col {
    display: flex;
    justify-content: space-between;

  }

  body {
    position: relative;
    overflow-x: hidden;
  }

  .containerr {
    background: black;
    padding: 1% 2%;
    width: 100vw;
    overflow-x: hidden;
  }

  .user {
    padding: 4px;
    background: #fff;
    font-weight: 600;
    border-radius: 10px;
  }

  button {
    padding: 4px;
    background: #fff;
    font-weight: 600;
    border-radius: 10px;
    border: blue;
  }

  .tabela {
    overflow-x: auto;
  }

  h1 {
    text-align: center;
    margin-right: 50%;
    color: #fff;
    width: 100%;
  }

  .row {
    width: 100%;
  }

  .one {
    text-align: center;
  }

  .two .col {
    display: flex;
    justify-content: space-between;
  }

  @media (max-width: 576px) {
    .containerr {
      padding: 1% 1%;
    }

    h1 {
      margin-right: 0;
    }
  }

  @media (max-width: 768px) {
    .row.two .col {
      flex-direction: row;
    }
  }

  @media (max-width: 992px) {
    .containerr {
      padding: 1% 1.5%;
    }
  }

  @media (max-width: 1200px) {
    .containerr {
      padding: 1% 2%;
    }
  }

  @media (max-width: 1400px) {
    .containerr {
      padding: 1% 2.5%;
    }
  }

  @media (max-width: 1600px) {
    .containerr {
      padding: 1% 3%;
    }
  }

  @media (max-width: 1800px) {
    .containerr {
      padding: 1% 3.5%;
    }
  }

  /* Remover rolagem lateral */
  @media (max-width: 576px) {

    html,
    body {
      overflow-x: hidden;
    }
  }
</style>

<body>
  <div class="containerr">
    <div class="row one">
      <div class="col-md-12">
        <h1>PAINEL DE CONTROLE</h1>
      </div>
    </div>
    <div class="row two">
      <div class="col"><a href="../index.php"><button>Voltar</button><a>
            <a href="users.php"><button class='btn btn-light btn-sm'>Ver usuários</button></a>
            <a href="sistema.php"><button class='btn btn-light btn-sm'>Ver horários</button></a>
            <div class="user">
              <?php

              echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
          </svg> $userName";
              ?>
            </div>
      </div>
    </div>
  </div>

  <div class="tabela">
    <form method="post" action="../assets/php/ocupar_em_lote.php">
      <button class='btn btn-danger btn-sm' type="submit" name="submit">Ocupar Horários Selecionados</button>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Horário</th>
            <th scope="col">Reservado</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM horarios ORDER BY id ASC";
          $result = $conexao->query($sql);

          while ($user_data = mysqli_fetch_assoc($result)) {
            // Obter o nome correspondente ao email na tabela usuarios
            $name = $user_data['nome'];
            $sql_usuario = "SELECT nome FROM usuarios WHERE nome = '$name'";
            $result_usuario = $conexao->query($sql_usuario);

            // Verificar se há correspondência na tabela usuarios
            if ($result_usuario && mysqli_num_rows($result_usuario) > 0) {
              $nome_usuario = mysqli_fetch_assoc($result_usuario)['nome'];
            } else {
              $nome_usuario = "";
            }

            // Verificar se a coluna "reservado" é igual a 1 e a coluna "email" está vazia
            if ($user_data['reservado'] == 1 && empty($user_data['nome'])) {
              $user_data['nome'] = "OCUPADO";
            }

            echo "<tr>";
            echo "<td>" . $user_data['date_hora'] . "</td>";

            echo "<td>" . $user_data['nome'] . "</td>";
            echo "<td>
        <a class='btn btn-success btn-sm' href='../assets/php/cancelar_admin.php?date_hora=$user_data[date_hora]'>LIVRE</a>
        <a class='btn btn-danger btn-sm' href='../assets/php/ocupar.php?date_hora=$user_data[date_hora]'>OCUPADO</a>
        <input type='checkbox' name='selecionados[]' value='$user_data[date_hora]'>


    </td>";

            echo "</tr>";
          }
          ?>

        </tbody>
      </table>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>