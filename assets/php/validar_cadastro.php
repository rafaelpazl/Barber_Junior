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
session_start(); // Iniciar a sessão

if (isset($_POST["validate"])) {
	// Verificar se o código inserido corresponde ao código enviado por e-mail
	if ($_POST['code'] === $_SESSION['validation_code']) {

		$nome = $_POST['nome'];
		$email = strtolower($_POST['email']);
		$senha = $_POST['senha'];


		// Verificar se o email já existe no banco de dados

		$query = "SELECT * FROM usuarios WHERE email = '$email'";
		$result = mysqli_query($conexao, $query);

		if (mysqli_num_rows($result) > 0) {
			// O email ou telefone já estão cadastrados
			echo '<script>alert("Email já cadastrado.");</script>';
		} else {
			// Inserir novo usuário no banco de dados
			$query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
			mysqli_query($conexao, $query);
			// Definir cookies e redirecionar para sistemausuario.php
			echo '<script>';
			echo 'var emailEnviado = "' . $email . '";';
			echo 'var nomeEnviado = "' . $nome . '";';
			echo 'criarCookies("emailID", emailEnviado);';
			echo 'criarCookies("nomeID", nomeEnviado);';
			echo 'window.location.href = "../../pages/sistemausuario.php";';
			echo '</script>';
		}
	} else {
		echo '<script>';
		echo 'alert("Código inválido!")';
		echo 'window.location.href = "../../pages/validate_code.php";';
		echo '</script>';
	}
}
?>