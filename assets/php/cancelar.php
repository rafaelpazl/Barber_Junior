<?php
include_once('verify_user.php');
if(!empty($_GET['date_hora'])){
    include_once('config.php');
    $hora = $_GET['date_hora'];

    // Conectar ao banco de dados
    $conn = $conexao;

// Obter a data e hora selecionada pelo usuário


// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 0 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET nome = '' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET servico = 0 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);}

// Desconectar do banco de dados
mysqli_close($conn);

header('location: ../../pages/sistemausuario.php')
?>