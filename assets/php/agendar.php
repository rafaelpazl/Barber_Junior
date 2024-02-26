<?php
session_start();
include_once('config.php');
// Verifica se os cookies googleUserID e facebookUserID estão definidos
include_once('verify_user.php');
// Conectar ao banco de dados
$conn = $conexao;

// Obter a data e hora selecionada pelo usuário
$hora = $_POST['hora'];
$servico = $_POST['servico'];

// Atualizar o valor "reservado" para 1 na linha correspondente
$sql = "UPDATE horarios SET reservado = 1 WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET nome = '$userName' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);
$sql = "UPDATE horarios SET servico = '$servico' WHERE date_hora = '$hora'";
mysqli_query($conn, $sql);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';

try {
    $sql = "SELECT * FROM usuarios WHERE $userID = '$logado'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['nome'];

    // Enviar o código por e-mail
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@barbaman.com.br';
    $mail->Password = '03012003Rew@';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('contato@barbaman.com.br', 'Barbearia Barbaman');
    $mail->addAddress('junniorssilva92@gmail.com');
    $mail->isHTML(true);
    // Assunto do e-mail
    $mail->Subject = "Novo agendamento - $username - $hora";
    // Corpo do e-mail
    $mail->Body = 'Um horário foi agendado no site barbaman.';
    $mail->send();
    
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar o e-mail');</script>";
}


// Verificar se o usuário é VIP
$sql = "SELECT * FROM usuarios WHERE $userID = '$logado' AND vip = 'pago'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Atualizar a coluna "qntdcortes" e verificar se precisa alterar para TIRAR O VIP
    $sql = "UPDATE usuarios SET qntdcortes = qntdcortes + 1 WHERE $userID = '$logado'";
    mysqli_query($conn, $sql);

    $sql = "SELECT dias FROM usuarios WHERE $userID = '$logado'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dias = $row['dias'];
    $sql = "SELECT qntdcortes FROM usuarios WHERE $userID = '$logado'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $qntdcortes = $row['qntdcortes'];
    
    if ($dias == '15'){
        if ($qntdcortes >= 2) {
            // Alterar para VIP e reiniciar a contagem de cortes
            $sql = "UPDATE usuarios SET vip = '', qntdcortes = 0 WHERE $userID = '$logado'";
            mysqli_query($conn, $sql);
        }
    }
    else{
        if ($qntdcortes >= 4) {
            // Alterar para VIP e reiniciar a contagem de cortes
            $sql = "UPDATE usuarios SET vip = '', qntdcortes = 0 WHERE $userID = '$logado'";
            mysqli_query($conn, $sql);
        }
    }
    
    // O usuário é VIP, redirecionar para "sistemausuario.php"
    mysqli_close($conn);
   header("Location: ../../pages/sistemausuario.php");
    exit(); // Certifique-se de sair do script após o redirecionamento
} else {
    // Desconectar do banco de dados apenas se não for VIP
    mysqli_close($conn);
    header("Location: ../../pages/pagamento.php?servico=$servico");
    exit();
}
