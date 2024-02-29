<?php
// Incluir o arquivo de configuração do banco de dados
$hostname = "srv951.hstgr.io";
$usuario = "u928537771_barbaman";
$senha = "3p3w8xC&";
$bancodedados = "u928537771_database";
$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Verificar se o token está presente na URL
if (isset($_GET['token'])) {
	$token = $_GET['token'];

	// Preparar a consulta SQL para selecionar o ID do usuário com base no token
	$sql = "SELECT id FROM usuarios WHERE id = ?";

	// Preparar a instrução SQL
	$stmt = $conexao->prepare($sql);

	// Verificar se a preparação da consulta foi bem-sucedida
	if ($stmt) {
		// Vincular os parâmetros
		$stmt->bind_param("i", $token); // 'i' indica que o parâmetro é um número inteiro

		// Executar a consulta
		$stmt->execute();

		// Armazenar o resultado da consulta
		$result = $stmt->get_result();

		// Verificar se foram encontradas linhas
		if ($result->num_rows > 0) {
			// Exibir o formulário para o usuário definir uma nova senha
?>
			<!DOCTYPE HTML>

			<html>

			<head>
				<html lang="pt-br">
				<title>BarbaMan</title>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
				<meta property="og:image" content="../images/logoclean.png" />
				<link href="../assets/css/style.css" rel="stylesheet" />
				<noscript>
					<link rel="stylesheet" href="../assets/css/noscript.css" />
				</noscript>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
				<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7522102674262803"
     crossorigin="anonymous"></script>

			</head>
			<style>
				.wrapper.style1 {
					background: #fff !important;
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
					padding: 5%;
				}

				.fb-login-button {
					margin-top: 20px;
				}

				.wrapper.style1 h2 {
					color: #000 !important;
				}

				.copy img {
					max-width: 140px !important;
				}

				.wrapper.style1 label {
					color: #000 !important;

				}

				.wrapper.style1 {
					border-radius: 15px;
				}

				.formLogin input {
					color: #000;
				}

				.container-login {
					width: 100%;
					max-width: 400px;
					padding: 20px;
				}

				.login-box {
					background-color: #fff;
					padding: 20px;
					border-radius: 5px;

				}

				.login-box h2 {
					margin: 0 0 15px;
					padding: 0;
					color: #333;
					text-align: center;
					text-transform: uppercase;
				}

				.user-box {
					position: relative;
					margin-bottom: 30px;
				}

				.user-box input {
					width: 100%;
					padding: 10px 0;
					font-size: 16px;
					color: #333;
					margin-bottom: 30px;
					border: none;
					border-bottom: 2px solid #333;
					outline: none;
					background: #fff !important;
				}

				.user-box label {
					position: absolute;
					top: 0;
					left: 0;
					padding: 10px 0;
					font-size: 16px;
					color: #333;
					pointer-events: none;
					transition: 0.5s;
				}

				.user-box input:focus~label,
				.user-box input:valid~label {
					transform: translateY(-20px);
					font-size: 14px;
					color: #333;
				}

				.container-login submit:hover {
					color: #000;
				}

				.password-toggle-icon {
					position: absolute;
					top: 50%;
					right: 10px;
					transform: translateY(-50%);
					cursor: pointer;
				}

				.password-toggle-icon i {
					font-size: 18px;
					line-height: 1;
					color: #333;
					transition: color 0.3s ease-in-out;
					margin-bottom: 20px;
				}

				.password-toggle-icon i:hover {
					color: #000;
				}

				.wrapper.style1 input[type="password"],
				.wrapper.style1 input[type="email"],
				.wrapper.style1 input[type="text"] {
					background-color: #fff !important;
				}

				.wrapper.style1 input[type="password"],
				.wrapper.style1 input[type="email"]:focus,
				.wrapper.style1 input[type="text"] {
					background-color: #fff !important;
				}

				input[type="password"]:focus,
				input[type="text"]:focus,
				input[type="email"]:focus {

					box-shadow: none;
				}

				.login-box-social {
					display: flex;
					flex-direction: column;
					align-items: center;
					margin-bottom: 10px;
				}

				.wrapper.style1 input[type="submit"] {
					color: #fff !important;
					background-color: #ED4933;
					border-radius: 7px;
				}

				.wrapper.style1 input[type="submit"]:hover {
					background-color: #ED4939;
					border: 1px solid #ED4930;
					transition: 0.4s;

				}

				.login-box p {
					font-size: small;
					color: #000;
				}

				.termos {
					font-size: 10px !important;
				}

				.wrapper.style1 .err {
					color: red;
					font-weight: bold;
				}

				.container-login p {
					color: #000;
				}
			</style>

			<body class="landing is-preload">
				<div id="page-wrapper">
					<header id="header" class="alt">
						<h1><a href="https://www.barbaman.com.br/">BARBAMAN</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="../index.php">Home</a></li>
											<li><a href="agendamento.php">Agendamento</a></li>
											<li><a href="login.php">Entrar</a></li>
											<li><a href="cadastro.php">Cadastro</a></li>
											<li><a href="sistemausuario.php">Meus horários</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

					<!-- Banner -->

					<section id="banner">
						<div class="inner">

							<section id="one" class="wrapper style1 special">
								<h2>Redefinir Senha</h2>
								<div class="container-login">
									<p>Digite a sua nova senha</p>
									<div class="login-box">
										<!-- Formulário de Redefinição de Senha -->
										<form action="../assets/php/process_reset_password.php" method="post" onsubmit="return validarSenha()">
											<input type="hidden" name="token" value="<?php echo $token; ?>">
											<div class="user-box">
												<input type="password" id="nova_senha" name="nova_senha" required>
												<label>Nova senha:</label>
												<span class="password-toggle-icon"><i class="fas fa-eye" onclick="togglePassword('nova_senha')"></i></span>
											</div>
											<div class="user-box">
												<input type="password" id="confirmar_nova_senha" name="confirmar_nova_senha" required>
												<label>Confirmar nova senha:</label>
												<span class="password-toggle-icon"><i class="fas fa-eye" onclick="togglePassword('confirmar_nova_senha')"></i></span>
											</div>
											<input type="submit" name="submit" id="submit" value="Redefinir Senha">
										</form>

										<!-- Script JavaScript -->
										<script>
											function togglePassword(fieldId) {
												const passwordField = document.getElementById(fieldId);
												const toggleIcon = document.querySelector(`#${fieldId} + .password-toggle-icon i`);

												if (passwordField.type === "password") {
													passwordField.type = "text";
													toggleIcon.classList.remove("fa-eye");
													toggleIcon.classList.add("fa-eye-slash");
												} else {
													passwordField.type = "password";
													toggleIcon.classList.remove("fa-eye-slash");
													toggleIcon.classList.add("fa-eye");
												}
											}

											function validarSenha() {
												var novaSenha = document.getElementById("nova_senha").value;
												var confirmarSenha = document.getElementById("confirmar_nova_senha").value;

												if (novaSenha != confirmarSenha) {
													alert("As senhas não coincidem");
													return false;
												}
												return true;
											}
										</script>

									</div>
								</div>
							</section>

					</section>





					<!-- CTA -->
					<section id="cta" class="wrapper style5">
						<div class="inner">
							<header>
								<h2>Faça-nos uma visita!</h2>
								<p>Você merece um tratamento especial, reserve agora mesmo o seu horário.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="agendamento.php" class="button fit primary">AGENDAMENTO</a></li>
								<li><a href="https://api.whatsapp.com/send?phone=5575992845592&text=Tem%20hor%C3%A1rio%20disponivel?" class="button fit">CONTATO</a></li>
							</ul>
						</div>
						<div class="maps container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d243.70127518504273!2d-38.93600925718598!3d-12.233350640390569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDEzJzYwLjAiUyAzOMKwNTYnMDkuOCJX!5e0!3m2!1spt-BR!2sbr!4v1682121998812!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</section>

					<!-- Footer -->
					<footer id="footer">
						<ul class="icons">


							<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:junniorssilva92@gmail.com?subject=Barba Man&body=" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<div class="copy">
							<a href="https://pazweb.com.br/"><img src="https://pazweb.com.br/../assets/img/whitelogo-removebg-preview.webp" width="20%" target="_blank" alt="Pazweb"></a>
						</div>

					</footer>

					<!-- Scripts -->
					
					<script src="../assets/js/script.js"></script>
					<script src="../assets/js/jquery.min.js"></script>
					<script src="../assets/js/jquery.scrollex.min.js"></script>
					<script src="../assets/js/jquery.scrolly.min.js"></script>
					<script src="../assets/js/browser.min.js"></script>
					<script src="../assets/js/breakpoints.min.js"></script>
					<script src="../assets/js/util.js"></script>
					<script src="../assets/js/main.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
			</body>

			</html>

<?php
		} else {
			// Token não corresponde a nenhum usuário na tabela usuários
			echo 'Token inválido';
		}

		// Fechar a instrução
		$stmt->close();
	} else {
		// Erro na preparação da consulta
		echo "Erro ao preparar a consulta: " . $conexao->error;
	}
} else {
	// Token não fornecido na URL
	echo 'Token não fornecido';
}
?>