<?php
    session_start();
    include_once('config.php');
    if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }    
        $logado = $_SESSION['email'];

        $sql = "SELECT * FROM horarios ORDER BY id DESC";
        $result = $conexao->query($sql);
?>

<html>
<head>
  <title>Agendamento</title>
</head>
<body>
  <h1>Agendamento</h1>
  <form method="post" action="agendar.php">
   
    <label for="hora">Horarios disponíveis</label>
    <select id="hora" name="hora">
      <?php include 'horarios_disponiveis.php'; ?>
    </select>
    <br>
    <input type="text" value="$logado" name="logado" hidden>
    <input type="submit" value="Agendar">
  </form>
</body>
</html>


