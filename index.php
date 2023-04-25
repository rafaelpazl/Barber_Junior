<?php
    session_start();
    include_once('config.php');
    if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
    }else{   
        $logado = $_SESSION['email'];}

        
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <style>a{
			text-decoration: none!important;
			border: none!important;
					}</style>
	<body class="landing is-preload">	
			<div id="page-wrapper">
				<header id="header" class="alt">
						<h1><a href="index.html">BarbaMan</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
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
							<h2>BarbaMan</h2>
							<p>Corte de cabelo com alta qualidade para homens que exigem o melhor</p>
							<ul class="actions special">
								<li><a href="agendamento.php" class="button primary">Marcar horario</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Saiba mais</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Nós nos dedicamos a transformar a sua aparência e fazer você se sentir confiante.</h2>
								<p>Nosso compromisso é proporcionar a você um serviço excepcional e um atendimento personalizado.</p>
							</header>
							<ul class="icons major">
								<li><span class="ico"><span class="label"><img src="images/ico1.png" alt="tesoura para cabelo"></span></li>
								<li><span class="ico"><span class="label"><img src="images/ico2.png" alt="máquina de corte"></span></li>
								<li><span class="ico"><span class="label"><img src="images/ico3.png" alt="bigode"></span></li>
							</ul>
						</div>
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
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d243.70127518504273!2d-38.93600925718598!3d-12.233350640390569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDEzJzYwLjAiUyAzOMKwNTYnMDkuOCJX!5e0!3m2!1spt-BR!2sbr!4v1682121998812!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<div class="copy">
							<a href="http://pazwebagencia.com.br"><img src=".//images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a></div>
						
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