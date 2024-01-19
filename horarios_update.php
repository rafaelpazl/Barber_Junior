<?php

// Conectar ao banco de dados
include_once('config.php');
$conn = $conexao;

// Definir a data atual
$data_atual = date('Y-m-d H:i:s');

// Executar a consulta SQL DELETE para excluir horários de dias anteriores
$sql = "DELETE FROM horarios WHERE date_hora < '$data_atual'";
mysqli_query($conn, $sql);

echo "Os horários foram deletados com sucesso!";

// Obter a data atual
$data_atual = date('Y-m-d');

// Definir o intervalo de dias para gerar horários (7 dias)
$intervalo_dias = 15;

// Definir os horários de acordo com cada dia da semana
$horarios = array(
    'tuesday' => array('07:30','08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'),
    'wednesday' => array('07:30','08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'),
    'thursday' => array('07:30','08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'),
    'friday' => array('07:30','08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'),
    'saturday' => array('07:00','07:30','08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'),
    'sunday' => array('08:00','09:00','10:00','11:00','12:00','13:00','14:00')
);

// Gerar os horários de acordo com os dias da semana
for ($i = 0; $i < $intervalo_dias; $i++) {
    // Obter a data para o dia atual
    $data = date('Y-m-d', strtotime("+$i day", strtotime($data_atual)));
    
    // Verificar se o dia da semana é válido
    $dia_semana = strtolower(date('l', strtotime($data)));
    if ($dia_semana == 'monday') {
        // Ignorar a segunda-feira
        continue;
    }
    
    // Verificar se o dia da semana possui horários definidos
    if (isset($horarios[$dia_semana])) {
        // Gerar os horários para o dia atual
        foreach ($horarios[$dia_semana] as $hora) {
            $data_hora = "$data $hora";
            $sql = "INSERT INTO horarios (date_hora, reservado) VALUES ('$data_hora', 0)";
            mysqli_query($conn, $sql);
        }
    }
}

// Verificar erros na execução das consultas
if (mysqli_error($conn)) {
    die("Erro na execução das consultas: " . mysqli_error($conn));
}

// Desconectar do banco de dados
mysqli_close($conn);
echo "Os horários foram criados com sucesso!";
?>