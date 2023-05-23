<?php
// Conectar ao banco de dados
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Verificar a conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Obter a data atual
$data_atual = date('Y-m-d');

// Definir o intervalo de dias para gerar horários (7 dias)
$intervalo_dias = 7;

// Definir os horários de acordo com cada dia da semana
$horarios = array(
    'tuesday' => array('07:30','08:00','08:30','09:00','09:30','10:00','10:30', '14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30'),
    'wednesday' => array('07:30','08:00','08:30','09:00','09:30','10:00','10:30', '14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30'),
    'thursday' => array('07:30','08:00','08:30','09:00','09:30','10:00','10:30', '13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30'),
    'friday' => array('07:30','08:00','08:30','09:00','09:30','10:00','10:30', '13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30'),
    'saturday' => array('07:00', '07:30','08:00','08:30','09:00','09:30','10:00','10:30', '13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30'),
    'sunday' => array('08:30','09:00','09:30','10:00','10:30', '13:00','13:30','14:00')
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

?>
