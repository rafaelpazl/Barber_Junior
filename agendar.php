<?php
session_start();
include_once('config.php');

// Conectar ao banco de dados
$conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b5cb88ee843bc5', 'daa1987b', 'heroku_0619edf52a077e1');

// Obter a data e hora selecionada pelo usuário
$email = $_POST['logado'];
$hora = $_POST['hora'];

// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 1 and email = '$email' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);

// Desconectar do banco de dados
mysqli_close($conn);
header('location:sistemausuario.php')
?>
