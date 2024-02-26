<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';



include_once('config.php');

// Verificar se o formulário foi submetido
if (isset($_POST["email"])) {

    // Obter o e-mail enviado pelo usuário
    $email = strtolower($_POST['email']);

    // Preparar a consulta SQL para selecionar o ID do usuário com base no email
    $sql = "SELECT id FROM usuarios WHERE email = ?";

    // Preparar a instrução SQL
    $conn = $conexao;
    $stmt = $conn->prepare($sql);

    // Verificar se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        // Vincular os parâmetros
        $stmt->bind_param("s", $email);

        // Executar a consulta
        $stmt->execute();

        // Armazenar o resultado da consulta
        $result = $stmt->get_result();

        // Verificar se foram encontradas linhas
        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
            $token = $usuario['id']; // Usar o ID como token

            // URL da página de redefinição de senha
            $resetPasswordUrl = 'https://www.barbaman.com.br/pages/redefinir_senha.php';

            // Construção do link com o token como parâmetro
            $link = $resetPasswordUrl . '?token=' . $token;

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
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Atualização de senha';
            $mail->Body = '<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
  <p> Clique <a href="' . $link . '">aqui</a> para prosseguir com a alteração da sua senha</p>
</body>
</html>';
            $mail->send();
            echo
            "
           <!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link
    href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
    rel='stylesheet'>
</head>
<style>
  body{
    margin: 0;
    padding: 0;
    overflow-y: hidden;
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
  }
  .content{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
  }
  .ok{
    height: 60vh;
  }
  p{
    color: #792350;
    margin: 10px;
    text-align: justify;
  }
</style>
<body>
  <div class='content'>
 
    <img class='ok' src='../../images/ok.jpg' alt='Enviado'>
    <p>O email já foi enviado! Verifique na sua caixa de entrada e span e clique no link enviado para prosseguir com a alteração da sua senha.</p>
</div>
</body>
</html>


            ";
        } else {
            // Nenhuma linha encontrada, faça outra coisa
            echo "
            
            <!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link
    href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
    rel='stylesheet'>
</head>
<style>
  body{
    margin: 0;
    padding: 0;
    overflow-y: hidden;
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
    background: #EEEFF1;
  }
  .content{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
  }
  .ok{
    height: 60vh;
  }
  p{
    color: #5E327F;
    margin: 10px;
    text-align: justify;
    
  }
</style>
<body>
  <div class='content'>
 
    <img class='ok' src='../../images/not.jpg' alt='Enviado'>
    <p>Este email não está cadastrado no nosso site. Verifique se ocorreu algum erro de digitação ou crie uma nova conta <a href='../../pages/cadastro.php'>clicando aqui</a>.</p>
</div>
</body>
</html>

            
            ";
        }

        // Fechar a instrução
        $stmt->close();
    } else {
        // Erro na preparação da consulta
        echo "Erro ao preparar a consulta (Email não encontrado): " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();

    // Se o e-mail estiver cadastrado, enviar e-mail com o token (ID)
    
        
            } else {
        // Se o e-mail não estiver cadastrado, exibir mensagem de erro
        echo "O e-mail não foi enviado.";
     }
?>