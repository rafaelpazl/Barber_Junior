<?php

include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha',telefone='$telefone' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');
?>