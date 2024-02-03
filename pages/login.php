<?php
// Verificar se os cookies estão definidos
if (
	isset($_COOKIE['googleUserID']) || isset($_COOKIE['googleUserName']) ||
	isset($_COOKIE['facebookUserID']) || isset($_COOKIE['facebookUserName'])
) {
	header('Location: sistemausuario.php');
	exit();
}


?>
<!DOCTYPE HTML>

<html>

<head>
	<html lang="pt-br">
	<title>BarbaMan</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link href="../assets/css/style.css" rel="stylesheet" />
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" />
	</noscript>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link href="../assets/css/modal.css" rel="stylesheet" />
	<link href="../assets/css/login.css" rel="stylesheet" />
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
								<li><a href="https://www.barbaman.com.br/">Home</a></li>
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
		<section id="banner">
			<div class="inner">

				<section id="one" class="wrapper style1 special">
					<h2>Sessão de Login</h2>
					<div id="buttonDiv"></div>

					<fb:login-button class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="rounded" data-auto-logout-link="true" scope="public_profile,email" onlogin="checkLoginState();" data-use-continue-as="true">
					</fb:login-button>
					<div id="status"></div>

					<script src="https://accounts.google.com/gsi/client" async></script>
					<script src="https://cdn.jsdelivr.net/npm/jwt-decode@4.0.0/build/cjs/index.min.js"></script>
					<!-- start SDK GOOGLE and FACEBOOK  -->
					<script>
						function criarCookie(nome, valor, expira) {
							var dtExpira = "expires=" + expira.toUTCString();
							document.cookie = nome + "=" + valor + ";" + "=; expires=Thu, 01 Jan 9970 00:00:00 GMT" + ";path=/";
						}

						function handleCredentialResponse(response) {
							try {
								const decoded = jwtDecode(response.credential);
								console.log(decoded);

								const expira = new Date();
								expira.setFullYear(expira.getFullYear() + 10);

								// Armazenar o nome e o ID do usuário nos cookies
								criarCookie("googleUserID", decoded.sub, expira); // Cookie expira em 10 anos
								criarCookie("googleUserName", decoded.name, expira); // Cookie expira em 10 anos

								// Aqui você pode montar os dados para enviar via POST
								const postData = {
									name: decoded.name,
									sub: decoded.sub,
									given_name: decoded.given_name,
									family_name: decoded.family_name,
									email: decoded.email,
									email_verified: decoded.email_verified,
									picture: decoded.picture
								};

								// Realiza uma solicitação HTTP POST
								fetch('testeLogin1.php', {
										method: 'POST',
										headers: {
											'Content-Type': 'application/json'
										},
										body: JSON.stringify(postData)
									})
									.then(response => {
										if (!response.ok) {
											throw new Error('Erro ao enviar os dados');
										}
										return response.json();
									})
									.then(data => {
										console.log('Dados enviados com sucesso:', data);
										// Faça algo com a resposta, se necessário
									})
									.catch(error => {
										console.error('Erro ao enviar os dados:', error);
									});
								window.location.href = '../assets/php/receber_dados.php';
							} catch (err) {
								console.log(err);
							}

						}

						window.onload = function() {
							google.accounts.id.initialize({
								client_id: "567882892788-feo2habtirkuu99vfeja0es73qnp5vvk.apps.googleusercontent.com",
								callback: handleCredentialResponse
							});

							google.accounts.id.renderButton(
								document.getElementById("buttonDiv"), {
									theme: "filled_black",
									size: "large",
									type: "standard",
									shape: "pill",
									text: "continue_with",
									logo_alignment: "left",
									width: "268px"
								}
							);

							google.accounts.id.prompt();
						}

						function checkLoginState() {
							FB.getLoginStatus(function(response) {
								statusChangeCallback(response);
							});
						}

						function statusChangeCallback(response) {
							if (response.status === 'connected') {
								// Usuário conectado com o Facebook
								handleFacebookLogin(response.authResponse);
							} else {
								// Usuário não está conectado
								document.getElementById('status').innerHTML = 'Por favor, faça login neste site.';
							}
						}

						function handleFacebookLogin(authResponse) {
							FB.api('/me', function(response) {
								// Aqui você pode extrair as informações do usuário do objeto de resposta do Facebook
								const userData = {
									id: response.id,
									name: response.name,
									email: response.email // Se disponível
									// Você pode adicionar mais informações conforme necessário
								};
								const expira = new Date();
								expira.setFullYear(expira.getFullYear() + 10);

								// Armazene as informações nos cookies
								criarCookie("facebookUserID", userData.id, expira);
								criarCookie("facebookUserName", userData.name, expira);

								// Envie as informações para o servidor, se necessário
								enviarDadosParaServidor(userData);
								window.location.href = '../assets/php/receber_dados.php';
							});
						}

						function enviarDadosParaServidor(userData) {
							// Aqui você pode enviar os dados para o servidor usando fetch() ou XMLHttpRequest
							// Certifique-se de que a URL e os detalhes da solicitação correspondam à sua configuração do servidor.
						}

						// Função para criar cookies
						function criarCookie(nome, valor, expira) {
							var dtExpira = "expires=" + expira.toUTCString();
							document.cookie = nome + "=" + valor + ";" + dtExpira + ";path=/";
						}
					</script>

					<!-- Load the JS SDK asynchronously -->
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0&appId=356421383951694" nonce="oZo6TO9E"></script>
					<!-- end google facebook -->
					<!-- slider stylesheet -->


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
				<a href="https://pazweb.com.br/"><img src="https://pazweb.com.br/../assets/img/whitelogo-removebg-preview.webp" target="_blank" alt="Pazweb"></a>
			</div>

		</footer>

		<div class="modal-container">
			<div class="ajuste" onclick="closeModal()">
				<div class="modal">
					<h5>Nova atualização!</h5>
					<span>
						<p>Estamos sempre pensando no bem-estar e conforto dos nossos clientes, chega de preencher longos formulários e cadastre-se mais rápidamente utilizando o <strong>Google</strong>!</p>
					</span>
					<img src="../images/logoclean.png" alt="Logo barbaman" width="40%">
					<div class="btns">
						<button class="btnClose" onclick="closeModal()">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End modal -->

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