<?php
session_start();
include_once('config.php');


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

