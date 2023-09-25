<?php

// Conectar ao banco de dados
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Definir a data atual
$data_atual = date('Y-m-d H:i:s');

// Executar a consulta SQL DELETE para excluir horários de dias anteriores
$sql = "DELETE FROM horarios WHERE date_hora < '$data_atual'";
mysqli_query($conn, $sql);

// Desconectar do banco de dados
mysqli_close($conn);

echo "Os horários foram deletados com sucesso!";