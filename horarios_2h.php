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
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Buscar os horários indisponíveis
$sqlIndisponiveis = "SELECT id, date_hora FROM horarios WHERE reservado = 1";
$resultIndisponiveis = mysqli_query($conn, $sqlIndisponiveis);

// Armazenar os IDs dos horários indisponíveis em um array
$horariosIndisponiveis = array();
while ($row = mysqli_fetch_assoc($resultIndisponiveis)) {
    $id = $row['id'];
    $horariosIndisponiveis[] = $id;
}

// Exibir os horários disponíveis
$sqlDisponiveis = "SELECT id, date_hora FROM horarios WHERE reservado = 0";

// Verificar se há horários indisponíveis
if (!empty($horariosIndisponiveis)) {
    $primeiroIndisponivel = $horariosIndisponiveis[0];
    $idAnterior = $primeiroIndisponivel - 10 * 3;
    $sqlDisponiveis .= " AND id > $idAnterior";
}

$resultDisponiveis = mysqli_query($conn, $sqlDisponiveis);

// Exibir os horários disponíveis
while ($row = mysqli_fetch_assoc($resultDisponiveis)) {
    $hora = $row['date_hora'];
    echo "<option value='$hora'>$hora</option>";
}

// Desconectar do banco de dados
mysqli_close($conn);
