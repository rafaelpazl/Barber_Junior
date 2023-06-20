<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}   

  $logado = $_SESSION['email'];
  $conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Buscar todos os horários
$sqlHorarios = "SELECT date_hora FROM horarios";
$resultHorarios = mysqli_query($conn, $sqlHorarios);

$horariosDisponiveis = array();
while ($row = mysqli_fetch_assoc($resultHorarios)) {
    $hora = $row['date_hora'];
    
    // Verificar se o horário está indisponível
    $sqlIndisponivel = "SELECT id FROM horarios WHERE date_hora = '$hora' AND reservado = 1";
    $resultIndisponivel = mysqli_query($conn, $sqlIndisponivel);
    
    // Adicionar apenas horários disponíveis ao array
    if (mysqli_num_rows($resultIndisponivel) == 0) {
        $horariosDisponiveis[] = $hora;
    }
}

// Exibir os horários disponíveis
foreach ($horariosDisponiveis as $hora) {
    echo "<option value='$hora'>$hora</option>";
}

mysqli_close($conn);



?>