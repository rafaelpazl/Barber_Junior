<?php

// Conectar ao banco de dados
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');



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

