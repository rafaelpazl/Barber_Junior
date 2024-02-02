<?php

// Conectar ao banco de dados
include_once('config.php');
$conn = $conexao;

// Definir a data atual
$data_atual = date('Y-m-d H:i:s');

// Executar a consulta SQL DELETE para excluir horários de dias anteriores
$sql = "DELETE FROM horarios WHERE date_hora < '$data_atual'";
mysqli_query($conn, $sql);

// Desconectar do banco de dados
mysqli_close($conn);

echo "Os horários foram deletados com sucesso!";
