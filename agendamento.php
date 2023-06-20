<?php
    session_start();
    include_once('config.php');
    if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }    
        $logado = $_SESSION['email'];

        $sql = "SELECT * FROM horarios ORDER BY id DESC";
        $result = $conexao->query($sql);
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/agendamento.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  </head>
	<style>
		.editbtn{
			margin-top: 5%;
		}
		a{
			text-decoration: none!important;
			border: none!important;
					}
		.major .icons {
			background: #ED4933!important;
			display: flex;
			border-radius: 15px;
		}
		.ico img{
			border-radius: 50%;
			padding: 10%;
			width: 60%;
		}
		.ico img:hover {
			background: #fff;
			transition: 0.5s;
			
		}
	
		.selected {
			border-radius: 50%;
			color: #fff!important;
			width: 50%;
        }
		.major p {
			font-weight: bolder;
			color: #000!important;
		}
		.major img {
    max-width:150px;
    max-height:100px;
    width: auto;
    height: auto;
}
.major img {
    width: 55%;
    height: 50%;
	min-height: 45px;
	min-width: 50px;
	padding: 5%;
}
@media screen and (max-width: 1020px) {
	.servicosico{
		display: none;
	}
}

	</style>
	<body class="landing is-preload">	
			<div id="page-wrapper">
				<header id="header" class="alt">
						<h1><a href="index.html">BARBAMAN</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="index.php">Home</a></li>
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
						<h2>AGENDAMENTO</h2>
							<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								
							



    
    <ul id="selectedServices"></ul>
	

 
	<div class="container text-center servicosico">
  <div class="row icons major">
    <div class="col-sm">
	<span class="ico" onclick="addService(1, this)">
		                <span class="label"><p>cabelo</p>
		                    <img src="images/cabelo.png" alt="tesoura para cabelo" width="50%">
		                </span>
		            </span>
    </div>
    <div class="col-sm">
	<span class="ico" onclick="addService(2, this)">
		                <span class="label"> <p>barba</p>
		                    <img src="images/barba.png" alt="máquina de corte" width="50%">
		                </span>
		            </span>
    </div>
    <div class="col-sm">
	<span class="ico" onclick="addService(3, this)">
		                <span class="label"> <p>sobrancelha</p>
		                    <img src="images/sobrancelha.png" alt="bigode" width="50%" height="60%">
		                </span>
		            </span>
    </div>
	<div class="col-sm">
	<span class="ico" onclick="addService(4, this)">
		                <span class="label"> <p>pigmentacao</p>
		                    <img src="images/pigmentacao.png" alt="bigode" width="50%" height="60%">
		                </span>
		            </span>
    </div>
	<div class="col-sm">
	<span class="ico" onclick="addService(5, this)">
		                <span class="label"> <p>luzes</p>
		                    <img src="images/luzes.png" alt="bigode" width="50%">
		                </span>
						</span>
    </div>
	<div class="col-sm">
	<span class="ico" onclick="addService(6, this)">
		                <span class="label"> <p>platinado</p>
		                    <img src="images/platinado.png" alt="bigode" width="50%">
		                </span>
						</span>
    </div>
	<div class="col-sm">
	<span class="ico" onclick="addService(7, this)">
		                <span class="label"><p>reflexo</p>
		                    <img src="images/reflexo.png" alt="bigode" width="50%" height="60%">
		                </span>
		            </span>
    </div>
  </div>
</div>	

</form>

							<form method="post" action="agendar.php">
							<label for="servico">Selecione:</label>
    <select name="servico" id="servico">
		
        <option value="1">cabelo</option>
        <option value="2">cabelo + tesoura</option>
        <option value="3">cabelo + barba + sobrancelhas</option>
		<option value="3">cabelo + tesoura + barba + sobrancelhas</option>
        <option value="4">cabelo + pigmentação</option>
        <option value="5">cabelo + barba + pigmentação</option>
        <option value="6">barba + pigmentação</option>
        <option value="7">barba</option>
        <option value="8">Sobrancelhas</option>
        <option value="9">Platinado</option>
		<option value="10">Luzes</option>
		<option value="11">Reflexo</option>
    </select>
    <br>
   <label for="hora">Horarios disponíveis</label>
   <select id="hora" name="hora">
	 <?php include 'horarios_30min.php'; ?>
   </select>
   <br>
   <input type="text" value="$logado" name="logado" hidden>
   
   <input type="submit" class="button fit primary editbtn" value="Agendar">
   
 </form>
								
							</header>
							
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