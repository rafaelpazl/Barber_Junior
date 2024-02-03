<?php

include_once('../assets/php/config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $vip = $_POST['vip'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha',telefone='$telefone',vip='$vip' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');
?>