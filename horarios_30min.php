<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}   

  $logado = $_SESSION['email'];
// Conectar ao banco de dados
$conn = $conexao;



  // Buscar os horários disponíveis para a data selecionada
  $sql = "SELECT date_hora FROM horarios WHERE reservado = 0";
  $result = mysqli_query($conn, $sql);

  // Exibir os horários disponíveis
  while ($row = mysqli_fetch_assoc($result)) {
    $hora = $row['date_hora'];
    echo "<option value='$hora'>$hora</option>";
  }


// Desconectar do banco de dados
mysqli_close($conn);
?>

