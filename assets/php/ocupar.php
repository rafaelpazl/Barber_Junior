<?php
if(!empty($_GET['date_hora'])){
    include_once('config.php');
    $hora = $_GET['date_hora'];

// Conectar ao banco de dados
$conn = $conexao;

// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 1 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET nome = 'ocupado' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);}

// Desconectar do banco de dados
mysqli_close($conn);

header('location: ../../pages/sistema.php')
?>
