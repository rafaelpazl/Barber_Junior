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

// Obter a data e hora selecionada pelo usuário
$hora = $_POST['hora'];
$servico = $_POST['servico'];
$logado = $_POST['logado'];

// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 1 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET email = '$logado' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);

// Desconectar do banco de dados
mysqli_close($conn);
header("Location: pagamento.php?servico=$servico");
?>
