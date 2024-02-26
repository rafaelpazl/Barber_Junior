<?php
// Incluir o arquivo de configuração do banco de dados
$hostname = "srv951.hstgr.io";
$usuario = "u928537771_barbaman";
$senha = "3p3w8xC&";
$bancodedados = "u928537771_database";
$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Verificar se os dados do formulário foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se todos os campos necessários foram preenchidos
    if (isset($_POST['token']) && isset($_POST['nova_senha']) && isset($_POST['confirmar_nova_senha'])) {
        $token = $_POST['token'];
        $novaSenha = $_POST['nova_senha'];
        $confirmarNovaSenha = $_POST['confirmar_nova_senha'];

        // Verificar se as senhas coincidem
        if ($novaSenha === $confirmarNovaSenha) {
            // Preparar e executar a consulta com prepared statement para atualizar a senha
            $sql = "UPDATE usuarios SET senha = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("si", $novaSenha, $token);
            $stmt->execute();

            // Verificar se a consulta foi bem-sucedida e redirecionar o usuário ou exibir mensagem de erro
            if ($stmt->affected_rows > 0) {
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
    <p>Sua senha foi alterada com sucesso! Agora você já pode fazer login no nosso site com sua nova senha <a href='../../pages/login.php'>clicando aqui</a>.</p>
</div>
</body>
</html>
                ";
            } else {
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
    <p>Ocorreu um erro. Verifique se ocorreu algum erro de digitação ou crie uma nova conta <a href='../../pages/cadastro.php'>clicando aqui</a>.</p>
</div>
</body>
</html>
                ";
            }

            // Fechar a instrução preparada
            $stmt->close();
        } else {
            echo '<h1>As senhas não coincidem.</h1>';
        }
    } else {
        echo '<h1>Por favor, preencha todos os campos corretamente.</h1>';
    }
} else {
    // Se o formulário não foi submetido via método POST, redirecionar para a página de erro
    header('Location: error.php');
}
