<script>
	function criarCookies(nome, valor) {
		var expira = new Date();
		expira.setFullYear(expira.getFullYear() + 10);
		var dtExpira = "expires=" + expira.toUTCString();
		document.cookie = nome + "=" + valor + ";" + dtExpira + ";path=/";
	}
</script>
<?php
if (isset($_POST['submit'])) {
	include_once('../assets/php/config.php');

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
		echo '<script>alert("Usuário cadastrado com sucesso.");</script>';

		// Definir cookies e redirecionar para sistemausuario.php
		echo '<script>';
		echo 'var emailEnviado = "' . $email . '";';
		echo 'var nomeEnviado = "' . $nome . '";';
		echo 'criarCookies("emailID", emailEnviado);';
		echo 'criarCookies("nomeID", nomeEnviado);';
		echo 'window.location.href = "sistemausuario.php";';
		echo '</script>';
	}
}
?>


<!DOCTYPE HTML>
<html>

<head>
	<html lang="pt-br">
	<title>BarbaMan</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../assets/css/style.css" />
	<meta property="og:image" content="../images/logoclean.png" />
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" />
	</noscript>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<style>
	a {
		text-decoration: none !important;
		border: none !important;
	}

	.wrapper.style1 input[type="text"],
	.wrapper.style1 input[type="password"],
	.wrapper.style1 input[type="email"],
	.wrapper.style1 select,
	.wrapper.style1 textarea {
		background-color: #fff !important;
		color: #000 !important;
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
								<li><a href="cadastro.php">Cadastrar-se</a></li>
								<li><a href="login.php">Entrar</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="">
			<div class="inner">

				<section id="one" class="wrapper style1 special">
					<div class="inner">
						<form action="cadastro.php" method="POST">
							<fieldset>
								<h2>CADASTRO</h2>
								<br>
								<div class="form-group">
									Nome completo
									<br><br>
									<input type="text" name="nome" id="nome" class="inputUser" placeholder="João Silva de Souza" required>
									<label for="nome" class="labelInput"></label>
								</div>
								<br><br>
								<div class="inputBox">
									Email
									<br><br>
									<input type="text" name="email" id="email" class="inputUser" placeholder="joao@hotmail.com" required>
									<label for="email" class="labelInput"></label>
								</div>
								<br><br>
								<div class="inputBox">
									Senha
									<br><br>
									<input type="password" name="senha" id="senha" class="inputUser" placeholder="********" required>
									<label for="senha" class="labelInput"></label>
								</div>
								<br><br>
								<input type="submit" name="submit" id="submit" value="enviar">
							</fieldset>
						</form>
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2528.3250209654498!2d-38.93612629239332!3d-12.23404091330265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714392931d59897%3A0x24f8fde83bef7b38!2sBarbaman!5e0!3m2!1spt-BR!2sbr!4v1684929447255!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="mailto:junniorssilva92@gmail.com?subject=Barba Man&body=" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<div class="copy">
				<a href="https://pazweb.com.br/"><img src="../images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
	</script>
</body>

</html>