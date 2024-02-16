<script>
    function criarCookies(nome, valor) {
        var expira = new Date();
        expira.setFullYear(expira.getFullYear() + 10);
        var dtExpira = "expires=" + expira.toUTCString();
        document.cookie = nome + "=" + valor + ";" + dtExpira + ";path=/";
    }
</script>
<?php
include_once('config.php');

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = strtolower($_POST['email']);
    $senha = $_POST['senha'];
    // Evitar SQL Injection usando prepared statements
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? and senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "Nenhuma linha encontrada na consulta SQL.<br>";

        // Redirecionar para a página de erro usando JavaScript
        echo '<script>';
        echo 'window.location.href = "../../pages/loginerro.php";';
        echo '</script>';
        exit();
    } else {
        $user_data = $result->fetch_assoc();
        $nome = $user_data['nome'];

        // Definir cookies
        echo '<script>';
        echo 'var emailEnviado = "' . $email . '";';
        echo 'var nomeEnviado = "' . $nome . '";';
        echo 'criarCookies("emailID", emailEnviado);';
        echo 'criarCookies("nomeID", nomeEnviado);';
        echo 'window.location.href = "../../pages/login.php";'; // Redirecionamento usando JavaScript
        echo '</script>';
        exit(); // É importante sair após o redirecionamento
    }
} else {
    header('Location:../../pages/login.php');
    exit();
}
