<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true) {
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
} else {
	$logado = $_SESSION['email'];
}


?>

<!DOCTYPE HTML>

<html>

<head>
	<title>BarbaMan</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
	a {
		text-decoration: none !important;
		border: none !important;
	}

	/* Estilo para a classe "major" */
	#banner {
		height: auto !important;
	}

	.major {
		background-color: #fff;
		padding: 5%;
		text-align: justify;
	}
</style>

<!DOCTYPE HTML>

<html>

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
				<h2>Termos e condições</h2>
				<section id="one" class="wrapper style1 special">
					<div class="inner">
						<header class="major">

							<h2><span style="color: rgb(68, 68, 68);">1. Termos</span></h2>
							<p><span style="color: rgb(68, 68, 68);">Ao acessar ao site <a href="https://barbaman.com.br/">barbaman</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</span></p>
							<h2><span style="color: rgb(68, 68, 68);">2. Uso de Licença</span></h2>
							<p><span style="color: rgb(68, 68, 68);">É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site barbaman , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode:&nbsp;</span></p>
							<ol>
								<li><span style="color: rgb(68, 68, 68);">modificar ou copiar os materiais;&nbsp;</span></li>
								<li><span style="color: rgb(68, 68, 68);">usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);&nbsp;</span></li>
								<li><span style="color: rgb(68, 68, 68);">tentar descompilar ou fazer engenharia reversa de qualquer software contido no site barbaman;&nbsp;</span></li>
								<li><span style="color: rgb(68, 68, 68);">remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou&nbsp;</span></li>
								<li><span style="color: rgb(68, 68, 68);">transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</span></li>
							</ol>
							<p><span style="color: rgb(68, 68, 68);">Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por barbaman a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</span></p>
							<h2><span style="color: rgb(68, 68, 68);">3. Isenção de responsabilidade</span></h2>
							<ol>
								<li><span style="color: rgb(68, 68, 68);">Os materiais no site da barbaman são fornecidos 'como estão'. barbaman não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</span></li>
								<li><span style="color: rgb(68, 68, 68);">Além disso, o barbaman não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</span></li>
							</ol>
							<h2><span style="color: rgb(68, 68, 68);">4. Limitações</span></h2>
							<p><span style="color: rgb(68, 68, 68);">Em nenhum caso o barbaman ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em barbaman, mesmo que barbaman ou um representante autorizado da barbaman tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</span></p>
							<h2><span style="color: rgb(68, 68, 68);">5. Precisão dos materiais</span></h2>
							<p><span style="color: rgb(68, 68, 68);">Os materiais exibidos no site da barbaman podem incluir erros técnicos, tipográficos ou fotográficos. barbaman não garante que qualquer material em seu site seja preciso, completo ou atual. barbaman pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, barbaman não se compromete a atualizar os materiais.</span></p>
							<h2><span style="color: rgb(68, 68, 68);">6. Links</span></h2>
							<p><span style="color: rgb(68, 68, 68);">O barbaman não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por barbaman do site. O uso de qualquer site vinculado é por conta e risco do usuário.</span></p>
							<p><br></p>
							<h3><span style="color: rgb(68, 68, 68);">Modificações</span></h3>
							<p><span style="color: rgb(68, 68, 68);">O barbaman pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</span></p>
							<h3><span style="color: rgb(68, 68, 68);">Lei aplicável</span></h3>
							<p><span style="color: rgb(68, 68, 68);">Estes termos e condições são regidos e interpretados de acordo com as leis do barbaman e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</span></p>

						</header>

					</div>
				</section>
		</section>





		<!-- CTA -->
		<section id="cta" class="wrapper style4">
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
				<a href="https://pazweb.com.br/"><img src=".//images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a>
			</div>

		</footer>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>