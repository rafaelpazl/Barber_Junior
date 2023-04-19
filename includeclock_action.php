<?php
// Conectar ao banco de dados

$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Definir as datas iniciais e finais
$data_inicial = date('Y-m-d');
$data_final = date('Y-m-d');

// Gerar horários para todas as datas das 09:00 às 19:00
$horarios = array();
for ($i = strtotime($data_inicial.' 09:00'); $i <= strtotime($data_final.' 19:00'); $i += 60*30) {
    $hora = date('Y-m-d H:i', $i);
    $horarios[] = $hora;
}

// Inserir os horários disponíveis na tabela "horarios"
foreach ($horarios as $hora) {
    $sql = "INSERT INTO horarios (date_hora, reservado) VALUES ('$hora', 0)";
    mysqli_query($conn, $sql);
}
echo "Os horários foram disponibilizados!";
// Desconectar do banco de dados
mysqli_close($conn);
?>

