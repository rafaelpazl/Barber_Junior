

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  </head>
  <?php
    session_start();
    include_once('config.php');
    if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
    }else{   
        $logado = $_SESSION['email'];}

        
?>
  <style>a{
			text-decoration: none!important;
			border: none!important;
					}
		.two{
			height: 100vh;
			background: transparent!important;
			background-image: url("images/fundo.png")!important;
			
				background-size: cover;
				background-position: center;
			
		}
		.two1{
			background-color: #000;
			padding: 10px;
		}
		.two2{
			margin-top: 10%;
			align-items: center;
			justify-content: center;
		}
		.imgsection2 img{
			width: 100%;
			border-radius: 10px
		}
		.three h2{
			margin: 0 10%;
			font-size: 100%
		}
		@import url("https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap");

* {
  box-sizing: border-box;
}

html,
.corpo {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

.corpo {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px 10px;
  font-family: "DM Sans", sans-serif;
  transition: background 0.4s ease-in;
  height: 100vh;
  width: 100%;
}
@media screen and (max-width: 600px) {
	.corpo{
		height: 50vh;
	}
}


input[type="radio"] {
  display: none;
}

.card {
  position: absolute;
  width: 60%;
  height: 100%;
  left: 0;
  right: 0;
  margin: auto;
  transition: transform 0.4s ease;
  cursor: pointer;
}

.container {
  width: 100%;
  max-width: 800px;
  max-height: 600px;
  height: 100%;
  transform-style: preserve-3d;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

.cards {
  position: relative;
  width: 100%;
  height: 100%;
  margin-bottom: 20px;
}

.corpo img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  object-fit: cover;
}

#item-1:checked ~ .cards #song-3,
#item-2:checked ~ .cards #song-1,
#item-3:checked ~ .cards #song-2 {
  transform: translatex(-40%) scale(0.8);
  opacity: 0.4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-2,
#item-2:checked ~ .cards #song-3,
#item-3:checked ~ .cards #song-1 {
  transform: translatex(40%) scale(0.8);
  opacity: 0.4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-1,
#item-2:checked ~ .cards #song-2,
#item-3:checked ~ .cards #song-3 {
  transform: translatex(0) scale(1);
  opacity: 1;
  z-index: 1;

 
}

.player {
  background-color: #fff;
  border-radius: 8px;
  min-width: 320px;
  padding: 16px 10px;
}

.upper-part {
  position: relative;
  display: flex;
  align-items: center;
  margin-bottom: 12px;
  height: 36px;
  overflow: hidden;
}

.play-icon {
  margin-right: 10px;
}

.song-info {
  width: calc(100% - 32px);
  display: block;
}

.song-info .title {
  color: #403d40;
  font-size: 14px;
  line-height: 24px;
}

.sub-line {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.subtitle,
.time {
  font-size: 12px;
  line-height: 16px;
  color: #c6c5c6;
}

.time {
  font-size: 12px;
  line-height: 16px;
  color: #a5a5a5;
  font-weight: 500;
  margin-left: auto;
}

.progress-bar {
  height: 3px;
  width: 100%;
  background-color: #e9efff;
  border-radius: 2px;
  overflow: hidden;
}

.progress {
  display: block;
  position: relative;
  width: 60%;
  height: 100%;
  background-color: #2992dc;
  border-radius: 6px;
}

.info-area {
  width: 100%;
  position: absolute;
  top: 0;
  left: 30px;
  transition: transform 0.4s ease-in;
}

#item-2:checked ~ .player #test {
  transform: translateY(0);
}

#item-2:checked ~ .player #test {
  transform: translateY(-40px);
}

#item-3:checked ~ .player #test {
  transform: translateY(-80px);
}
</style>
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
					<section id="one" class="wrapper style1 special two">
						<div class="inner">
							<header class="major">
								<div class="two1">
									<div class="row">
										<div class="col-md-8 two2">
											
											<div class="row"><div class="col-12"><h2>Pensando em você</h2><p> utilizamos um sistema de agendamento online para facilitar a marcação de horários e evitar esperas.</p></div></div>
											<div class="imgsection3"><img src="images/logoclean.png" alt="Barba Man"></div>
								</div>
										<div class="col-md-4 imgsection2"><img src="images/pc.PNG" alt="Júnior Silva"></div>
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
          <img src="images/corte1.jpg" alt="song">
        </label>
        <label class="card" for="item-2" id="song-2">
          <img src="images/corte2.jpg" alt="song">
        </label>
        <label class="card" for="item-3" id="song-3">
          <img src="images/corte3.jpg" alt="song">
        </label>
       
      </div>
     
    </div>
</div>

<script>$('input').on('change', function() {
  $('body').toggleClass('blue');
});</script>
								
							</header>
							
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
							
							
							<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:junniorssilva92@gmail.com?subject=Barba Man&body=" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
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