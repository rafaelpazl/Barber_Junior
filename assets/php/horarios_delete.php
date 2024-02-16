<?php

// Conectar ao banco de dados
include_once('config.php');

$conn = $conexao;

// Definir a data atual
$data_atual = date('Y-m-d H:i:s', strtotime('-1 day'));



// Executar a consulta SQL DELETE para excluir horários de dias anteriores
$sql = "DELETE FROM horarios WHERE date_hora < '$data_atual'";
if (mysqli_query($conn, $sql)){
    echo "Os horários foram deletados com sucesso!";
} else{
    echo "Erro ao excluir horários expirados: " . mysqli_error($conn);
}

$conn = $conexao;
// Obter a data de hoje
$datahoje = date('Y-m-d');

// SQL para excluir datas expiradas
$sql = "UPDATE usuarios SET vip = '', qntdcortes = 0 WHERE 'data_fim' < '$datahoje'";
mysqli_query($conn, $sql);

// Executar a consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Assinaturas expirados aturalizadas com sucesso.";
} else {
    echo "Erro ao atualizar as assinaturas expiradas: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>