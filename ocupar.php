<?php
if(!empty($_GET['date_hora'])){
    include_once('config.php');
    $hora = $_GET['date_hora'];

// Conectar ao banco de dados
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 1 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET email = 'ocupado' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);}

// Desconectar do banco de dados
mysqli_close($conn);

header('location:sistema.php')
?>
