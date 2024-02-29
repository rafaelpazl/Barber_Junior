<?php
session_start();
include_once('assets/php/config.php');
?>

<!DOCTYPE HTML>

<html>

<head>
	<html lang="pt">
	<title>Barbaman - Barbearia em Feira de Santana</title>
	<meta charset="utf-8" />
	<link rel="canonical" href="https://www.barbaman.com.br">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="Descubra cortes e estilos de barba populares para homens modernos na melhor barbearia de Feira de Santana. Agende seu serviço e garanta um corte impecável!">
	<meta name="author" content="Pazweb">
	<meta name="keywords" content="Barbaman, barbearia, Feira de Santana, corte, masculino">
	<link rel="stylesheet" href="assets/css/main.css" />
	<meta property="og:image" content="https://www.barbaman.com.br/images/logoclean.png" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7522102674262803"
     crossorigin="anonymous"></script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FF301CNRNC"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-FF301CNRNC');
	</script>
</head>
<link rel="stylesheet" href="assets/css/main2.css">

<body class="landing is-preload">
	<div id="page-wrapper">
		<header id="header" class="alt">
			<span class="barbaman"><a href="https://www.https://www.barbaman.com.br//">BarbaMan</a></span>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="pages/agendamento.php">Agendamento</a></li>
								<li><a href="pages/login.php">Entrar</a></li>
								<li><a href="pages/cadastro.php">Cadastro</a></li>
								<li><a href="pages/sistemausuario.php">Meus horários</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>Barbaman</h2>
				<p>Corte de cabelo com alta qualidade para homens que exigem o melhor</p>
				<ul class="actions special">
					<li><a href="pages/agendamento.php" class="button primary">Marcar horário</a></li>
				</ul>
			</div>
			<a href="#one" class="more scrolly">Saiba mais</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h1>Nós da <strong>Barbaman</strong> nos dedicamos a transformar a sua aparência e fazer você se sentir confiante.</h1>
					<p>Nosso compromisso é proporcionar a você um <strong>serviço excepcional</strong> e um <strong>atendimento personalizado</strong>.</p>
				</header>
				<ul class="icons major">
					<li><span class="ico"><span class="label"><img src="images/ico1.png" alt="tesoura para cabelo"></span></li>
					<li><span class="ico"><span class="label"><img src="images/ico2.png" alt="máquina de corte"></span></li>
					<li><span class="ico"><span class="label"><img src="images/ico3.png" alt="bigode"></span></li>
				</ul>
			</div>
		</section>
		<section id="one" class="wrapper style1 special two">
			<div class="inner">
				<header class="major">
					<div class="two1">
						<div class="row">
							<div class="col-md-8 two2">

								<div class="row">
									<div class="col-12">
										<h2>Pensando em você</h2>
										<p> Utilizamos um sistema de agendamento online para facilitar a marcação de horários e evitar esperas.</p>
									</div>
								</div>
								<div class="imgsection3"><img src="images/logoclean.png" alt="Barbaman"></div>
							</div>
							<div class="col-md-4 imgsection2"><img src="images/pc.png" alt="Júnior Silva"></div>
						</div>
					</div>

				</header>

			</div>
		</section>

		<section id="one" class="wrapper style1 special three">
			<h2>Cada corte de cabelo é realizado de maneira personalizada, levando em conta a textura do cabelo e as preferências do cliente.</h2>
			<div class="inner">
				<header class="major">
					<div class="corpo">

						<div class="container">
							<input type="radio" name="slider" id="item-1" checked>
							<input type="radio" name="slider" id="item-2">
							<input type="radio" name="slider" id="item-3">
							<div class="cards">
								<label class="card" for="item-1" id="song-1">
									<img src="images/corte1.jpg" alt="degradê e barba">
								</label>
								<label class="card" for="item-2" id="song-2">
									<img src="images/corte2.jpg" alt="degradê">
								</label>
								<label class="card" for="item-3" id="song-3">
									<img src="images/corte3.jpg" alt="platinado">
								</label>

							</div>

						</div>
					</div>

					<script>
						$('input').on('change', function() {
							$('body').toggleClass('blue');
						});
					</script>

				</header>

			</div>
		</section>

		<section id="one" class="wrapper style1 special">

			<header class="precing">

				<div class="row">
					<p><strong>Nunca se preocupe com o seu visual novamente!</strong> Com nossas assinaturas mensais e quinzenais de cortes de cabelo, você estará sempre impecável, independentemente da ocasião.</p>
					<div class="col-md-5 cabelo">
						<h3 class="card-title">cabelo máquina</h3>


						<h2><span>R$</span>99,90</h2>

						<p class="text">4 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="13">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>
					<div class="col-md-5 cabelo cabelo1">
						<h3 class="card-title">cabelo tesoura</h3>


						<h2><span>R$</span>149,90</h2>

						<p class="text">4 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="14">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>
					<div class="col-md-5 cabelo">
						<h3 class="card-title">cabelo + barba </h3>


						<h2><span>R$</span>139,90</h2>

						<p class="text">4 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="15">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>
					<div class="col-md-5 cabelo cabelo1">
						<h3 class="card-title">corte + finalização completa (1x semana) </h3>


						<h2><span>R$</span>119,90</h2>

						<p class="text">4 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="16">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>
					<div class="col-md-5 cabelo">
						<h3 class="card-title">finalização completa</h3>


						<h2><span>R$</span>84,90</h2>

						<p class="text">4 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="17">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>

					<div class="col-md-5 cabelo cabelo1">
						<h3 class="card-title">cabelo máquina</h3>


						<h2><span>R$</span>59,90</h2>

						<p class="text">2 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="18">
								<button class="button btn">Assinar</button>
							</form>

						</div>

					</div>
					<div class="col-md-5 cabelo">
						<h3 class="card-title">cabelo tesoura</h3>


						<h2><span>R$</span>79,90</h2>

						<p class="text">2 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="19">
								<button class="button btn">Assinar</button>
							</form>

						</div>
					</div>
					<div class="col-md-5 cabelo cabelo1">
						<h3 class="card-title">cabelo + barba</h3>


						<h2><span>R$</span>74,90</h2>

						<p class="text">2 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="20">
								<button class="button btn">Assinar</button>
							</form>

						</div>
					</div>
					<div class="col-md-5 cabelo">
						<h3 class="card-title">corte e finalização completa</h3>


						<h2><span>R$</span>69,90</h2>

						<p class="text">2 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="21">
								<button class="button btn">Assinar</button>
							</form>

						</div>
					</div>
					<div class="col-md-5 cabelo cabelo1">
						<h3 class="card-title">finalização completa</h3>


						<h2><span>R$</span>54,90</h2>

						<p class="text">2 vezes por mês <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Mais de 10% de desconto <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<p class="text">Sempre alinhado no padrão <strong>Barbaman</strong> <i class="fa-regular fa-circle-check fa-fade"></i></p>
						<hr>
						<div>
							<form method="get" action="pages/pagamento.php">
								<input type="hidden" name="servico" id="servico" value="22">
								<button class="button btn">Assinar</button>
							</form>

						</div>
					</div>
				</div>



			</header>
		</section>

		<!-- CTA -->
		<section id="cta" class="wrapper style4">
			<div class="inner">
				<header>
					<h2>Faça-nos uma visita!</h2>
					<p>Você merece um tratamento especial, reserve agora mesmo o seu horário.</p>
				</header>
				<ul class="actions stacked">
					<li><a href="pages/agendamento.php" class="button fit primary">AGENDAMENTO</a></li>
					<li><a href="https://api.whatsapp.com/send?phone=5575992845592&text=Tem%20hor%C3%A1rio%20disponivel?" class="button fit">CONTATO</a></li>
				</ul>
			</div>
			<div class="maps container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2528.3250209654498!2d-38.93612629239332!3d-12.23404091330265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714392931d59897%3A0x24f8fde83bef7b38!2sBarbaman!5e0!3m2!1spt-BR!2sbr!4v1684929447255!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<!-- Remove the container if you want to extend the Footer to full width. -->
			<div class="container my-5">

				<footer style="background-color: #1d242a;">
					<div class="container p-4">
						<div class="row">
							<div class="col-lg-6 col-md-12 mb-4">
								<img class="img-footer" src="images/image_footer.jpg" alt="curso de corte de cabelo" width="40%">
							</div>
							<div class="col-lg-3 col-md-6 mb-4">
								<h5 class="mb-3" style="letter-spacing: 2px; color: #FFF;">links importantes</h5>
								<ul class="list-unstyled mb-0">
									<li class="mb-1">
										<a href="https://barbaman.com.br/pages/politica_de_privacidade.php" style="color: #FFF;">Política de privacidade</a>
									</li>
									<li class="mb-1">
										<a href="https://barbaman.com.br/pages/termos_e_condicoes.php" style="color: #FFF;">Termos e condições</a>
									</li>
									<li class="mb-1">
										<a href="https://api.whatsapp.com/send?phone=5575992845592&text=Tem%20hor%C3%A1rio%20disponivel?" style="color: #FFF;">Alguma dúvida ou sugestão? fale com a gente!</a>
									</li>
									<li>
										<a href="https://barbaman.com.br/pages/instrucao_exclusao_de_dados.php" style="color: #FFF;">Instruções de exclusão de dados</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-6 mb-4">
								<h5 class="mb-1" style="letter-spacing: 2px; color: #FFF;">horário de funcionamento</h5>
								<table class="table" style="color: #FFF; border-color: #fff;">
									<tbody>
										<tr>
											<td>Ter - Sex:</td>
											<td>08:00 - 19:00</td>
										</tr>
										<tr>
											<td>Sab - Dom:</td>
											<td>07:00 - 20:00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center p-3 pazweb-footer" style="display: block; margin-bottom:5%">
								<p>Feito por <img src="images/pazweb.webp" width="15%" alt="Pazweb" srcset="images/pazweb.webp 600w,
                           images/pazweb_small.webp 500w" sizes="(max-width: 500px) 100px,
                          (max-width: 600px) 200px"></p>
							</div>

						</div>
					</div>
					<div class="text-center p-3" style="background-color: #fff; border-radius:15px;">
						© 2024 Barbaman -
						Todos os direitos reservados
					</div>
					<!-- Copyright -->
				</footer>

			</div>
			<!-- End of .container -->
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