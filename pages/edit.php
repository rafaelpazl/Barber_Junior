<?php
if (!empty($_GET['id'])) {
  include_once('../assets/php/config.php');
  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

  $result = $conexao->query($sqlSelect);

  if ($result->num_rows > 0) {

    while ($user_data = mysqli_fetch_assoc($result)) {
      $nome = $user_data['nome'];
      $email = $user_data['email'];
      $senha = $user_data['senha'];
      $telefone = $user_data['telefone'];
      $vip = $user_data['vip'];
    }
  } else {
    header('Location: sistema.php');
  }
} else {
  header('Location: sistema.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>barbaman</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
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
      flex-direction: column;
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

  <a href="sistema.php"><button>Voltar</button></a>
  <div class="box">
    <form action="../assets/php/saveEdit.php" method="POST">
      <fieldset>
        <legend><b>Fórmulário de Clientes</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
          <label for="nome" class="labelInput">Nome completo</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
          <label for="senha" class="labelInput">Senha</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="vip" id="vip" class="inputUser" value="<?php echo $vip ?>" required>
          <label for="vip" class="labelInput">Vip</label>
        </div>

        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        <br><br>
        <input type="submit" name="update" id="update">
      </fieldset>
    </form>
  </div>
</body>

</html>